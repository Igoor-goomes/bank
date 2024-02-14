<?php

require_once 'autoload.php';

use Projetos\bank\Modelo\Endereco;

$enderecoBrasilia = new Endereco('Paranoa-DF', 'Região dos Lagos', 'Rodovia DF 250 KM 2,5', 'Casa 1');
$enderecoGoias = new Endereco('Luziânia-GO', 'Parque JK', 'Rua 18 A', '2');

// Testes
//echo $enderecoBrasilia; // Utilizando o método mágico __toString;
echo $enderecoGoias->cidade; // Utilizando o método mágico __get;