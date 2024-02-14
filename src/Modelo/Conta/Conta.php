<?php
namespace Projetos\bank\Modelo\Conta;

abstract class Conta {
    private $titular;
    protected float $saldoConta;
    private static $contasAtivas = 0;
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldoConta = 0;

        //métodos estáticos
        self::$contasAtivas++;
    }

    // método destrutor
    public function __destruct()
    {
        self::$contasAtivas--;
    }

    public function saca (float $valorSaque): void
    {
        $tarifaSaque = $valorSaque * $this->percentualTarifa();
        $valorSaque = $valorSaque + $tarifaSaque;
        if ($valorSaque > $this->saldoConta) {
           echo "Operação não pode ser concluída!";
           return;
        }

       $this->saldoConta -= $valorSaque;
    }

    public function deposita (float $valorDeposito): void
    {
       if ($valorDeposito < $this->saldoConta) {
           echo "Operação não pode ser concluída!";
           return;
       }

       $this->saldoConta += $valorDeposito;
    }

    public function getSaldo (): float
    {
        return $this->saldoConta;
    }

    public function getCpfTitular (): string
    {
        return $this->titular->getCpf();
    }

    public function getNomeTitular ():string
    {
        return $this->titular->getNome();
    }

    public static function getContasAtivas (): int
    {
        return self::$contasAtivas;
    }

    abstract protected function percentualTarifa (): float;

}
