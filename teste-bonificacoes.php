<?php
require_once 'autoload.php';

use Projetos\bank\Service\BonificacoesController;
use Projetos\bank\Modelo\CPF;
use Projetos\bank\Modelo\Funcionarios\Diretor;
use Projetos\bank\Modelo\Funcionarios\Gerente;
use Projetos\bank\Modelo\Funcionarios\AnalistaSistema;

$umFuncionario = new AnalistaSistema('igor Gomes', new CPF('123.456.789-10'), 6000);
$umFuncionario->promocaoCargo();

$umaFuncionaria = new Gerente('Lane Nunes Araujo', new CPF('987.654.321-10'), 9500);

$umDiretor = new Diretor('Ana Paula', new CPF('552.321.486-40'), 15000);

$controlador = new BonificacoesController();
$controlador->setBonificacao($umFuncionario);
$controlador->setBonificacao($umaFuncionaria);
$controlador->setBonificacao($umDiretor);

echo $controlador->getTotalBonificacoes();
