<?php

declare(strict_types=1);

namespace ItaloGit\Poo;

use ItaloGit\Poo\Contratos\DadosContaBancariaInterface;
use ItaloGit\Poo\Contratos\OperacoesContaBancariaInterface;

abstract class ContaBancaria implements DadosContaBancariaInterface, OperacoesContaBancariaInterface {
    protected string $banco;
    protected string $titular;
    protected string $agencia;
    protected string $conta;
    protected float $saldo;
    
    public function __construct(
        string $banco,
        string $titular,
        string $agencia,
        string $conta,
        float $saldo
    )
    {
        $this -> banco = $banco;
        $this -> titular = $titular;
        $this -> agencia = $agencia;
        $this -> conta = $conta;
        $this -> saldo = $saldo;
    }

    public function depositar(float $valor): string {
        $this->saldo += $valor;
        return 'Depósito de R$ '. number_format($valor, 2, ",", "") . " realizado";
    }

    public abstract function obterSaldo(): string;

    public function sacar(float $valor): string {
        $this -> saldo -= $valor;
        //if ($this -> saldo < $valor) {
            //exit("Saldo Insuficiente para Saque");
        //} else {
            return 'Saque de R$ '. number_format($valor, 2, ",", ""). " realizado";
        //} 
    }

    public function getBanco(): string {
        return $this -> banco;
    }

    public function getAgencia(): string
    {
        return $this -> agencia;
    }

    public function getTitular(): string
    {
        return $this -> titular;
    }

    public function getConta(): string
    {
        return $this -> conta;
    }

    public function getSaldo(): float {
        return $this -> saldo;
    }
}