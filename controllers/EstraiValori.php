<?php 
class EstraiValori
{
    private const csvfile = '../assets/csv/CLIENTE_TIPOLOGIA_ID_DATA.csv';

    public function leggiFile()
    {
        if(!self::csvfile): 
            return false;
        elseif(self::csvfile):
            $file_handle = fopen(self::csvfile, 'r');
            while (($data = fgetcsv($file_handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!
                print_r($data); // Array
            }
            fclose($file_handle);
            return $file_handle;
        endif;
    }
}

$estraiValori = new EstraiValori();
var_dump($estraiValori->leggiFile()); 