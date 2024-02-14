<?php
namespace Projetos\bank\Modelo\Conta;

use Projetos\bank\Modelo\Pessoa;
use Projetos\bank\Modelo\CPF;
use Projetos\bank\Modelo\Endereco;
use Projetos\bank\Modelo\Login;

class Titular extends Pessoa implements Login
{
    private $cpf;
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome,$cpf);
        $this->validaNomeTitular($nome);
        $this->endereco = $endereco;
    }

    private function validaNomeTitular (string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Pelo menos 5 caracteres";
            exit();
        }
    }

    public function setLogin(string $senha): bool
    {
        return $senha === 'nome@12345';
    }

}