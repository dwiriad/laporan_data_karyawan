<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gol;
use Illuminate\Support\Facades\Session;

use Storage;

class GolController extends Controller
{
    public function index()
    {
        $gol = Gol::all();
        return view('gol.gol', compact('gol'));
    }

    public function create()
    {
        return view('gol.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $gol = new Gol;
        $gol->name = $request->name;
        $gol->save();

        Session::flash('flash_message', 'Data gol berhasil disimpan');

        return redirect('/gol');
    }

    public function edit(Gol $gol)
    {
        return view('gol.create', compact('gol'));
    }

    public function update(Request $request, Gol $gol)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $gol->name = $request->name;
        $gol->update();

        Session::flash('flash_message', 'Data gol berhasil diupdate');

        return redirect('/gol');
    }

    public function delete(Gol $gol)
    {
        $gol->delete();
        Session::flash('flash_message', 'Data gol berhasil dihapus');
        return redirect('/gol');
    }
}
