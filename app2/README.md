<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



# Hospital São lorenzo

## Descrição do Projeto
<p>Trabalho do curso SPACE TECH da Soluti Digital.</p>
<p>O Hospital São lorenzo contratou sua equipe para realizar a criação de um sistema. O sistema deve conseguir fazer:</p>
<br>CRUD de pacientes
<br>CRUD de médicos
<br>CRUD de estagiários
<br>CRUD de doadores
<br>CRUD banco de sangue
<br>CRUD doação
<br>Relatório Administrativo
<br>Relatório de Doações

<h4 align="center"> 
	Projeto Concluído ✅
</h4>

* Demonstração da Aplicação
![Aplicacao](screenshot/home.png)

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Composer](https://getcomposer.org/), [MySql](https://www.mysql.com/), [Apache](https://www.apache.org/) e/ou [Xampp](https://www.apachefriends.org/pt_br/index.html). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### 🎲 Rodando o Sistema

```bash
# Clone este repositório
$ git clone <https://github.com/RafaelMakiyama/TrabalhoSpaceTech>

# Acesse a pasta do projeto no terminal/cmd
$ cd TrabalhoSpaceTech

# Vá para a pasta do projeto
$ cd app2

# Instale as dependências
$ composer install

# Criar um banco de dados MySql

# Copiar o .env.example para .env e realizar os ajustes de Banco de Dados com o banco criado anteriormente

# Execute o comando para gerar a Key
$ php artisan key:generate

# Rodar as migrations para criar as tabelas no banco de dados
$ php artisan migrate

# Execute a aplicação em modo de desenvolvimento
$ php artisan serve

# O servidor inciará na porta:8000 
- acesse <http://localhost:8000>
```

### 🛠 Tecnologias utilizadas

As seguintes ferramentas foram usadas na construção do projeto:

- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [Git](https://git-scm.com)
- [Composer](https://getcomposer.org/)
- [MySql](https://www.mysql.com/)
- [Apache](https://www.apache.org/)
- [Xampp](https://www.apachefriends.org/pt_br/index.html)

<br><br>

### Autores

<table>
  <tr>
    <td align="center"><a href="https://github.com/RafaelMakiyama"><img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/40679056?v=4" width="100px;" alt=""/><br /><sub><b>RafaelMakiyama</b></sub></a><br /><a href="https://github.com/RafaelMakiyama/" title="RafaelMakiyama">🚀</a></td>
    <td align="center"><a href="https://github.com/evaldorcardoso"><img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/2326579?v=4" width="100px;" alt=""/><br /><sub><b>evaldorcardoso</b></sub></a><br /><a href="https://github.com/evaldorcardoso" title="evaldorcardoso">🚀</a></td>
    <td align="center"><a href="https://github.com/Anadinho"><img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/46759731?v=4" width="100px;" alt=""/><br /><sub><b>GABRIEL ANADINHO</b></sub></a><br /><a href="https://github.com/Anadinho" title="GABRIEL ANADINHO">🚀</a></td>
    <td align="center"><a href="https://github.com/filipesander"><img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/73475499?v=4" width="100px;" alt=""/><br /><sub><b>Filipe Sander</b></sub></a><br /><a href="https://github.com/filipesander/" title="Filipe Sander">🚀</a></td>
    <td align="center"><a href="https://github.com/FelipeSNeves"><img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/59981118?v=4" width="100px;" alt=""/><br /><sub><b>Felipe S. Neves</b></sub></a><br /><a href="https://github.com/FelipeSNeves" title="Felipe S. Neves">🚀</a></td>
  </tr>  
</table>

MIT License

Copyright (c) <2021>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
