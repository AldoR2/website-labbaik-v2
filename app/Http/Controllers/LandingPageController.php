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
        $rapats = Rapat::latest()->paginate(3);
        // dd($data);
        return view('userGuest.index', ['data' => $data, 'rapats' => $rapats]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail_anggota()
    {
        // $rapats = Rapat::latest()->paginate(3);
        // dd($rapats);
        return view('userGuest.detail_pengurus');
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
