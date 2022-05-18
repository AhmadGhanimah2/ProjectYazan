<?php

namespace App\Http\Controllers;

use App\Models\CreateCard;
use Illuminate\Http\Request;

class CreateCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.Create-card');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreateCard  $createCard
     * @return \Illuminate\Http\Response
     */
    public function show(CreateCard $createCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateCard  $createCard
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateCard $createCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateCard  $createCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateCard $createCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateCard  $createCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateCard $createCard)
    {
        //
    }
}
