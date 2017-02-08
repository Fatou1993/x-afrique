<?php

class Database {
    public static function connect() {
        $dsn = 'mysql:dbname=x-afrique; host=localhost' ; 
        $user = 'x-afrique' ;
        $password = 'awcCxSD2' ;
        $dbh = null;
        try {
            $dbh = new PDO($dsn, $user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
            exit(0);
        }
        return $dbh;
    }
}


$JESUIS = array("entrepreneur" , "investisseur" , "alumni IE" , "invité institutionnel" , "partenaire" , "étudiant" , "blogeur" , "professeur" , "organe de presse" , "je ne souhaite pas divulguer cette information");


?>
