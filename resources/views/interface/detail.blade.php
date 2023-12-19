@extends('interface.layout.main')

@section('container')
    <section class="container">

        <ul class="b-crumbs">
            <li>
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('product-gallery') }}">
                    Produk
                </a>
            </li>
            <li>
                <a href="{{ route('product-gallery') }}">
                    {{ $product->category->name }}
                </a>
            </li>
            <li>
                <span>{{ $product->name }}</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>{{ $product->name }}</span></h1>

        <h4>Nama Pemilik : {{ $product->user->name }}</h4> <br>

        <!-- Single Product - start -->
        <div class="prod-wrap">

            <!-- Product Images -->
            <div class="prod-slider-wrap">


                <div class="prod-slider">
                    <ul class="prod-slider-car">
                        @foreach ($product->product_images as $product_image)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img"
                                    href="{{ asset('gambar/' . $product_image->image) }}">
                                    <img src="{{ asset('gambar/' . $product_image->image) }}" alt="">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="prod-thumbs">
                    <ul class="prod-thumbs-car">
                        @foreach ($product->product_images as $product_image)
                            <li>
                                <a data-slide-index="{{ $loop->index }}" href="#">
                                    <img src="{{ asset('gambar/' . $product_image->image) }}" alt="">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Product Description/Info -->
            <div class="prod-cont">
                <div class="prod-sticker">
                    <p class="prod-sticker-3">Stok: {{ $product->stock }}</p>
                </div> <br><br>
                <div class="prod-cont-txt">
                    <p>{{ $product->description }}</p>
                    <i class="fa-solid fa-square-share-nodes"></i>
                </div>


                <ul class="prod-i-props" style="font-size: 25px;">
                    <li>{{ $product->price }}</li>
                </ul>
                <br> <br>
                <div class="prod-info">
                    <p class="prod-addwrap">
                        <i class="nav-icon fa-solid fa-square-share-nodes"></i>
                    <div class="col-md-10">
                        <a href="https://wa.me/{{ $product->user->telepon }}?text=Hallo%2C%20saya%20melihat%20{{ $product->name }}%20yang%20Anda%20tampilkan%20di%20website%20SIDONA%2C%20bagaimana%20kondisinya%20saat%20ini?"
                            target="_blank"><img src="{{ asset('img/tombol chat dengan pemilik-01.png') }}"
                                alt=""></a>
                    </div>
                    </p>
                </div>




            </div>

        </div>
        <!-- Single Product - end -->

        <!-- Related Products - start -->
        <div class="prod-related">
            <h2>Produk Terkait</h2>
            <div class="prod-related-car" id="prod-related-car">
                <ul class="slides">

                    <li class="prod-rel-wrap">
                        @foreach ($post as $po)
                            @if ($po->product_images->count() > 0)
                                <div class="prod-rel">
                                    <a href="{{ route('product-detail', $po->id) }}" class="prod-rel-img">
                                        <img src="{{ asset('gambar/' . $po->product_images[0]->image) }}" alt="">
                                    </a>
                                    <div class="prod-rel-cont">
                                        <h3><a href="{{ route('product-detail', $po->id) }}">{{ $po->name }}</a></h3>
                                        <p class="prod-rel-price">
                                            <b>{{ $po->price }}</b>
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </li>

                </ul>
            </div>
        </div>
        <!-- Related Products - end -->


    </section>
@endsection
