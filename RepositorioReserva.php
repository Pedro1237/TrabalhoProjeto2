<?php

class RepositorioReserva
{
    public function cadastrar(PDO $banco, Reserva $reserva)
    {
        $sqlInsert = "INSERT INTO RESERVA(id, nome, checkin, checkout, num_hospedes) VALUES (:i, :n, :ci, :co, :nh)";

        $insert = $banco->prepare($sqlInsert);

        $id = $reserva->getId();
        $nome = $reserva->getNome();
        $checkin = $reserva->getCheckin();
        $checkout = $reserva->getCheckout();
        $num_hospedes = $reserva->getNumHospedes();

        $insert->bindParam(":i", $id);
        $insert->bindParam(":n", $nome);
        $insert->bindParam(":ci", $checkin);
        $insert->bindParam(":co", $checkout);
        $insert->bindParam(":nh", $num_hospedes);

        $insert->execute();
    }

    public function exibirTudo(PDO $banco)
    {
        $sql = "SELECT * FROM RESERVA";
        $dados = $banco->query($sql);

        var_dump($dados->errorInfo()); // Adicionado para depuração

        return $dados->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
