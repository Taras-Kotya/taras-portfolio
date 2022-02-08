@extends('admin.layout')
@section('content')
@parent

<h1>Меню:</h1>

<ul>
    <li>
        <a href="{{ route('redSite') }}">Редагувати головну сторінку</a>
    </li>
    <li>
        <a href="{{ route('portfolio.all') }}">Всі портфоліо</a>
    </li>
    <li>
        <a href="{{ route('portfolio.add') }}">Додати портфоліо</a>
    </li>
</ul>

@endsection