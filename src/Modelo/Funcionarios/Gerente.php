<?php

namespace Projetos\bank\Modelo\Funcionarios;

use Projetos\bank\Modelo\Funcionarios\Colaborador;
use Projetos\bank\Modelo\Login;

class Gerente extends Colaborador implements Login
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario();
    }

    public function setLogin(string $senha): bool
    {
        return $senha === '54321';
    }

}