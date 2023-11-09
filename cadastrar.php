<?php
require "Conectar.php";
require "Reserva.php";
require "RepositorioReserva.php";

$id = $_POST['txtId'];
$nome = $_POST['txtNome'];
$checkin = $_POST['txtChekin'];
$checkout = $_POST['txtCheckout'];
$num_hospedes = $_POST['txtHospedes'];

$novaReserva = new Reserva($id, $nome, $checkin, $checkout, $num_hospedes);

(new RepositorioReserva())->cadastrar($banco, $novaReserva);

header('Location: /');
?>
