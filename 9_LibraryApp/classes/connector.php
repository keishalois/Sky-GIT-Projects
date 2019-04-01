<?php
// the connector trait has a function to allow connection to the database - I thought it
// would be easier to put it as a trait since many methods need to connect
trait Connector {
    function connect() {
        $DB_DSN = "mysql:host=localhost; dbname=song_library";
        $DB_USER = 'root';
        $DB_PASS = '';
        try {
            $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Failed to connect. " . $e->getMessage());
        }
        return $pdo;
    }
}
