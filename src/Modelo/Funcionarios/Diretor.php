<?php

namespace Projetos\bank\Modelo\Funcionarios;

use Projetos\bank\Modelo\Funcionarios\Colaborador;
use Projetos\bank\Modelo\Login;

class Diretor extends Colaborador implements Login
{
    public function calculaBonificacao(): float
    {
        // Recupera o salário e multiplica para dois
        return $this->getSalario() * 2;
    }

    public function setLogin(string $senha): bool
    {
        return $senha === '12345';
    }
    
    
}