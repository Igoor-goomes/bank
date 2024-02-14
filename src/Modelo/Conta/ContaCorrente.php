<?php

namespace Projetos\bank\Modelo\Conta;


class ContaCorrente extends Conta
{
    protected function percentualTarifa (): float
    {
        return 0.05;
    }

    public function transfere (float $valorTransferencia, Conta $contaDestino): void
    {
        if ($valorTransferencia > $this->saldoConta) {
            echo "Operação não pode ser concluída!";
            return;
        }

        $this->saca($valorTransferencia);
        $contaDestino->deposita($valorTransferencia);
    }

}