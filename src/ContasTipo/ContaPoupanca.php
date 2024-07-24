<?php

declare(strict_types=1);

namespace ItaloGit\Poo\ContasTipo;

use ItaloGit\Poo\ContaBancaria;

class ContaPoupanca extends ContaBancaria {

    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta Poupança";

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
        return "Seu saldo Atual é: ". number_format($this->saldo + ($this -> saldo * self::RENDIMENTO), 2, ",","");
    }
}