<?php
session_start();
require_once "vendor/autoload.php";
?>

<form action="app/getInputs.php" method="post">
    <input type="text" name="personName" placeholder="Name">
    <input type="text" name="personSurname" placeholder="Surname">
    <input type="text" name="personMail" placeholder="E-mail">
    <br>
    <button type="submit" name="submit">Add To Register</button>
</form>

<form action="app/showList.php" method="post">
    <br>
    <button type="submit" name="submit">Show list</button>
</form>