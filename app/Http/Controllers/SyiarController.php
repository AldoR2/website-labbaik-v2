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
        $data = Syiar::all();
        return view('admin.departement.syiar.index', compact('data'));
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
        $data['foto'] = $request->file('foto')->store('syiar', 'public');
        Syiar::create($data);
        return redirect('/admin/syiar');
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['foto'])) {
            $data['foto'] = $request->file('foto')->store('syiar', 'public');
        } else {
            unset($data['foto']);
        }
        Syiar::findOrFail($id)->update($data);
        return redirect('/admin/syiar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Syiar::findOrFail($id)->delete();
        return  redirect('/admin/syiar');
    }
}
