@extends('base')

@section('content')

    <div class="card">
        <div class="card-body">
            Data jsou generována náhodně pomocí knihovny <a href="https://fakerphp.github.io/">Faker</a>.
        </div>
    </div>


    <hr>

    <form action="{{route('helper.add')}}" method="post">
        @csrf

        <button type="submit" class="btn btn-primary">Vytvořit 100 náhodných záznamů </button>
    </form>
    <hr>

    <form action="{{route('helper.delete')}}" method="post">
        @csrf

        <button type="submit" class="btn btn-danger">Smazat všechny ARES záznamy </button>
    </form>


@endsection