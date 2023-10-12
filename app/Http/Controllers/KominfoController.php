<?php

namespace App\Http\Controllers;

use App\Models\Kominfo;
use Illuminate\Http\Request;

class KominfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kominfo::all();
        return view('admin.departement.kominfo.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('kominfo', 'public');
        Kominfo::create($data);
        return redirect('/admin/kominfo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kominfo $kominfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kominfo $kominfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['foto'])) {
            $data['foto'] = $request->file('foto')->store('kominfo', 'public');
        } else {
            unset($data['foto']);
        }
        Kominfo::findOrFail($id)->update($data);
        return redirect('/admin/kominfo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Kominfo::findOrFail($id)->delete();
        return  redirect('/admin/kominfo');
    }
}
