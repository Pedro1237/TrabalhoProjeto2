<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Reservas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <h1 class="title is-3">Listagem de Reservas</h1>
    <?php
    require "Conectar.php";
    require "Reserva.php";
    require "RepositorioReserva.php";

    $valores = (new RepositorioReserva())->exibirTudo($banco);


    if ($valores) {
        echo '<table class="table is-striped">
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Checkin</td>
                    <td>Checkout</td>
                    <td>Número de Hospedes</td>
                </tr>';

        foreach ($valores as $valor) {
            echo '<tr>
                    <td>' . $valor['id'] . '</td>
                    <td>' . $valor['nome'] . '</td>
                    <td>' . $valor['checkin'] . '</td>
                    <td>' . $valor['checkout'] . '</td>
                    <td>' . $valor['num_hospedes'] . '</td>
                  </tr>';
        }

        echo '</table>';
    } else {
        echo '<p class="has-text-danger">Nenhuma reserva encontrada.</p>';
    }
    ?>
    <br>
    <a class="button is-primary" href="index.php">Cadastrar Reserva</a>
</body>

</html>
