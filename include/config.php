<?php
$dbh;
try {
    $dbh = new PDO('mysql:host=localhost:3308.mysql.db;dbname=crm', "root", "admin");
  
    //$dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>