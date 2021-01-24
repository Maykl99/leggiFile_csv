<?php

use Luchaninov\CsvFileLoader\CsvFileLoader;
require_once '../vendor/autoload.php';

// lettura file formato csv
class CsvImporter extends CsvFileLoader
{
    private const csvfile = '../assets/csv/CLIENTE_TIPOLOGIA_ID_DATA.csv';
    private $loader = null;

    public function ReaderCSV()
    {
        try{
            if(self::csvfile === '../assets/csv/CLIENTE_TIPOLOGIA_ID_DATA.csv'): 
                $this->loader = new CsvFileLoader(self::csvfile);
                $this->loader->setDelimiter(';');
                return $this->loader->getItemsArray();
            endif;
        }
        catch(Exception $e)
        {   
            echo $e;
        }
    }
}


