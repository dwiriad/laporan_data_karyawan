<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang_Divisi;
use App\Models\User;
use App\Models\DataKaryawan;
use App\Models\Agama;
use App\Models\Gol;
use App\Models\Jenis_Kelamin;
use App\Models\Status;
use App\Exports\DataKaryawanExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Storage;

class DataKaryawanController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'admin')
        {
            $data_karyawan = DataKaryawan::all();
        }
        else
        {
            $data_karyawan =  DataKaryawan::where('user_id', Auth::user()->id)->get();
        }
        return view('data_karyawan.index', compact('data_karyawan'));
    }

    public function create()
    {
        $list_divisi = Bidang_Divisi::pluck('name', 'id');
        $list_agama = Agama::pluck('name', 'id');
        $list_gol = Gol::pluck('name', 'id');
        $list_jk = Jenis_Kelamin::pluck('name', 'id');
        $list_status = Status::pluck('name', 'id');
        return view('data_karyawan.create', compact('list_divisi','list_gol','list_jk','list_status','list_agama'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'divisi_id' => 'required',
            'jk_id' => 'required',
            'agama_id' => 'required',
            'gol_id' => 'required',
            'status_id' => 'required',
            'nip' => 'required',
            'name' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg, jpg, png'
        ]);
        $foto_karyawan = $request->image;
        $nama_file = time() . '.' . $foto_karyawan->getClientOriginalExtension();
        $foto_karyawan->move('gambar/', $nama_file);

        $data_karyawan = new DataKaryawan;
        $data_karyawan->nip = $request->nip;
        $data_karyawan->divisi_id = $request->divisi_id;
        $data_karyawan->jk_id = $request->jk_id;
        $data_karyawan->gol_id = $request->gol_id;
        $data_karyawan->agama_id = $request->agama_id;
        $data_karyawan->status_id = $request->status_id;
        $data_karyawan->user_id = Auth::user()->id;
        $data_karyawan->name = $request->name;
        $data_karyawan->tempat_lahir = $request->tempat_lahir;
        $data_karyawan->tanggal_lahir = $request->tanggal_lahir;
        $data_karyawan->telp = $request->telp;
        $data_karyawan->alamat = $request->alamat;
        $data_karyawan->image = $nama_file;

        $data_karyawan->save();
        Session::flash('flash_message', 'Data data_karyawan berhasil disimpan');

        return redirect('/datakaryawan');
    }

    public function edit(DataKaryawan $data_karyawan)
    {
        $list_divisi = Bidang_Divisi::pluck('name', 'id');
        $list_agama = Agama::pluck('name', 'id');
        $list_gol = Gol::pluck('name', 'id');
        $list_jk = Jenis_Kelamin::pluck('name', 'id');
        $list_status = Status::pluck('name', 'id');
        return view('data_karyawan.create', compact('data_karyawan', 'list_divisi','list_gol','list_jk','list_status','list_agama'));
    }

    public function update(Request $request, DataKaryawan $data_karyawan)
    {
        $this->validate($request, [
            'divisi_id' => 'required',
            'jk_id' => 'required',
            'agama_id' => 'required',
            'gol_id' => 'required',
            'status_id' => 'required',
            'nip' => 'required',
            'name' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg, jpg, png'
        ]);
        if ($request->image) {
            $foto_karyawan = $request->image;
            $nama_file = time() . '.' . $foto_karyawan->getClientOriginalExtension();
            $foto_karyawan->move('gambar/', $nama_file);
            $data_karyawan->image = $nama_file;
        }

        $data_karyawan->divisi_id = $request->divisi_id;
        $data_karyawan->jk_id = $request->jk_id;
        $data_karyawan->gol_id = $request->gol_id;
        $data_karyawan->agama_id = $request->agama_id;
        $data_karyawan->status_id = $request->status_id;
        $data_karyawan->user_id = Auth::user()->id;
        $data_karyawan->name = $request->name;
        $data_karyawan->tempat_lahir = $request->tempat_lahir;
        $data_karyawan->tanggal_lahir = $request->tanggal_lahir;
        $data_karyawan->telp = $request->telp;
        $data_karyawan->alamat = $request->alamat;

        $data_karyawan->update();

        Session::flash('flash_message', 'Data data_karyawan berhasil disimpan');

        return redirect('/datakaryawan');
    }

    public function delete(DataKaryawan $data_karyawan)
    {
        $data_karyawan->delete();

        Session::flash('flash_message', 'Data data_karyawan berhasil dihapus');
        return redirect('/datakaryawan');
    }

    public function export_excel()
	{
		return Excel::download(new DataKaryawanExport, 'karyawan.xlsx');
	}

    public function cetak_pdf()
    {
    	$data_karyawan = DataKaryawan::all();

    	$pdf = PDF::loadview('pegawai_pdf',['data_karyawan'=>$data_karyawan]);
    	return $pdf->download('laporan-pegawai.pdf');
    }
}
