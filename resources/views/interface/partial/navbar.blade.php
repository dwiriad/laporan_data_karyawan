<div class="header_top">
    <div class="container">
        <ul class="contactinfo nav nav-pills">
            <li>
                <i class="fa fa-phone"></i> {{ $kontak_kami->telp }}
            </li>
            <li>
                <i class="fa fa-envelope"></i> {{ $kontak_kami->email }}
            </li>
        </ul>
    </div>
</div>
<div class="header-middle">
    <div class="container header-middle-cont">
        <div class="toplogo">
            <a href="{{ route('home') }}" style="display: flex; justify-content:center;align-items:center">
                <img style="width: 100px; height:auto" src="{{ asset('img/pemkot.png') }}" alt="PEMKOT SEMARANG">
                <div style="font-size:1.5rem;font-weight:bold">{{ $tagline->nama_website }}</div>
            </a>
        </div>
        <div class="shop-menu">
            <ul>
                <li>
                    <a href="{{ route('product-gallery') }}">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="shop-menu-ttl">Produk Kami</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-heart"></i>
                        <span class="shop-menu-ttl">Donasi Sekarang</span>
                    </a>
                </li>
                <li class="topauth">
                    <a href="{{ route('register') }}">
                        <i class="fa fa-lock"></i>
                        <span class="shop-menu-ttl">Daftar</span>
                    </a>
                    <a href="{{ route('login') }}">
                        <span class="shop-menu-ttl">Login</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Logo, Shop-menu - end -->
