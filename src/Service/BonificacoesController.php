<?php

namespace Projetos\bank\Service;

use Projetos\bank\Modelo\Funcionarios\Colaborador;

class BonificacoesController
{
    private $totalBonificacaoes = 0;

    public function setBonificacao (Colaborador $colaborador): void
    {
        // adiciona a bonificacao ao total de bonificacoes
        $this->totalBonificacaoes += $colaborador->calculaBonificacao();
    }

    public function getTotalBonificacoes (): float
    {
        // recupera o total
        return $this->totalBonificacaoes;
    }

}