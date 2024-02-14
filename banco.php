<?php
require_once 'autoload.php';

use Projetos\bank\Modelo\Pessoa;
use Projetos\bank\Modelo\Conta\Conta;
use Projetos\bank\Modelo\Endereco;
use Projetos\bank\Modelo\Conta\Titular;
use Projetos\bank\Modelo\CPF;

//$enderecoDF = new Endereco('Brasilia', 'Região dos Lagos', 'DF-250', 1);
//
//$igor = new Titular(new CPF('705.982.455-37'),'Igor Gomes Araujo', $enderecoDF);
//$contaA = new Conta($igor);
//$contaA->depositar(1000);
//$contaA->sacar(200);

// Terminal
//echo $contaA->getNomeTitular() . PHP_EOL;
//echo $contaA->getCpfTitular() . PHP_EOL;
//echo $contaA->getSaldo() . PHP_EOL;
//
//echo '__________***** BANCO DIGITAL *****__________' . PHP_EOL;
//
//$lane = new Titular(new CPF('567.466.664-41'),'Joselane Araujo Nunes Gomes', $enderecoDF);
//$contaB = new Conta ($lane);
//echo $contaB->getNomeTitular() . PHP_EOL;
//echo $contaB->getCpfTitular() . PHP_EOL;
//echo $contaB->getSaldo() . PHP_EOL;
//
//echo '__________***** BANCO DIGITAL *****__________' . PHP_EOL;
//
//$enderecoGO = new Endereco('Luziânia', 'JK', '18A', '2');
//$tania = new Titular(new CPF('138.735.123-00'), 'Tania', $enderecoGO);
//$contaC = new Conta ($tania);
//echo $contaC->getNomeTitular() . PHP_EOL;
//echo $contaC->getCpfTitular() . PHP_EOL;
//echo $contaC->getSaldo() . PHP_EOL;
//
//echo '__________***** BANCO DIGITAL *****__________' . PHP_EOL;
//echo "Número de contas ativas: " . Conta::getContasAtivas();
//
//
//
//
//




