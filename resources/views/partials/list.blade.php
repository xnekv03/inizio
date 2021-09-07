<p>Vyhledejte v tabulce:</p>
<input id="search" type="text" placeholder="Hledat..">
<br><br>

@include('partials.modaldetail')

<table class="table" id="list">
    <thead>
    <tr>
        <th scope="col">IČO


        </th>
        <th scope="col">Společnost

            <a href="{{route('name.asc')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-arrow-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                </svg>
            </a>

            <a href="{{route('name.desc')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-arrow-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                </svg>
            </a>


        </th>
        <th scope="col">Přidáno

            <a href="{{route('created.asc')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-arrow-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                </svg>
            </a>

            <a href="{{route('created.desc')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-arrow-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                </svg>
            </a>


        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)

        <tr>
            <td>{{$record->ico}}</td>
            <td>{{$record->name}}</td>
            <td>{{$record->updated_at}}</td>
            <td>
                <a class="detail" href="{{route('ares.detail',$record)}}" id="{{$record->id}}" data="{{$record}}">detail</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<script src="js/listdetail.js"></script>