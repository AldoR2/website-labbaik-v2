<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Rapat;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::latest()->paginate(3);
        // dd($data);
        return view('userGuest.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function rapat()
    {
        $rapats = Rapat::latest()->paginate(3);
        // dd($rapat);
        return view('userGuest.index', compact('rapats'));
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
}
