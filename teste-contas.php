<?php

require_once 'autoload.php';

use Projetos\bank\Modelo\Conta\ContaPoupanca;
use Projetos\bank\Modelo\Conta\ContaCorrente;
use Projetos\bank\Modelo\Conta\Titular;
use Projetos\bank\Modelo\CPF;
use Projetos\bank\Modelo\Endereco;



// Criando Conta
$conta = new ContaPoupanca (
    new Titular(
        new CPF('791.268.858-75'),
        'João Costa Silva',
        new Endereco('Brasilia', 'Região Central', 'W3-Norte', '2')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->getSaldo();
