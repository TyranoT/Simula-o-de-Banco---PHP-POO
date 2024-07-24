<?php

require __DIR__ . "/../vendor/autoload.php";

use ItaloGit\Poo\ContasTipo\ContaCorrente;
use ItaloGit\Poo\Contratos\DadosContaBancariaInterface;
use ItaloGit\Poo\Contratos\OperacoesContaBancariaInterface;

function executarOperacoes(OperacoesContaBancariaInterface $c1): void {

    echo $c1 -> obterSaldo();
    echo PHP_EOL;

    echo $c1 -> depositar(40);
    echo PHP_EOL;

    echo $c1 -> obterSaldo();
    echo PHP_EOL;

    echo $c1 -> sacar(20);
    echo PHP_EOL;

    echo $c1 -> obterSaldo();
    echo PHP_EOL;

    echo "-----------------------------------------";
}

function exibirDados(DadosContaBancariaInterface $c1): void {
    echo PHP_EOL;
    echo "-----------------------------------------";

    echo PHP_EOL;
    echo "Banco: ". $c1 -> getBanco();
    echo PHP_EOL;

    echo "Títular: ". $c1 -> getTitular();
    echo PHP_EOL;

    echo "Agencia: ". $c1 -> getAgencia();
    echo PHP_EOL;

    echo "Número da Conta: ". $c1 -> getConta();
    echo PHP_EOL;

    echo "-----------------------------------------";
    echo PHP_EOL;
}

$c1 = new ContaCorrente(
    "Inter",
    "Italo Leite",
    "8244",
    "57585-00",
    0
);

exibirDados($c1);
executarOperacoes($c1);