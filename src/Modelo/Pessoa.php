<?php
namespace Projetos\bank\Modelo;

class Pessoa
{
    use AcessoPropriedades;
    protected $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumeroCpf();
    }

    final protected function validaNome (string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Pelo menos 5 caracteres";
            exit();
        }
    }

}