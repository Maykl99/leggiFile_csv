<?php
require_once '../models/QueryDB.php';

// Elaborazione dei dati da passare alla views/index
class CustomerController 
{
    public function insertQueryController() : void
    {
        $insertQuery = new QueryDB;
        $insertQuery->insertQuery();
    }

    public function tableUtenti() : void
    {
        include '../views/index.php'; 
    }

    public function mostraUtenti() : void
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

$customer = new CustomerController;
$customer->insertQueryController();
$customer->tableUtenti();
