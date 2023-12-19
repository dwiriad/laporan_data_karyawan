<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama;
use Illuminate\Support\Facades\Session;

use Storage;

class AgamaController extends Controller
{
    public function index()
    {
        $agama = Agama::all();
        return view('agama.agama', compact('agama'));
    }

    public function create()
    {
        return view('agama.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $agama = new Agama;
        $agama->name = $request->name;
        $agama->save();

        Session::flash('flash_message', 'Data agama berhasil disimpan');

        return redirect('/agama');
    }

    public function edit(Agama $agama)
    {
        return view('agama.create', compact('agama'));
    }

    public function update(Request $request, Agama $agama)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $agama->name = $request->name;
        $agama->update();

        Session::flash('flash_message', 'Data agama berhasil diupdate');

        return redirect('/agama');
    }

    public function delete(Agama $agama)
    {
        $agama->delete();
        Session::flash('flash_message', 'Data agama berhasil dihapus');
        return redirect('/agama');
    }
}
