<ul>
    <li><a href="{{route('home')}}">Início</a></li>
    <li><a href="{{route('employees.index')}}">Funcionários</a></li>
    <li><a class="active" href="{{route('items.index')}}">Itens locais</a></li>
    <li><a href="{{route('timesTable.index')}}">Quadro de Horários</a></li>
</ul>
<h1 class="text-center">Lista do Item: {{ $item->name }} </h1>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nome do Item</th>
            <th>QPD 20 *</th>
            <th>Marca</th>
            <th>Garantia</th>
            <th>Ações</th>
        </tr>
        <tr>
          <th>{{ $item->id }}</th>
          <th>{{ $item->name }}</th>
          <th>{{ $item->quantities / 20 }} </th>
          <th>{{ $item->brand }} </th>
          <th>@if($item->warranty)
             Com garantia
             @else
             Sem garantia                 
             @endif
          </th>
         
          <th><a href={{route('items.index')}}>Retornar a página anterior</a></th>
        </tr>
    </table>

    <p>QPD 20: Quantidade aporxima de uso por dia, durante um periodo de 20 dias
    <br><br>
</ul>



<style>
    .text-center{
        text-align: center;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #111;
    }

    .active {
        background-color: #1b5dd8;
    }

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