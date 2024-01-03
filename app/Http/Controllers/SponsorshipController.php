<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSponsorshipRequest;
use App\Http\Requests\UpdateSponsorshipRequest;

use App\Models\Sponsorship;
use App\Models\SponsorshipPackage;
use App\Models\BoothPackage;
use App\Models\PromotionalPackage;

use Mail;
use App\Mail\SponsorshipMail;

class SponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sponsorship.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sponsorship = SponsorshipPackage::all(); // Sponsorship Package
        $booth = BoothPackage::all(); // Booth Package
        $promotional = PromotionalPackage::all(); // Promotional Package
        return view('sponsorship.create')->with([
            'sponsorship' => $sponsorship,
            'booth' => $booth,
            'promotional' => $promotional
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSponsorshipRequest $request, Sponsorship $sponsorship)
    {
        // Check if no choices are chosen
        if($request->sponsorship_package == null && $request->booth_package == null && $request->promotional_package == null){
            return redirect()->route('sponsorship.create')->with('success-rejected','Please select one choice from the dropdown list.');
        }

        // This is for the email
        $content = [
            'subject' => 'This is not the mail subject showed on the email', // This is not the subject, the correct subject is on Abstract > Envelope
            'body' => 'This acknowledges receipt of your Sponsorship / Exhibition for ASCS 2025.' // This is the body content and also on the abstract.blade.php
        ];

        Mail::to($request->email)->send(new SponsorshipMail($content));

        $sponsorship->email = $request->email;
        $sponsorship->name = $request->name;
        $sponsorship->designation = $request->designation;
        $sponsorship->company = $request->company;
        $sponsorship->address = $request->address;
        $sponsorship->city = $request->city;
        $sponsorship->state = $request->state;
        $sponsorship->country = $request->country;
        $sponsorship->telephone_number = $request->telephone_number;
        $sponsorship->country_code = $request->country_code;
        $sponsorship->mobile_number = $request->mobile_number;
        $sponsorship->sponsorship_package_id = $request->sponsorship_package;
        $sponsorship->booth_package_id = $request->booth_package;
        $sponsorship->promotional_id = $request->promotional_package;
        $sponsorship->save();

        // Registration::create($request->all());
        return redirect()->route('sponsorship.create')->with('success-submitted','Sponsorship / Exhibition form submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sponsorship $sponsorship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sponsorship $sponsorship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSponsorshipRequest $request, Sponsorship $sponsorship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sponsorship $sponsorship)
    {
        //
    }
}
