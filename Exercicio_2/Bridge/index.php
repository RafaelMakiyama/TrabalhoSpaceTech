<?php
require_once('autoload.php');
echo '<h2>Streamings e seus respectivos databases:</h2>';

$servico = new DisneyPlus(new Oracle);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new Netflixxx33(new Postgres);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new DarkFilmes(new Mongo);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new FullAnimations(new MariaDB);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new AnimaKaiTv2(new Postgres);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new SkyPobre(new Oracle);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new PlusOne(new Mongo);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new AcademicGreen(new FireBase);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new NorthTv(new FireBase);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new TelgoPlus(new Mysql);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new AvianPlus(new Mongo);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

echo '<br><h2>Streamings conectando com diferentes databases</h2>';

$servico = new SkyPobre(new Mysql);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new NorthTv(new Oracle);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new DisneyPlus(new Postgres);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();

$servico = new AvianPlus(new FireBase);
echo $servico->mostrarStreaming();
$servico->conexaoBancoDeDados();