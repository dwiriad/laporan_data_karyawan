@extends('admin.layouts.main')


@section('container')
    <section class="content-header" >
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Karyawan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Data Karyawan</h3>
            </div>
            <div class="card-body">
                <div class="text-right mb-2">
                    <a href="{{ route('data_karyawan.create') }}"><button type="button"
                            class="btn bg-gradient-primary">Create</button></a>
                    <a href="{{route('data_karyawan.excel')}}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                    <a href="{{route('data_karyawan.pdf')}}" class="btn btn-danger" target="_blank">CETAK PDF</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr style="text-align: center;">
                            <th style="width: 25px">Id</th>
                            <th>User</th>
                            <th>NIP</th>
                            <th>Divisi</th>
                            <th>Nama Lengkap</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Golongan Darah</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Image</th>
                            <th style="width: 100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($data_karyawan as $p)
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->user->name }}</td>
                            <td>{{ $p->nip }}</td>
                            <td>{{ $p->bidang_divisi->name }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->tempat_lahir }}</td>
                            <td>{{ $p->tanggal_lahir }}</td>
                            <td>{{ $p->jenis_kelamin->name }}</td>
                            <td>{{ $p->agama->name }}</td>
                            <td>{{ $p->status->name }}</td>
                            <td>{{ $p->gol->name }}</td>
                            <td>{{ $p->telp }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>
                                <img src="{{ asset('gambar/'.$p->image) }}" alt="" style="width:80px;height:50px;display:block;margin-right:auto;margin-left:auto;">
                            </td>
                            <td>
                                <a href="{{ route('data_karyawan.edit', $p->id) }}"><button type="button" name="edit" class="btn btn-sm bg-gradient-warning">Edit</button></a>
                                <a href="{{ route('data_karyawan.delete', $p->id) }}"><button type="button" name="delete" class="btn btn-sm bg-gradient-danger"onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
