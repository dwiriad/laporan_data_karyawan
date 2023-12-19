@extends('interface.layout.main')

@section('container')
<section class="container">


    <ul class="b-crumbs">
        <li>
            <a href="{{route('home')}}">
                Home
            </a>
        </li>
        <li>
            <a href="{{route('product-gallery')}}">
                Kategori
            </a>
        </li>
        <li>
            <span>{{ isset($category) ? $category->name : "Semua Kategori" }}</span>
        </li>
    </ul>
    <h1 class="main-ttl"><span>{{ isset($category) ? $category->name : "Semua Kategori" }}</span></h1>
    <!-- Catalog Sidebar - start -->
    <div class="section-sb">

        <!-- Catalog Categories - start -->
        <div class="section-sb-current">
            <h3><a href="{{route('product-gallery')}}">Kategori<span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
            <ul class="section-sb-list" id="section-sb-list">
                <li class="categ-1">
                    <a href="{{route('product-gallery')}}">
                        <span class="categ-1-label">Semua Kategori</span>
                    </a>
                </li>
                @foreach ($categories as $cate)
                <li class="categ-1">
                    <a href="{{route('product-gallery.category', $cate->id)}}">
                        <span class="categ-1-label">{{$cate->name}}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- Catalog Categories - end -->



    </div>
    <!-- Catalog Sidebar - end -->
    <!-- Catalog Items | Gallery V1 - start -->
    <div class="section-cont">

        <!-- Catalog Topbar - start -->
        <div class="section-top">

            <!-- View Mode -->
            <ul class="section-mode">
                @php
                $id_cate = explode('/', url()->current());
                $id_cate = end($id_cate);
                @endphp

                <li class="section-mode-gallery active"><a title="View mode: Gallery" href="{{ request()->routeIs('product-gallery') ? route('product-gallery') :  route('product-gallery.category',$id_cate) }}"></a></li>
                <li class="section-mode-list"><a title="View mode: List" href="{{ request()->routeIs('product-list') ? route('product-list') : route('product-list.category',$id_cate) }}"></a></li>
            </ul>

            {{-- <!-- Sorting -->
            <div class="section-sortby">
                <p>default sorting</p>
                <ul>
                    <li>
                        <a href="#">sort by popularity</a>
                    </li>
                    <li>
                        <a href="#">low price to high</a>
                    </li>
                    <li>
                        <a href="#">high price to low</a>
                    </li>
                    <li>
                        <a href="#">by title A <i class="fa fa-angle-right"></i> Z</a>
                    </li>
                    <li>
                        <a href="#">by title Z <i class="fa fa-angle-right"></i> A</a>
                    </li>
                    <li>
                        <a href="#">default sorting</a>
                    </li>
                </ul>
            </div>

            <!-- Count per page -->
            <div class="section-count">
                <p>12</p>
                <ul>
                    <li><a href="#">12</a></li>
                    <li><a href="#">24</a></li>
                    <li><a href="#">48</a></li>
                </ul>
            </div> --}}

        </div>
        <!-- Catalog Topbar - end -->
        <div class="prod-items section-items">
            @foreach ($products as $product)
            @if ($product->product_images->count() > 0)
            <div class="prod-i">
                <div class="prod-i-top">
                    <a href="#" class="prod-i-img"><img src="{{asset('gambar/' . $product->product_images[0]->image)}}" alt=""></a>

                    <a href="{{route('product-detail', $product->id)}}" class="prod-i-buy">Pergi Ke Detail</a>
                </div>
                <h3>
                    <a href="#">{{$product->name}}</a>
                </h3>
                <p class="prod-i-price">
                    <b>{{$product->price}}</b>
                </p>

            </div>
            @endif
            @endforeach
        </div>

        <!-- Pagination - start -->
        <ul class="pagi">
            <li class="">{{$products->links()}}</li>
        </ul>
        <!-- Pagination - end -->
    </div>
    <!-- Catalog Items | Gallery V1 - end -->
</section>
@endsection
