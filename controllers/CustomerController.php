<?php
require_once '../models/QueryDB.php';

// elaborazione dei dati da passare alla views
class CustomerController 
{

    public function tableUtenti()
    {
        include '../views/template/tableUtenti.php';
    }

    public function mostraUtenti()
    {
        $responseDB = new QueryDB;
        foreach ($responseDB->selectQuery() as $item)
        {
            echo   "<tr>
                        <th scope='row'>$item[0]</th>
                        <td>$item[1]</td>
                        <td>$item[2]</td>
                        <td>$item[3]</td>
                        <td>$item[4]</td>
                        <td>$item[5]</td>
                    </tr>";
        }
    }
} 

// creare delle rotte!
$CustomerController = new CustomerController;
$CustomerController->tableUtenti();