<?= require_once __DIR__ . '/controllers/CustomerController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
            <th scope="col">Email</th>
            <th scope="col">Tipologia</th>
            <th scope="col">Note</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $utente = new CustomerController;
                $utente->mostraUtenti();
            ?>
        </tbody>
    </table>
</body>
</html>