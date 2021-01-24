<?php 
require_once 'Connection.php';
require_once 'CsvImporter.php';

// Query di inserimento, lettura dal db con i valori estratti dal file csv
class QueryDB
{
    private $table = 'clienti';

    public function insertQuery() : void
    {
        $csvValues = new CsvImporter;
        $row = $csvValues->ReaderCSV();
        
        $stmt = Connection::connect()->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        $db = $stmt->fetch(PDO::FETCH_ASSOC);

        // mettere un controllo se > 0!
        if($db > 0): 
            return;
        else: 
            $stmt = Connection::connect()->prepare(
                "INSERT INTO $this->table(nome,cognome,email,note) VALUES(:n,:c,:e,:nt)"
            );
            foreach ($row as $r):
                try 
                {                
                    if(empty($r['email'])):
                        $r['email'] = $r['id'] . $r['nome'] . 'email@gmail.com';
                    endif;
                    $stmt->bindParam(':n',$r['nome'], PDO::PARAM_STR);
                    $stmt->bindParam(':c',$r['cognome'], PDO::PARAM_STR);
                    $stmt->bindParam(':e',$r['email'], PDO::PARAM_STR);
                    $stmt->bindParam(':nt',$r['note'] , PDO::PARAM_STR);
                    $stmt->execute();
                } 
                catch (PDOException $e)
                {
                    echo $e->getMessage();
                }
            endforeach;
        endif;
    }

    public function selectQuery() : array 
    {
        try
        {
            $stmt = Connection::connect()->prepare(
                "SELECT * FROM $this->table"
            );
            $stmt->execute();
            return $stmt->fetchAll();

        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}



