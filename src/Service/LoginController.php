<?php

namespace Projetos\bank\Service;

use Projetos\bank\Modelo\Login;

class LoginController 
{
    public function login (Login $login, string $senha): void
    {
        if ($login->setLogin($senha)) {
            echo "Usuário autenticado com sucesso.";
        } else {
            echo "Usuário/senha estão incorretos, por gentileza verificar!";
        }
    }
}