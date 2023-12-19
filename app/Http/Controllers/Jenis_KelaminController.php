<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Kelamin;
use Illuminate\Support\Facades\Session;

use Storage;

class Jenis_KelaminController extends Controller
{
    public function index()
    {
        $jenis_kelamin = Jenis_Kelamin::all();
        return view('jenis_kelamin.jenis_kelamin', compact('jenis_kelamin'));
    }

    public function create()
    {
        return view('jenis_kelamin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $jenis_kelamin = new Jenis_Kelamin;
        $jenis_kelamin->name = $request->name;
        $jenis_kelamin->save();

        Session::flash('flash_message', 'Data jenis_kelamin berhasil disimpan');

        return redirect('/jenis_kelamin');
    }

    public function edit(Jenis_Kelamin $jenis_kelamin)
    {
        return view('jenis_kelamin.create', compact('jenis_kelamin'));
    }

    public function update(Request $request, Jenis_Kelamin $jenis_kelamin)
    {
        $this->validate($request, [
            'name' => 'required',
            'keterangan' => 'required'
        ]);

        $jenis_kelamin->name = $request->name;
        $jenis_kelamin->keterangan = $request->keterangan;
        $jenis_kelamin->update();

        Session::flash('flash_message', 'Data jenis_kelamin berhasil diupdate');

        return redirect('/jenis_kelamin');
    }

    public function delete(Jenis_Kelamin $jenis_kelamin)
    {
        $jenis_kelamin->delete();
        Session::flash('flash_message', 'Data jenis_kelamin berhasil dihapus');
        return redirect('/jenis_kelamin');
    }
}
