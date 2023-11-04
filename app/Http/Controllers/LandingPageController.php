<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Bph;
use App\Models\Kemuslimahan;
use App\Models\Kominfo;
use App\Models\kwu;
use App\Models\psdm;
use App\Models\Rapat;
use App\Models\Syiar;
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
        $bph = Bph::paginate(4);
        $bphAkhir = Bph::where('jabatan', 'wakil bendahara')->get();
        return view('userGuest.index', ['data' => $data, 'rapats' => $rapats, 'bph' => $bph, 'bphAkhir' => $bphAkhir]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail_anggota()
    {
        // $rapats = Rapat::latest()->paginate(3);
        // dd($rapats);
        $kominfo = Kominfo::all();
        $syiar = Syiar::paginate(2);
        $syiarr = Syiar::where('id', 4)->get();
        $kemuslimahan = Kemuslimahan::all();
        $psdm = psdm::all();
        $kwu = kwu::all();
        return view('userGuest.detail_pengurus', [
            'kominfo' => $kominfo, 'syiar' => $syiar, 'syiarr' => $syiarr,
            'kemuslimahan' => $kemuslimahan, 'psdm' => $psdm, 'kwu' => $kwu
        ]);
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
