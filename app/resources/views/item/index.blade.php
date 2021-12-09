<h1>Lista de items:</h1>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nome do Item</th>
            <th>Ação</th>
        </tr>
    @foreach($items as $item)
        <tr>
          <th>{{ $item['id'] }}</th>
          <th>{{ $item['name'] }}</th>          
          {{-- <th><a href={{route('items.show', $item['id'])}}>Exibir item</a></th> --}}
        </tr>
    @endforeach
    </table>
    <br><br>
</ul>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
</style>