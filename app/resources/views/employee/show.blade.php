<ul>
    <li><a href="{{route('home')}}">Início</a></li>
    <li><a class="active" href="{{route('employees.index')}}">Funcionários</a></li>
    <li><a href="{{route('items.index')}}">Itens locais</a></li>
    <li><a href="{{route('timesTable.index')}}">Quadro de Horários</a></li>
</ul>

<h1 class="text-center">Informações do funcionário {{ $employee->name }}</h1>
    <table>
        <tr>
            <th>Nome do Funcionario</th>
            <th>Função</th>
            <th>Salário</th>
            <th>Tempo de contrato</th>
            <th>Ação</th>
        </tr>
        <tr>
            <th>{{$employee->name }}</th>
            <th>{{$employee->function }}</th>
            <th>R$ {{ $employee->salary }}</th>
            <th>
                @if($employee->contract_time < 12 )
                  {{  $employee->contract_time }} meses
                @else
                {{  $employee->contract_time / 12  }} anos
                @endif 
            </th>    
            <th><a href={{route('employees.index')}}>Exibir todos os funcionários</a></th>
        </tr>
    </table>
    <br><br>
<h1 class="text-center">Lista de horários do funcionário</h1>
    <table>
        <tr>
            <th>Nome do Funcionario</th>
            <th>Dia</th>
            <th>Horário de entrada</th>
            <th>Horário de saída</th>
        </tr>
        @foreach($timeTables as $time)
            <tr>
                <th>{{ $time->employe_name }}</th>
                <th> {{ $time->day }} </th>
                <th>{{ $time->entry_time }}</th>          
                <th>{{ $time->out_time}}</th>
            </tr>
        @endforeach
    </table>
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