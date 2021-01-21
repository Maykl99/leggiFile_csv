<?php 
require_once 'Connection.php';
require_once 'CsvImporter.php';

// query di inserimento, query di lettura dal db con i dati presi dal file csvfile
class QueryDb
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





