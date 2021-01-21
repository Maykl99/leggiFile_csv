<?php
require_once '../models/QueryDB.php';

// elaboro i dati da passare nelle views
class CustomerController 
{
    public function mostraUtenti()
    {
        $responseDB = new QueryDb;
        foreach ($responseDB->selectQuery() as $item)
        {
            return "<tr>
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
