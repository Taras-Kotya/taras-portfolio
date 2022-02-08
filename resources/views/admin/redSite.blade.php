@extends('admin.layout')
@section('content')
@parent

<h1>Редактировать сайт</h1>

<form method="POST" action="/admin/redSite">
@include('admin.forms.redSite')
</form>

@endsection