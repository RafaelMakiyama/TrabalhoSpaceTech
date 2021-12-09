<h1>Lista de item</h1>

<ul>
@foreach ($items as $k => $item )
    <h3> item {{$k +1}}</h3>
    <li>{{$item->id}}</li>
    <li>{{$item->name}}</li>
    <a href=""> Clique aqui</a>
@endforeach    

</ul>