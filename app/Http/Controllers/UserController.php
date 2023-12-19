<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    protected function index()
    {
       $jumlah_user = User::count();
       $user = User::all();
       $no = 0;
       return view('user.index', compact('user', 'no', 'jumlah_user'));
    }
    protected function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','string', 'min:8'],
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'penjual';
        $user->telepon = $request->telepon;
        $user->save();
        Session::flash('flash_message', 'Data User berhasil disimpan');
        return redirect('/user');
    }
    public function edit(User $user)
    {
        return view('user.create', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required'
        ]);

        $pass_lama = $user->password;
        $user->name = $request->name;
        $user->email = $request->email;
        $pass_baru = $request->password;
        if($request->password)
            $user->password = Hash::make($request->password);
        $user->update();
        Session::flash('flash_message', 'Data User berhasil diupdate');
        return redirect('/user');
    }
    public function delete(User $user)
    {
        $user->delete();

        Session::flash('flash_message', 'Data User berhasil dihapus');
        Session::flash('penting', true);
        return redirect('/user');
    }
}
