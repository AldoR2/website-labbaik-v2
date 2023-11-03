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
        $data = Kemuslimahan::all();
        return view('admin.departement.kemuslimahan.index', compact('data'));
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
        $data['foto'] = $request->file('foto')->store('kemuslimahan', 'public');
        Kemuslimahan::create($data);
        return redirect('/admin/kemuslimahan');
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['foto'])) {
            $data['foto'] = $request->file('foto')->store('kemuslimahan', 'public');
        } else {
            unset($data['foto']);
        }
        Kemuslimahan::findOrFail($id)->update($data);
        return redirect('/admin/kemuslimahan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Kemuslimahan::findOrFail($id)->delete();
        return  redirect('/admin/kemuslimahan');
    }
}
