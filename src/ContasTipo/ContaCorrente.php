<?php

declare(strict_types=1);

namespace ItaloGit\Poo\ContasTipo;

use ItaloGit\Poo\ContaBancaria;

class ContaCorrente extends ContaBancaria {

    const TAXA = 25;
    const TIPO_CONTA = "Conta Corrente";

    public function __construct(
        string $banco,
        string $titular,
        string $agencia,
        string $conta,
        float $saldo
    )
    {
        parent::__construct($banco, $titular, $agencia, $conta, $saldo);
    }

    public function obterSaldo(): string
    {
        return "Seu saldo Atual é: R$ ". number_format($this -> saldo - self::TAXA, 2, ",","");
    }
}