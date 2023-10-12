<?php

namespace App\Http\Controllers;

use App\Models\Kemuslimahan;
use Illuminate\Http\Request;

class KemuslimahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.departement.kemuslimahan.index');
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
    public function show(Kemuslimahan $kemuslimahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kemuslimahan $kemuslimahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kemuslimahan $kemuslimahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kemuslimahan $kemuslimahan)
    {
        //
    }
}
