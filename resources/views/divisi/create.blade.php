@extends('admin.layouts.main')

@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bidang Divisi</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Divisi</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST"
                            action="@isset($divisi) {{ route('divisi.update', $divisi->id) }} @endisset @empty($divisi) {{ route('divisi.store') }} @endempty" enctype="multipart/form-data">
                            <div class="card-body">
                                @include('partials.errors')
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama bidang divisi</label>
                                    <input type="text" name="name" class="form-control" required
                                        placeholder="Masukkan Nama divisi" value= {{ isset($divisi) ? $divisi->name : '' }} >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" required
                                        placeholder="Masukkan Keterangan" value= {{ isset($divisi) ? $divisi->keterangan : '' }} >
                                </div>
                            </div>
                            <!-- /.card-body -->

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
