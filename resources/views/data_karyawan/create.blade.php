@extends('admin.layouts.main')

@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Karyawan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Karyawan</h3>
                        </div>
                        <form method="POST"
                            action="@isset($data_karyawan) {{ route('data_karyawan.update', $data_karyawan->id) }} @endisset @empty($data_karyawan) {{ route('data_karyawan.store') }} @endempty" enctype="multipart/form-data">
                            <div class="card-body">
                                @include('partials.errors')
                                @csrf
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" name="nip" class="form-control" required
                                        placeholder="Masukan NIP" value={{isset($data_karyawan) ? $data_karyawan->nip : '' }} >
                                </div>
                                <div class="form-group">
                                    <label>Divisi</label>
                                    <select name="divisi_id" class="form-control" required>
                                        <option value="">Divisi</option>
                                        @foreach ($list_divisi as $key => $value)
                                            <option value="{{ $key }}"
                                                @isset($data_karyawan)
                                            {{ $data_karyawan->divisi_id == $key ? 'selected' : '' }}
                                            @endisset>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" required
                                        placeholder="Masukan Nama Lengkap" value={{isset($data_karyawan) ? $data_karyawan->name : '' }} >
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" required
                                        placeholder="Masukan Tempat Lahir" value={{isset($data_karyawan) ? $data_karyawan->tempat_lahir : '' }} >
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" name="tanggal_lahir" class="form-control" required
                                        placeholder="Masukan Tanggal Lahir" value={{isset($data_karyawan) ? $data_karyawan->tanggal_lahir : '' }} >
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jk_id" class="form-control" required>
                                        <option value="">Jenis Kelamin</option>
                                        @foreach ($list_jk as $key => $value)
                                            <option value="{{ $key }}"
                                                @isset($data_karyawan)
                                            {{ $data_karyawan->jk_id == $key ? 'selected' : '' }}
                                            @endisset>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama_id" class="form-control" required>
                                        <option value="">Agama</option>
                                        @foreach ($list_agama as $key => $value)
                                            <option value="{{ $key }}"
                                                @isset($data_karyawan)
                                            {{ $data_karyawan->agama_id == $key ? 'selected' : '' }}
                                            @endisset>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status_id" class="form-control" required>
                                        <option value="">Status</option>
                                        @foreach ($list_status as $key => $value)
                                            <option value="{{ $key }}"
                                                @isset($data_karyawan)
                                            {{ $data_karyawan->status_id == $key ? 'selected' : '' }}
                                            @endisset>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Golongan Darah</label>
                                    <select name="gol_id" class="form-control" required>
                                        <option value="">Golongan Darah</option>
                                        @foreach ($list_gol as $key => $value)
                                            <option value="{{ $key }}"
                                                @isset($data_karyawan)
                                            {{ $data_karyawan->gol_id == $key ? 'selected' : '' }}
                                            @endisset>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text" name="telp" class="form-control" required
                                        placeholder="Masukan Telepon" value={{isset($data_karyawan) ? $data_karyawan->telp : '' }} >
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea required type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">{{ isset($data_karyawan) ? $data_karyawan->alamat : '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" value={{ isset($kategori) ? $kategori->image : '' }}>
                                    </div>
                                </div>

                                <script>
                                    function togglePopup() {
                                        document.getElementById("popup-1").classList.toggle("active");
                                    }

                                </script>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
