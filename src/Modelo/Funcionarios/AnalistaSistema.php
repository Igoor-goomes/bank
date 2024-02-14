<?php

namespace Projetos\bank\Modelo\Funcionarios;

use Projetos\bank\Modelo\Funcionarios\Colaborador;

class AnalistaSistema extends Colaborador
{
    public function promocaoCargo(): void
    {
        $this->aumentoSalarial($this->getSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500;
    }
}