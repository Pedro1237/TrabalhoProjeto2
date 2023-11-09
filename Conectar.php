<?php

try {
    $banco = new PDO("sqlite:banco.sqlite");
    echo "Banco conectado!";
} catch (PDOException $e) {
    echo "Deu erro na conexão! " . $e->getMessage();
}

$tabela = "CREATE TABLE IF NOT EXISTS RESERVA (
    id TEXT,
    nome TEXT,
    checkin TEXT,
    checkout TEXT,
    num_hospedes TEXT,
    primary key (id))";

$banco->query($tabela);
