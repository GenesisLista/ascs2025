<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Photo;
use App\Models\NaturaAeropack;

class AscsConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::all();
        return view('ascs_conference.index', compact('photos'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * This will display the Photos
     */
    public function photo_list()
    {
        $photos = Photo::all();
        return view('ascs_conference.photo_list', compact('photos'));
    }

    /**
     * This will display the Videos
     */
    public function videos()
    {
        return view('ascs_conference.videos');
    }

    /**
     * This will display the Natura Aeropack Photos
     */
    public function natura_aeropack()
    {
        $natura_aeropack = NaturaAeropack::all();
        return view('ascs_conference.natura_aeropack', compact('natura_aeropack'));
    }
}
