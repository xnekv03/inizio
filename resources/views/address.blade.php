@extends('base')

@section('content')

    <table class="table" id="list">
    @foreach(array_keys($address->toArray()) as $item)
            <tr>
                <th>{{\Illuminate\Support\Str::ucfirst($item)}}</th>
                <td>{{$address->$item}}</td>
            </tr>
    @endforeach
    </table>
    <form method="post" action="{{route('sendaddress')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Poslat detaily na adresu</label>
            <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
            <input type="hidden" name="id" value="{{$address->id}}">

        </div>

        <button type="submit" class="btn btn-primary">Odeslat</button>
    </form>

@endsection