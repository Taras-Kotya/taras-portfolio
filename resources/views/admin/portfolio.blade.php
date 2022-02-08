@extends('admin.layout')
@section('content')
@parent



<ul>
    <h1> Всі портфоліо:</h1>

    <table border="1" style="width: 100%">
        <tr>
            <td style="padding: 5px">
                <b>ID</b>
            </td>
            <td>
                <b>Зображення</b>
            </td>
            <td>
                <b>Url</b>
            </td>
            <td>
                <b>Text</b>
            </td>
            <td colspan="3">

            </td>
        </tr>

        @foreach ($portfolios as $item)
        <tr>
            <td>
                {{ $item->id }}.
            </td>
            <td style="padding: 5px">
                <img src="/images/{{ $item->image }}" alt="" sizes="" srcset="" style="max-width: 150px">
            </td>
            <td style="padding: 5px">
                {{ $item->url }}
            </td>
            <td style="padding: 5px" style="max-width: 450px">
                {{ $item->content }}
            </td>
            <td style="padding: 5px">
                <a href="{{ route('portfolio.edit',$item->id) }}"> Edit </a>
            </td>
            <td style="padding: 5px">
                <form action="{{ route('portfolio.destroy',$item->id) }}" method="GET">
                    @method('DELETE')
                    @csrf
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


    </table>

</ul>

@endsection