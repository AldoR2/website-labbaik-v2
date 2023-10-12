<?php

namespace App\Http\Controllers;

use App\Models\Syiar;
use Illuminate\Http\Request;

class SyiarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.departement.syiar.index');
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
    public function show(Syiar $syiar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Syiar $syiar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Syiar $syiar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Syiar $syiar)
    {
        //
    }
}
