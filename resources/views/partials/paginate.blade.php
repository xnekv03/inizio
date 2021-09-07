@extends('base')

@section('content')

    @include('partials.modaldetail')
<table class="table" id="list">
    <thead>
    <tr>
        <th scope="col">ičo</th>
        <th scope="col">Společnost</th>
        <th scope="col" colspan="2">Přidáno</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)

    <tr>
        <td>{{$record->ico}}</td>
        <td>{{$record->name}}</td>
        <td>{{$record->updated_at}}</td>
        <td>
            <a class="detail" href="{{route('ares.detail',$record)}}" id="det{{$record->id}}" data="{{$record}}">detail</a>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>

{{ $records->links() }}

    <script src="js/listdetail.js"></script>
@endsection