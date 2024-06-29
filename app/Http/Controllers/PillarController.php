<?php

namespace App\Http\Controllers;

use App\Models\Pillar;
use Illuminate\Http\Request;

class PillarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Pillar  $pillar
     * @return \Illuminate\Http\Response
     */
    public function show(Pillar $pillar)
    {
        return view('pillars');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pillar  $pillar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pillar $pillar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pillar  $pillar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pillar $pillar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pillar  $pillar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pillar $pillar)
    {
        //
    }
}
