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

        foreach ($row as $r):
            try 
            {
                $stmt = Connection::connect()->prepare(
                    "INSERT INTO $this->table(nome,cognome,email,note) VALUES(:n,:c,:e,:nt)"
                );
                // togliere lo spazio a cognome, controllo tipo di valore passato
                $stmt->bindParam(':n',$r['nome'], PDO::PARAM_STR);
                $stmt->bindParam(':c',$r['cognome '], PDO::PARAM_STR);
                $stmt->bindParam(':e',$r['email'], PDO::PARAM_STR);
                $stmt->bindParam(':nt',$r['note'] , PDO::PARAM_STR);
                $stmt->execute();
            } 
            catch (PDOException $e)
            {
                echo $e->getMessage();
            }
        endforeach;
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





