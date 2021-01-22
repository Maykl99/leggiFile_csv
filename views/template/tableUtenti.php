<!-- tabella utenti -->
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
                $CustomerController = new CustomerController;
                $CustomerController->mostraUtenti();
            ?>
     </tbody>
</table>
