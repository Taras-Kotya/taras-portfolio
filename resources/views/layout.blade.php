@section('content')
    <?php session_start(); ?>
    <?php $path = resource_path('views'); ?>
    <?php include($path . '/files/html.blade.php'); ?>
    <?php include($path . '/files/menu.blade.php'); ?>

    @if(Session::has('message'))
    <div style="width: 450px; height: 100%; padding: 10px; background: red">
        <h1>{{ Session::get('message') }}</h1>
    </div>
    @endif

@show

<?php include($path . '/files/foot.blade.php'); ?>