<?php
namespace Projetos\bank\Modelo\Funcionarios;

use Projetos\bank\Modelo\CPF;
use Projetos\bank\Modelo\Pessoa;
abstract class Colaborador extends Pessoa
{
    private $salario;


    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome,$cpf);
        $this->salario = $salario;
    }

    public function setNome (string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function aumentoSalarial (float $aumento): void
    {
        if ($aumento < 0) {
            echo "O aumento salário deve ser positivo!";
            return;
        }

        $this->salario += $aumento;
    }

    public function getSalario (): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao (): float;

}