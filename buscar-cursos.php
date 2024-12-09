<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;
use Robotech390\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['verify' => false, 'base_uri' => 'https://alura.com.br']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscarCursos('/cursos-online-programacao/php');

foreach($cursos as $curso){
    echo $curso . PHP_EOL;
}