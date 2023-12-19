@extends('interface.layout.main')
{{-- <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}"> --}}

@section('container')
    {{-- <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section> --}}
    <!-- Main content -->
    <section class="content" style="margin-top: 0; position: relative; padding:0 1px 0 150px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card card-primary">
                        {{-- <div class="card-header">
                            <h3 class="card-title">Product</h3>
                        </div> --}}
                        <form method="POST"
                            action="@isset($product) {{ route('product.update', $product->id) }} @endisset @empty($product) {{ route('product.store') }} @endempty">
                            <div class="card-body">
                                @include('partials.errors')
                                @csrf
                                <div class="form-group">
                                    <label>Pilih Kategori</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($list_category as $key => $value)
                                            <option value="{{ $key }}"
                                                @isset($product)
                                            {{ $product->category_id == $key ? 'selected' : '' }}
                                            @endisset>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" name="name" class="form-control" required
                                        placeholder="Masukan Nama Produk" value={{isset($product) ? $product->name : '' }} >
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input required type="number" name="price" class="form-control" placeholder="Masukan Harga"
                                        value="{{ isset($product) ? $product->price : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Harga Diskon</label>
                                    <input type="number" name="discount_price" class="form-control"
                                        placeholder="Masukan Harga Diskon"
                                        value="{{ isset($product) ? $product->discount_price : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea required type="text" name="description" class="form-control" placeholder="Masukan Deskripsi">{{ isset($product) ? $product->description : '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="images" value={{ isset($product) ? $product->images : '' }}>
                                    </div>
                                    <br>
                                <div class="form-group">
                                    <label>Stok Produk</label>
                                    <input required type="number" name="stock" class="form-control"
                                        placeholder="Masukan Jumlah Stok"
                                        value="{{ isset($product) ? $product->stock : '' }}">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <br><br>
    <!-- /.content -->
@endsection
