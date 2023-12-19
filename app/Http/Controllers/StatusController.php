<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\Session;

use Storage;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::all();
        return view('status.status', compact('status'));
    }

    public function create()
    {
        return view('status.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $status = new Status;
        $status->name = $request->name;
        $status->save();

        Session::flash('flash_message', 'Data status berhasil disimpan');

        return redirect('/status');
    }

    public function edit(Status $status)
    {
        return view('status.create', compact('status'));
    }

    public function update(Request $request, Status $status)
    {
        $this->validate($request, [
            'name' => 'required',
            'keterangan' => 'required'
        ]);

        $status->name = $request->name;
        $status->keterangan = $request->keterangan;
        $status->update();

        Session::flash('flash_message', 'Data status berhasil diupdate');

        return redirect('/status');
    }

    public function delete(Status $status)
    {
        $status->delete();
        Session::flash('flash_message', 'Data status berhasil dihapus');
        return redirect('/status');
    }
}
