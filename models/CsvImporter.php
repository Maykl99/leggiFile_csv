<?php

use Luchaninov\CsvFileLoader\CsvFileLoader;
require_once '../vendor/autoload.php';

// lettura file formato csv
class CsvImporter extends CsvFileLoader
{
    private const csvfile = '../assets/csv/CLIENTE_TIPOLOGIA_ID_DATA.csv';
    private $loader = null;

    // mettere il controllo sull'unicità del file!

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

$csv = new CsvImporter;
$csv->ReaderCSV();

