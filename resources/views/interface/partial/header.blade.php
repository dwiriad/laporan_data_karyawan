<div class="header-bottom" style="font-family: 'Poppins', sans-serif ;">
    <div class="container">
        <nav class="topmenu">


            <!-- Catalog menu - start -->
            {{-- <div class="topcatalog">
                <a class="topcatalog-btn" href="{{ route('product-gallery') }}"><span>Semua</span> Kategori</a>
                <ul class="topcatalog-list">
                    @foreach ($categories as $cate)
                    <li>
                        <a href="{{ route('product-gallery') }}">
                            {{$cate->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div> --}}
            <!-- Catalog menu - end -->

            <!-- Main menu - start -->
            {{-- <button type="button" class="mainmenu-btn" style="font-family: 'Poppins', sans-serif ;">Menu</button>

            <ul class="mainmenu">
                <li>
                    <a href="{{ route('home') }}" class="{{ Request()->is('home') ? 'active' : '' }}">
                        Home
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}#kategori-bab">
                        Kategori
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="/product/gallery" class="{{ Request()->is('product/gallery') ? 'active' : '' }}">
                        Produk
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}#tentang-bab">
                        Tentang
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}#faq-bab">
                        FAQ
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}#kontakkami-bab">
                        Kontak Kami
                    </a>
                </li>

            </ul> --}}
            <!-- Main menu - end -->

            <!-- Search - start -->
            {{-- <div class="topsearch" style="color:#fff !important">
                <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                <form class="topsearch-form" action="#">
                    <input type="text" placeholder="Cari Produk">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div> --}}
            <!-- Search - end -->

        </nav>
    </div>
</div>
<!-- Topmenu - end -->
