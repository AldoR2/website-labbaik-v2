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
        $data = psdm::all();
        return view('admin.departement.psdm.index', compact('data'));
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
        $data['foto'] = $request->file('foto')->store('psdm', 'public');
        psdm::create($data);
        return redirect('/admin/psdm');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['foto'])) {
            $data['foto'] = $request->file('foto')->store('psdm', 'public');
        } else {
            unset($data['foto']);
        }
        psdm::findOrFail($id)->update($data);
        return redirect('/admin/psdm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        psdm::findOrFail($id)->delete();
        return  redirect('/admin/psdm');
    }
}
