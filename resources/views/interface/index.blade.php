@extends('interface.layout.main')

@section('container')
    <section class="container">
        <div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    @foreach ($sliders as $slider)
                        <li>
                            <img src="{{ asset('gambar/' . $slider->image) }}" alt="">
                            <div class="fr-slider-cont">
                                <h3>{{ $slider->name }}</h3>
                                <p>{{ $slider->description }}</p>
                                <p class="fr-slider-more-wrap">
                                    <a class="fr-slider-more" href="{{ route('dashboard') }}">Donasikan sekarang</a>
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="fr-pop-wrap" id="kategori-bab">

            <h3 class="component-ttl"><span>Kategori</span></h3>

            <ul class="fr-pop-tabs sections-show">

                <li><a data-frpoptab-num="1" data-frpoptab="#frpoptab-tab-1" href="#" class="active">Semua
                        Kategori</a></li>
                @foreach ($categories as $cate)
                    <li><a data-frpoptab-num="{{ $loop->index + 2 }}" data-frpoptab="#frpoptab-tab-{{ $loop->index + 2 }}"
                            href="#">{{ $cate->name }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="fr-pop-tab-cont">

                <p data-frpoptab-num="1" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-1">Semua Kategori
                </p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">

                    <ul class="slides">
                        @foreach ($products as $produk)
                            @if ($produk->product_images->count() > 0)
                                <li class="prod-i">
                                    <div class="prod-i-top">
                                        <a href="#" class="prod-i-img"><img
                                                src="{{ asset('gambar/' . $produk->product_images[0]->image) }}"
                                                alt=""></a>
                                        <p class="prod-i-addwrap">
                                            <a href="{{ route('product-detail', $produk->id) }}" class="prod-i-add">Pergi Ke
                                                Detail</a>
                                        </p>
                                    </div>
                                    <h3>
                                        <a href="#">{{ $produk->name }}</a>
                                    </h3>
                                    <p class="prod-i-price">
                                        <b>{{ $produk->price }}</b>
                                    </p>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

                @foreach ($categories as $cate)
                    <p data-frpoptab-num="{{ $loop->index + 2 }}" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-{{ $loop->index + 2 }}">{{ $cate->name }}
                    </p>
                    <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-{{ $loop->index + 2 }}">

                        <ul class="slides">
                            @foreach ($products as $produk)
                                @if ($produk->product_images->count() > 0 && $produk->category->name == $cate->name )
                                    <li class="prod-i">
                                        <div class="prod-i-top">
                                            <a href="#" class="prod-i-img"><img
                                                    src="{{ asset('gambar/' . $produk->product_images[0]->image) }}"
                                                    alt=""></a>
                                            <p class="prod-i-addwrap">
                                                <a href="{{ route('product-detail', $produk->id) }}"
                                                    class="prod-i-add">Pergi Ke
                                                    Detail</a>
                                            </p>
                                        </div>
                                        <h3>
                                            <a href="#">{{ $produk->name }}</a>
                                        </h3>
                                        <p class="prod-i-price">
                                            <b>{{ $produk->price }}</b>
                                        </p>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>
        </div>


        <!-- Special offer -->
        <div class="discounts-wrap" id="tentang-bab">
            <h3 class="component-ttl"><span>Tentang</span></h3>
            <div id="about" class="layout_padding about_section">
                <div class="container">
                    <div class="row">
                        @foreach ($abouts as $about)
                            <div class="col-md-6">
                                <div><img src="{{ asset('gambar/' . $about->image) }}" alt="gambar"
                                        style="max-width: 100%;"></div>
                            </div>
                            <div class="col-md-6">
                                <p class="about_taital">{{ $about->description }}</p>
                                <br>

                                {{-- <div style="float: right;">
                                    <a href="https://semarangkota.go.id/"><img src="img/buton selengkapnya-07.png" style="max-width: 25%;"></a>
                                </div> --}}
                                <div style="float:right;">
                                    <a href="https://semarangkota.go.id/"> <b>Klik Selengkapnya</b>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <br><br>
        </div>
        <div class="accordion-wrap" id="faq-bab">
            <h3 class="component-ttl component-ttl-ct"><span>Frequently Asked Questions</span></h3>
            <div class="accordion-tab-cont">
                @foreach ($faqs as $faq)
                    <p data-accordion-num="{{ $faq->id }}"
                        class="accordion-tab-mob @if ($loop->first) active @endif"
                        data-accordion="#accordion-tab-{{ $faq->id }}">
                        {{ $faq->question }}</p>
                    <div class="accordion-tab" id="accordion-tab-{{ $faq->id }}">
                        <div class="accordion-inner">
                            {{ $faq->answer }}
                            <span class="tabs-margin"></span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
