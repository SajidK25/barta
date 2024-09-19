<?php

namespace App\Http\Controllers;

use App\Models\barta;
use Illuminate\Http\Request;

class BartaController //extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('barta.home');
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
    public function show(barta $barta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barta $barta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barta $barta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barta $barta)
    {
        //
    }
}
