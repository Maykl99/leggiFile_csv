<?php

use Luchaninov\CsvFileLoader\CsvFileLoader;
require_once '../vendor/autoload.php';

// lettura file formato csv
class CsvImporter extends CsvFileLoader
{
    private const csvfile = '../assets/csv/CLIENTE_TIPOLOGIA_ID_DATA.csv';
    private $loader = null;

    // riuscire a leggere tutte i file formato csv, ma prendere i valori di un singolo file!
    public function ReaderCSV()
    {
        try{
            $this->loader = new CsvFileLoader(self::csvfile);
            $this->loader->setDelimiter(';');
            return $this->loader->getItemsArray();
        }
        catch(Exception $e)
        {   
            echo $e;
        }
    }
}

