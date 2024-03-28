<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTourPackageRequest;
use App\Http\Requests\UpdateTourPackageRequest;
use App\Models\TourPackage;

class TourPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tour_package.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTourPackageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TourPackage $tourPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TourPackage $tourPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTourPackageRequest $request, TourPackage $tourPackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TourPackage $tourPackage)
    {
        //
    }

    /**
     * Golf Tournament
     */
    public function golf_tournament()
    {
        return view('tour_package.golf_tournament');
    }

    /**
     * City Tour
     */
    public function city_tour()
    {
        return view('tour_package.city_tour');
    }

    /**
     * Travel Package
     */
    public function travel_package()
    {
        return view('tour_package.travel_package');
    }

    /**
     * Karaoke Night
     */
    public function karaoke_night()
    {
        return view('tour_package.karaoke_night');
    }

    /**
     * Ballroom Night
     */
    public function ballroom_night()
    {
        return view('tour_package.ballroom_night');
    }
}
