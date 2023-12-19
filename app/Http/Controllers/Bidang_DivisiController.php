<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang_Divisi;
use Illuminate\Support\Facades\Session;

use Storage;

class Bidang_DivisiController extends Controller
{
    public function index()
    {
        $divisi = Bidang_Divisi::all();
        return view('divisi.divisi', compact('divisi'));
    }

    public function create()
    {
        return view('divisi.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'keterangan' => 'required'
        ]);

        $divisi = new Bidang_Divisi;
        $divisi->name = $request->name;
        $divisi->keterangan = $request->keterangan;
        $divisi->save();

        Session::flash('flash_message', 'Data divisi berhasil disimpan');

        return redirect('/divisi');
    }

    public function edit(Bidang_Divisi $divisi)
    {
        return view('divisi.create', compact('divisi'));
    }

    public function update(Request $request, Bidang_Divisi $divisi)
    {
        $this->validate($request, [
            'name' => 'required',
            'keterangan' => 'required'
        ]);

        $divisi->name = $request->name;
        $divisi->keterangan = $request->keterangan;
        $divisi->update();

        Session::flash('flash_message', 'Data divisi berhasil diupdate');

        return redirect('/divisi');
    }

    public function delete(Bidang_Divisi $divisi)
    {
        $divisi->delete();
        Session::flash('flash_message', 'Data divisi berhasil dihapus');
        return redirect('/divisi');
    }
}
