<?php

namespace Projetos\bank\Modelo;

interface Login 
{
    public function setLogin (string $senha): bool;
}