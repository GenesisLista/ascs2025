<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;

use App\Models\Registration;
use App\Models\IntlDelegateOnline;
use App\Models\IntlDelegatePhysical;
use App\Models\LocalDelegateOnline;
use App\Models\LocalDelegatePhysical;
use App\Models\SpecialDietary;

use Mail;
use App\Mail\RegistrationMail;

use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('registration.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $idoa = IntlDelegateOnline::all(); // International Delegate Online
        $idpa = IntlDelegatePhysical::all(); // International Delegate Physical
        $ldoa = LocalDelegateOnline::all(); // Local Delegate Online
        $ldpa = LocalDelegatePhysical::all(); // Local Delegate Physical
        $sd = SpecialDietary::all(); // Special Dietary
        return view('registration.create')->with([
            'idoa' => $idoa,
            'idpa' => $idpa,
            'ldoa' => $ldoa,
            'ldpa' => $ldpa,
            'sd' => $sd
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistrationRequest $request, Registration $registration)
    {

        # This is a test if the submit form is a spam or not
        # The $request->textonly should return empty because the input field is hidden and not required
        # If the $request->textonly is not empty it means it is a bot/spam
        if($request->textonly != null){
            # Spam request just return okay
            return redirect()->route('registration.create')->with('success-submitted','Conference Registration form submitted successfully!');
        }else {

            # This is not a spam request

            // 0-0-0-0
            if($request->intl_delegate_physical_id == null && $request->local_delegate_physical_id == null && $request->intl_delegate_online_id == null && $request->local_delegate_online_id == null) {
                return redirect()->route('registration.create')->with('success-rejected','Please choose one for ID-PA, LD-PA');
                $email = false;
            }

            // 0-0-0-1 local_delegate_online_id
            if($request->intl_delegate_physical_id == null && $request->local_delegate_physical_id == null && $request->intl_delegate_online_id == null && $request->local_delegate_online_id != null){
                $idpa = null;
                $ldpa = null;
                $idoa = null;
                $ldoa = $request->local_delegate_online_id;
                $email = true;
            }

            // 0-0-1-0 intl_delegate_online_id
            if($request->intl_delegate_physical_id == null && $request->local_delegate_physical_id == null && $request->intl_delegate_online_id != null && $request->local_delegate_online_id == null){
                $idpa = null;
                $ldpa = null;
                $idoa = $request->intl_delegate_online_id;
                $ldoa = null;
                $email = true;
            }

            // 0-0-1-1 intl_delegate_online_id, local_delegate_online_id
            if($request->intl_delegate_physical_id == null && $request->local_delegate_physical_id == null && $request->intl_delegate_online_id != null && $request->local_delegate_online_id != null){
                $idpa = null;
                $ldpa = null;
                $idoa = $request->intl_delegate_online_id;
                $ldoa = $request->local_delegate_online_id;
                $email = true;
            }

            // 0-1-0-0 local_delegate_physical_id
            if($request->intl_delegate_physical_id == null && $request->local_delegate_physical_id != null && $request->intl_delegate_online_id == null && $request->local_delegate_online_id == null){
                $idpa = null;
                $ldpa = $request->local_delegate_physical_id;
                $idoa = null;
                $ldoa = null;
                $email = true;
            }

            // 0-1-0-1 local_delegate_physical_id, local_delegate_online_id
            if($request->intl_delegate_physical_id == null && $request->local_delegate_physical_id != null && $request->intl_delegate_online_id == null && $request->local_delegate_online_id != null){
                $idpa = null;
                $ldpa = $request->local_delegate_physical_id;
                $idoa = null;
                $ldoa = $request->local_delegate_online_id;
                $email = true;
            }

            // 0-1-1-0 local_delegate_physical_id, intl_delegate_online_id
            if($request->intl_delegate_physical_id == null && $request->local_delegate_physical_id != null && $request->intl_delegate_online_id != null && $request->local_delegate_online_id == null){
                $idpa = null;
                $ldpa = $request->local_delegate_physical_id;
                $idoa = $request->intl_delegate_online_id;
                $ldoa = null;
                $email = true;
            }

            // 0-1-1-1 local_delegate_physical_id, intl_delegate_online_id, local_delegate_online_id
            if($request->intl_delegate_physical_id == null && $request->local_delegate_physical_id != null && $request->intl_delegate_online_id != null && $request->local_delegate_online_id != null){
                $idpa = null;
                $ldpa = $request->local_delegate_physical_id;
                $idoa = $request->intl_delegate_online_id;
                $ldoa = $request->local_delegate_online_id;
                $email = true;
            }

            // 1-0-0-0 intl_delegate_physical_id
            if($request->intl_delegate_physical_id != null && $request->local_delegate_physical_id == null && $request->intl_delegate_online_id == null && $request->local_delegate_online_id == null){
                $idpa = $request->intl_delegate_physical_id;
                $ldpa = null;
                $idoa = null;
                $ldoa = null;
                $email = true;
            }

            // 1-0-0-1 intl_delegate_physical_id, local_delegate_online_id
            if($request->intl_delegate_physical_id != null && $request->local_delegate_physical_id == null && $request->intl_delegate_online_id == null && $request->local_delegate_online_id != null){
                $idpa = $request->intl_delegate_physical_id;
                $ldpa = null;
                $idoa = null;
                $ldoa = $request->local_delegate_online_id;
                $email = true;
            }

            // 1-0-1-0 intl_delegate_physical_id, intl_delegate_online_id
            if($request->intl_delegate_physical_id != null && $request->local_delegate_physical_id == null && $request->intl_delegate_online_id != null && $request->local_delegate_online_id == null){
                $idpa = $request->intl_delegate_physical_id;
                $ldpa = null;
                $idoa = $request->intl_delegate_online_id;
                $ldoa = null;
                $email = true;
            }

            // 1-0-1-1 intl_delegate_physical_id, intl_delegate_online_id, local_delegate_online_id
            if($request->intl_delegate_physical_id != null && $request->local_delegate_physical_id == null && $request->intl_delegate_online_id != null && $request->local_delegate_online_id != null){
                $idpa = $request->intl_delegate_physical_id;
                $ldpa = null;
                $idoa = $request->intl_delegate_online_id;
                $ldoa = $request->local_delegate_online_id;
                $email = true;
            }

            // 1-1-0-0 intl_delegate_physical_id, local_delegate_physical_id
            if($request->intl_delegate_physical_id != null && $request->local_delegate_physical_id != null && $request->intl_delegate_online_id == null && $request->local_delegate_online_id == null){
                $idpa = $request->intl_delegate_physical_id;
                $ldpa = $request->local_delegate_physical_id;
                $idoa = null;
                $ldoa = null;
                $email = true;
            }

            // 1-1-0-1 intl_delegate_physical_id, local_delegate_physical_id, local_delegate_online_id
            if($request->intl_delegate_physical_id != null && $request->local_delegate_physical_id != null && $request->intl_delegate_online_id == null && $request->local_delegate_online_id != null){
                $idpa = $request->intl_delegate_physical_id;
                $ldpa = $request->local_delegate_physical_id;
                $idoa = null;
                $ldoa = $request->local_delegate_online_id;
                $email = true;
            }

            // 1-1-1-0 intl_delegate_physical_id, local_delegate_physical_id, intl_delegate_online_id
            if($request->intl_delegate_physical_id != null && $request->local_delegate_physical_id != null && $request->intl_delegate_online_id != null && $request->local_delegate_online_id == null){
                $idpa = $request->intl_delegate_physical_id;
                $ldpa = $request->local_delegate_physical_id;
                $idoa = $request->intl_delegate_online_id;
                $ldoa = null;
                $email = true;
            }

            // 1-1-1-1 intl_delegate_physical_id, local_delegate_physical_id, intl_delegate_online_id, local_delegate_online_id
            if($request->intl_delegate_physical_id != null && $request->local_delegate_physical_id != null && $request->intl_delegate_online_id != null && $request->local_delegate_online_id != null){
                $idpa = $request->intl_delegate_physical_id;
                $ldpa = $request->local_delegate_physical_id;
                $idoa = $request->intl_delegate_online_id;
                $ldoa = $request->local_delegate_online_id;
                $email = true;
            }
            
            // This is for the email, only send when fields has values
            if($email == true){
                $content = [
                    'subject' => 'This is not the mail subject showed on the email', // This is not the subject, the correct subject is on Abstract > Envelope
                    'body' => 'Dear Valued Colleague/s,' // This is the body content and also on the abstract.blade.php
                ];
        
                Mail::to($request->email)
                ->bcc('laudio.lg@amchem.org')
                ->bcc('pscspresident@gmail.com')
                ->bcc('pearl.valenton@refinette.net')
                ->bcc('genesis.bergonia.lista@gmail.com')
                ->send(new RegistrationMail($content));
            }

            $registration->email = $request->email;
            $registration->name = $request->name;
            $registration->designation = $request->designation;
            $registration->company = $request->company;
            $registration->address = $request->address;
            $registration->city = $request->city;
            $registration->state = $request->state;
            $registration->country = $request->country;
            $registration->telephone_number = $request->telephone_number;
            $registration->country_code = $request->country_code;
            $registration->mobile_number = $request->mobile_number;
            $registration->intl_delegate_physical_id = $idpa;
            $registration->local_delegate_physical_id = $ldpa;
            $registration->intl_delegate_online_id = $idoa;
            $registration->local_delegate_online_id = $ldoa;
            $registration->special_dietary_id = $request->special_dietary_id;
            $registration->special_dietary_notes = $request->special_dietary_other_notes;
            $registration->save();

            return redirect()->route('registration.create')->with('success-submitted','Conference Registration form submitted successfully!');

        } # End of spam test
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }

    public function list()
    {
        // $registration = DB::table('registrations')
        //                 ->join('intl_delegate_physicals', 'registrations.intl_delegate_physical_id', '=', 'intl_delegate_physicals.id')
        //                 ->select('registrations.*', 'intl_delegate_physicals.name AS idpaname')
        //                 ->get();
        $registration = Registration::all();
        return view('registration.list')->with([
            'registration' => $registration
        ]);
    }
}