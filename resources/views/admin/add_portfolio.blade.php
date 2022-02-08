@extends('admin.layout')
@section('content')
@parent

<ul>
    <h1>Додати портфоліо</h1>
    <form method="POST" action="{{ route('portfolio.add') }}" enctype="multipart/form-data">
        @include('admin.forms.portfolio')


        <div>
            <strong>Зображення:</strong> <br>
            <input type="file" name="image" />
        </div>

        <p>
            <input type="submit" value="Добавить">
        </p>
    </form>
</ul>

@endsection