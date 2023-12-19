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
            <h3><a href="{{route('product-list')}}">Semua Kategori<span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
            <ul class="section-sb-list" id="section-sb-list">
                @foreach ($categories as $cate)
                <li class="categ-1">
                    <a href="{{route('product-list.category', $cate->id)}}">
                        <span class="categ-1-label">{{$cate->name}}</span>
                    </a>
                </li>

                @endforeach
            </ul>
        </div>
        <!-- Catalog Categories - end -->

    </div>
    <!-- Catalog Sidebar - end -->
    <!-- Catalog Items | List V1 - start -->
    <div class="section-cont">

        <!-- Catalog Topbar - start -->
        <div class="section-top">

            <!-- View Mode -->
            <ul class="section-mode">
                @php
                $id_cate = explode('/', url()->current());
                $id_cate = end($id_cate);
                @endphp
                <li class="section-mode-gallery"><a title="View mode: Gallery" href="{{ request()->routeIs('product-gallery') ? route('product-gallery') :  route('product-gallery.category',$id_cate) }}"></a></li>
                <li class="section-mode-list active"><a title="View mode: List" href="{{ request()->routeIs('product-list') ? route('product-list') : route('product-list.category',$id_cate) }}"></a></li>
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
        @foreach ($products as $product)
        @if ($product->product_images->count() > 0)
        <div class="prod-items section-items">
            <div class="prodlist-i">
                <a class="prodlist-i-img" href="#"><img src="{{asset('gambar/' . $product->product_images[0]->image)}}" alt="#"></a>
                <div class="prodlist-i-cont">
                    <h3><a href="product.html">{{$product->name}}</a></h3>
                    <div class="prodlist-i-top">
                        {{$product->description}}			</div>
                    <div class="prodlist-i-skuwrap">
                        <div class="prodlist-i-skuitem">
                        </div>
                    </div>
                    <div class="prodlist-i-action">
                        <p class="prodlist-i-addwrap">

                            <a href="{{route('product-detail', $product->id)}}" class="prodlist-i-add">Pergi Ke Detail</a>
                        </p>
                    <span class="prodlist-i-price">
                        <b style="font-size: 15px;" !important>{{$product->price}}</b>
                                                </span>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach

        <!-- Pagination - start -->
        <ul class="pagi">
            <li class="">{{ $products->links() }}</li>
        </ul>
        <!-- Pagination - end -->
    </div>

    {{-- <!-- Quick View Product - start -->
    <div class="qview-modal">
        <div class="prod-wrap">
            <a href="product.html">
                <h1 class="main-ttl">
                    <span>Reprehenderit adipisci</span>
                </h1>
            </a>
            <div class="prod-slider-wrap">
                <div class="prod-slider">
                    <ul class="prod-slider-car">
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                <img src="http://placehold.it/500x525" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
                                <img src="http://placehold.it/500x591" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                <img src="http://placehold.it/500x525" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="prod-thumbs">
                    <ul class="prod-thumbs-car">
                        <li>
                            <a data-slide-index="0" href="#">
                                <img src="http://placehold.it/500x525" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="1" href="#">
                                <img src="http://placehold.it/500x591" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="2" href="#">
                                <img src="http://placehold.it/500x525" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="3" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="4" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="5" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="6" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="prod-cont">
                <div class="prod-skuwrap">
                    <p class="prod-skuttl">Color</p>
                    <ul class="prod-skucolor">
                        <li class="active">
                            <img src="img/color/blue.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/red.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/green.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/yellow.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/color/purple.jpg" alt="">
                        </li>
                    </ul>
                </div>
                <div class="prod-info">
                    <p class="prod-price">
                        <b class="item_current_price">$238</b>
                    </p>
                    <p class="prod-qnt">
                        <input type="text" value="1">
                        <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                        <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                    </p>
                    <p class="prod-addwrap">
                        <a href="#" class="prod-add">Pergi Ke Detail</a>
                    </p>
                </div>
                <ul class="prod-i-props">
                    <li>
                        <b>SKU</b> 05464207
                    </li>
                    <li>
                        <b>Manufacturer</b> Mayoral
                    </li>
                    <li>
                        <b>Material</b> Cotton
                    </li>
                    <li>
                        <b>Pattern Type</b> Print
                    </li>
                    <li>
                        <b>Wash</b> Colored
                    </li>
                    <li>
                        <b>Style</b> Cute
                    </li>
                    <li>
                        <b>Color</b> Blue, Red
                    </li>
                    <li><a href="#" class="prod-showprops">All Features</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Quick View Product - end --> --}}
</section>
@endsection
