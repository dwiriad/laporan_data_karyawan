@extends('admin.layouts.main')

@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User</h1>
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
                  <h3 class="card-title">User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST"
                action="@isset($user){{ route('user.update', $user->id) }} @endisset @empty($user) {{ route('user.store') }} @endempty">
                  <div class="card-body">
                    @include('partials.errors')
                    @csrf
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="name" class="form-control" required
                       placeholder="Masukkan Nama" value={{isset($user) ? $user->name : '' }} >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Email</label>
                        <input type="text" name="email" class="form-control" required
                        placeholder="Masukkan Email" value={{isset($user) ? $user->email : '' }} >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Telepon</label>
                        <input type="text" name="telepon" class="form-control" required
                        placeholder="Masukkan Telepon" value={{isset($user) ? $user->telepon : '' }} >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Password</label>
                        <input type="password" name="password" class="form-control"
                        placeholder="Masukkan Password" >
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
