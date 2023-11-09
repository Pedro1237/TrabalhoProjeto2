<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Reserva</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <form action="cadastrar.php" method="POST" class="m-6">
        <div class="field">
            <label class="label">Id</label>
            <div class="control">
                <input class="input" type="text" name="txtId">
            </div>
        </div>
        <div class="field">
            <label class="label">Nome</label>
            <div class="control">
                <input class="input" type="text" name="txtNome">
            </div>
        </div>
        <div class="field">
            <label class="label">Checkin</label>
            <div class="control">
                <input class="input" type="text" name="txtChekin">
            </div>
        </div>
        <div class="field">
            <label class="label">Checkout</label>
            <div class="control">
                <input class="input" type="text" name="txtCheckout">
            </div>
        </div>
        <div class="field">
            <label class="label">Número de Hospedes</label>
            <div class="control">
                <input class="input" type="text" name="txtHospedes">
            </div>
        </div>

        <button type="submit" class="button is-primary">Cadastrar</button>
    </form>
    <a class="button is-warning" href="listar.php">Listar Reservas</a>
</body>

</html>
