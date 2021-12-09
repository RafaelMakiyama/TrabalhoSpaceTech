<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trabalho SpaceTech</title>

        <style>
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
            .text-center{
                text-align: center;
            }
            h1.title{
                margin-top: 250px;                
            }
        </style>
    </head>
    <body>
        <ul>
            <li><a class="active" href="{{route('home')}}">Início</a></li>
            <li><a href="#home">Funcionários</a></li>
            <li><a href="{{route('items.index')}}">Itens locais</a></li>
            <li><a href="#contact">Quadro de Horários</a></li>
        </ul>
        <br>
        <h1 class="title text-center">Trabalho SpaceTech em Grupo</h1>
        <p class="text-center">Clique em um item no menu acima para ver os detalhes</p>
    </body>
</html>
