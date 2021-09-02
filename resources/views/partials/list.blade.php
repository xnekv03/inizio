<table class="table" id="list">
    <thead>
    <tr>
        <th scope="col">ičo</th>
        <th scope="col">Společnost</th>
        <th scope="col">Přidáno</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)

    <tr>
        <td>{{$record->ico}}</td>
        <td>{{$record->name}}</td>
        <td>{{$record->updated_at}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
    {{ $records->links() }}
