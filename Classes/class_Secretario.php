<?php

include_once('./global.php');

class Secretario extends Funcionario
{
    public function __construct(string $nome, string $email, string $telefone, string $cpf, string $logradouro, string $numero, string $bairro, string $cidade, string $estado, float $salariofixo)
    {
        parent::__construct($nome, $email, $telefone, $cpf, $logradouro, $numero, $bairro, $cidade, $estado, $salariofixo);
    }
}