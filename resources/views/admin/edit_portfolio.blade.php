@extends('admin.layout')
@section('content')
@parent

<ul>
    <h1>Редактировать портфоліо #{{ $portfolio->id }}</h1>
    <form method="POST" action="{{ route('portfolio.edit',$portfolio->id) }}">
        @include('admin.forms.portfolio')
        <p>
            <input type="submit" value="Редактировать">
        </p>
    </form>
</ul>

@endsection