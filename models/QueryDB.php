<?php 
require_once 'Connection.php';
require_once 'CsvImporter.php';

// Classe di query db
class QueryDB
{
    private $table = 'clienti';

    // Query di inserimento con i valori estratti dal file csv
    public function insertQuery() : void
    {
        $csvValues = new CsvImporter;
        $row = $csvValues->ReaderCSV();
        
        // eseguo una query di verifica per vedere se il db è già stato popolato!
        $stmt = Connection::connect()->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        $db = $stmt->fetch(PDO::FETCH_ASSOC);

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

    // Lettura della table
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



