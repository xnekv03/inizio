@extends('base')

@section('content')

    <table class="table" id="list">

        <tr>
            <th>
                Název společnosti
            </th>
            <td> {{$record->name}}</td>
        </tr>
        <tr>
            <th>
                IČO
            </th>
            <td> {{$record->ico}}</td>
        </tr>
        <tr>
            <th>
                Adresa
            </th>
            <td> {{$record->street}}</td>
        </tr>

        <tr>
            <th>
                Město
            </th>
            <td> {{$record->town}}</td>
        </tr>

        <tr>
            <th>
                PSČ
            </th>
            <td> {{$record->zip}}</td>
        </tr>

        <tr>
            <th>
                Kontrola dat z ARESu
            </th>
            <td> {{$record->updated_at}}</td>
        </tr>

    </table>

@endsection