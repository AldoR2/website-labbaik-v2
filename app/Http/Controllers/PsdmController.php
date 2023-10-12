<?php

namespace App\Http\Controllers;

use App\Models\psdm;
use Illuminate\Http\Request;

class PsdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.departement.psdm.index');
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
    public function show(psdm $psdm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(psdm $psdm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, psdm $psdm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(psdm $psdm)
    {
        //
    }
}
