@section('content')
    <?php session_start(); ?>
    <?php $path = resource_path('views'); ?>
    <?php include($path . '/files/html.blade.php'); ?>
    <?php include($path . '/admin/files/menu.blade.php'); ?>

    @if(session('message'))
    <div style=" height: 100%; padding: 17px; background: #77c6d3; color: #fff; font-size: 28px !important;">
    {{ Session::get('message') }}
    </div>
    @endif


    @if(!Session::has('is_auth'))
    <h1>Авторизация</h1>
    <form method="POST" action="/admin/login">
        @csrf
        <p>
            Name:
            <input type="text" name="login" value="" />
        </p>
        <p>
            Password:
            <input type="password" name="password" value="" />
        </p>

        <input type="submit" value="Войти">
    </form>
    <?php include($path . '/files/foot.blade.php'); ?>
    <?php exit(); ?>
    @endif

@show


<?php include($path . '/files/foot.blade.php'); ?>