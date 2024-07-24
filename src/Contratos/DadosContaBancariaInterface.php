<?php

declare(strict_types=1);

namespace ItaloGit\Poo\Contratos;

interface DadosContaBancariaInterface {
    public function getBanco(): string;
    public function getTitular(): string;
    public function getAgencia(): string;
    public function getConta(): string;
}