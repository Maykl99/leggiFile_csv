--leggiFile_csv--

Questa piccola applicazione legge singolarmente un file formato csv, utilizzando la libreria di Vladimir Luchaninov.
Crea delle query di inserimento con i valori estratti dal file csv, in un secondo momento legge questi valori e ritorna 
una tabella di visualizzazione in formato HTML 5, utilizzando il framework Bootstrap v5. 

-- info -- 

Ambiente di sviluppo locale MAMP: 
phpMyAdmin versione MYSQL 5.7.24, 
web server locale Apache, 
versione PHP 7.4.1  

-- requisiti -- 

installare con composer la libreria di Vladimir Luchaninov:

$ composer require "luchaninov/csv-file-loader:1.*"

-- utilizzo -- 

per impostare il vostro ambiente di sviluppo e di database, andare su models/Connection.php ->
    static private $dsn = '';
    static private $user = '';
    static private $password = '';

per impostare il vostro file, andare nel models/CsvImporter.php -> const csvfile = 'nome_file.csv'

inserire in assets/csv/il_vostro_file.csv

per impostare su quale tabella e colonne effettuare le Query, andare su models/QueryDB.php


