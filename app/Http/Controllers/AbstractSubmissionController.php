<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAbstractSubmissionRequest;
use App\Http\Requests\UpdateAbstractSubmissionRequest;

use App\Models\Theme;
use App\Models\Poster;
use App\Models\AbstractSubmission;

use Mail;
use App\Mail\AbstractMail;

class AbstractSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('abstract_submission.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $theme = Theme::all(); // Theme
        $poster = Poster::all(); // Poster
        return view('abstract_submission.create')->with([
            'theme' => $theme,
            'poster' => $poster
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAbstractSubmissionRequest $request, AbstractSubmission $abstractSubmission)
    {

        # This is a test if the submit form is a spam or not
        # The $request->textonly should return empty because the input field is hidden and not required
        # If the $request->textonly is not empty it means it is a bot/spam
        if($request->textonly != null){
            # Spam request just return okay
            return redirect()->route('abstract_submission.create')->with('success-submitted', 'Abstract Submission form submitted successfully!');
        }else {

            // This is for the email
            $content = [
                'subject' => 'This is not the mail subject showed on the email', // This is not the subject, the correct subject is on Abstract > Envelope
                'body' => 'Dear Valued Colleague/s,' // This is the body content and also on the abstract.blade.php
            ];

            Mail::to($request->email)
            ->bcc('laudio.lg@amchem.org')
            ->bcc('pscspresident@gmail.com')
            ->bcc('pearl.valenton@refinette.net')
            ->bcc('genesis.bergonia.lista@gmail.com')
            ->send(new AbstractMail($content));

            $abstract_path = $request->abstract_path->getClientOriginalName(); // Get the filename
            $abstract = date('YmdHis').'_'.$abstract_path; // Append date and time on the file name to be unique
            if($request->hasFile('abstract_path')) {
                $request->abstract_path->storeAs('public/abstract', $abstract); // Save the file on the public/abstract storage
            }

            // Save the request
            $abstractSubmission->author = $request->author;
            $abstractSubmission->email = $request->email;
            $abstractSubmission->country = $request->country;
            $abstractSubmission->code = $request->code;
            $abstractSubmission->phone = $request->phone;
            $abstractSubmission->company = $request->company;
            $abstractSubmission->presenter = $request->presenter;
            $abstractSubmission->title = $request->title;
            $abstractSubmission->biography = $request->biography;
            $abstractSubmission->theme_id = $request->theme_id;
            $abstractSubmission->poster_id = $request->poster_id;
            $abstractSubmission->abstract_path = $abstract;
            $abstractSubmission->save();
            return redirect()->route('abstract_submission.create')->with('success-submitted', 'Abstract Submission form submitted successfully!');

        } # End of spam test
        
    }

    /**
     * Display the specified resource.
     */
    public function show(AbstractSubmission $abstractSubmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AbstractSubmission $abstractSubmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbstractSubmissionRequest $request, AbstractSubmission $abstractSubmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AbstractSubmission $abstractSubmission)
    {
        //
    }
}