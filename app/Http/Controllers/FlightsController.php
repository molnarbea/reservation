<?php

namespace App\Http\Controllers;

use App\Models\flights;
use App\Http\Requests\StoreflightsRequest;
use App\Http\Requests\UpdateflightsRequest;

class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreflightsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(flights $flights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(flights $flights)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateflightsRequest $request, flights $flights)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(flights $flights)
    {
        //
    }
}
