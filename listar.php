<!DOCTYPEhtml>

<html lang="pt">

<cabeça>

<meta charset="UTF-8">

<meta name="viewport" content="escala de largura=1.0">

<title>Listar Reservas</title>

<link rel="folha de estilo"

href="https://cdn.jsdelivr.net/npm/bulma( </head>

<corpo>

<h1 class="title is-3">Listagem de Reser

<?php

requer "Connect.php"; requer "Reserva.php"; requer "ReservationRepository.php";

$valores=(newReservationRepository())-> ?>
<table class="table is-striped">

<tr>

<td>ID</td>

<td>Nome</td>

<td>Check-in</td>

<td>Finalizar compra</td>

<td>Número de Hospedes</td>

</tr>

<?php foreach ($valores as $valor): ?>

<tr>

<td>

<?= ($valor['id']) ?>

</td>

<td>

<?= ($valor['nome']) ?>

</td>

<td>

<?= ($valor['checkin']) ?>

</td>

<td>

<?= ($valor['checkout']) ?>

</td>
<td>

<?= ($valor['num_hospedes']) ?>

</td>

</tr>

<?php endforeach; ?>

</tabela>

<br>

<a class="button is-primary" href="inde Reserva</a>

</body>

</html>
