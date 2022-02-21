<?php
class Dbh {

    public function connect() {
        try {
            $username = "admin";
            $password = "admin";
            $dbh = new PDO('mysql:host=localhost;dbname=personRegister', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die;
        }

    }
}
