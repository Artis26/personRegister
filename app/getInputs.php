<?php

if (isset($_POST["submit"])) {
    //grabbing data
    $name = $_POST["personName"];
    $surname = $_POST["personSurname"];
    $email = $_POST["personMail"];

    include "../app/getDataBase.php";
    include "../app/setAndGetPerson.php";
    include "../app/person.php";

    $new = new Person($name, $surname, $email);

    $new->addToRegister();

    header("location: ../index.php?error=none");
}