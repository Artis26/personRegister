<?php
class Insert extends Dbh {

    protected function setUser($name, $surname, $mail) {
        $stmt = $this->connect()->prepare('INSERT INTO persons (personName, personSurname, personMail)
 VALUES (?, ? , ?);');

        $stmt->execute(array($name, $surname, $mail));
    }

    public function getUsers() {
        $stmt = $this->connect()->prepare('SELECT personName, personSurname, personMail FROM persons');
        $stmt->execute();

        echo "<table border='1|0'>
                <thead>
                <th>Name</th>
                <th>Surname</th>
                <th>E-mail</th>
                </thead>";

        if (count($stmt == 0)) echo "<tr><td colspan=3, style='text-align: center'> 0 results </td></tr>";
        foreach ($stmt as $one) {
            echo "<tr><td>".$one["personName"]."</td><td>".$one["personSurname"]."</td><td>".$one["personMail"]."</td></tr>";
        }
    }
}
