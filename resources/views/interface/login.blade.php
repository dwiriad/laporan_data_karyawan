@extends('interface.layout.main')

@section('container')
<section class="container stylization maincont">


    <ul class="b-crumbs">
        <li>
            <a href="{{route('home')}}">
                Home
            </a>
        </li>
        <li>
            <span>Masuk / Daftar</span>
        </li>
    </ul>
    <h1 class="main-ttl"><span>Masuk / Daftar</span></h1>
    <div class="auth-wrap">
        <div class="auth-col">
            <h2>Masuk</h2>
            <form method="post" class="login">
                <p>
                    <label for="username">Email <span class="required">*</span></label><input type="text" id="username">
                </p>
                <p>
                    <label for="password">Password <span class="required">*</span></label><input type="password" id="password">
                </p>
                <p class="auth-submit">
                    <input type="submit" value="Masuk">
                    <input type="checkbox" id="rememberme" value="forever">
                    <label for="rememberme">Ingat Aku</label>
                </p>
                <p class="auth-lost_password">
                    <a href="#">Lupa Password?</a>
                </p>
            </form>
        </div>
        <div class="auth-col">
            <h2>Daftar</h2>
            <form method="post" class="register">
                <p>
                    <label for="reg_email">Email <span class="required">*</span></label><input type="email" id="reg_email">
                </p>
                <p>
                    <label for="reg_password">Password <span class="required">*</span></label><input type="password" id="reg_password">
                </p>
                <p class="auth-submit">
                    <input type="submit" value="Daftar">
                </p>
            </form>
        </div>
    </div>



</section>
@endsection
