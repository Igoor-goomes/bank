<?php
namespace Projetos\bank\Modelo;

/**
 * class Endereco
 * @package Projetos\bank\Modelo
 * @property-read string $cidade;
 * @property-read string $bairro;
 * @property-read string $rua;
 * @property-read string $numeroCasa;
 */

final class Endereco
{
    use AcessoPropriedades; // importando o trait
    private $cidade;
    private $bairro;
    private $rua;
    private $numeroCasa;

    public function __construct(string $cidade, string $bairro, string $rua, string $numeroCasa)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numeroCasa = $numeroCasa;
    }

    public function __toString(): string
    {
        return "{$this->cidade}, {$this->bairro}, {$this->rua}, {$this->numeroCasa}";
    }

    public function alteraCidade ($nomeNewCidade): void
    {
        $this->cidade = $nomeNewCidade;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumeroCasa(): string
    {
        return $this->numeroCasa;
    }

}