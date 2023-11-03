<?php

namespace App\Http\Controllers;

use App\Models\Bph;
use Illuminate\Http\Request;

class BphController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Bph::all();
        return view('admin.bph.index', compact('data'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('bph', 'public');
        Bph::create($data);
        return redirect('/admin/bph');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['foto'])) {
            $data['foto'] = $request->file('foto')->store('bph', 'public');
        } else {
            unset($data['foto']);
        }
        Bph::findOrFail($id)->update($data);
        return redirect('/admin/bph');
    }

    public function destroy($id)
    {
        Bph::findOrFail($id)->delete();
        return  redirect('/admin/bph');
    }
}
