<?php
class Person extends Insert {
    private string $name;
    private string $surname;
    private string $mail;

    public function __construct(string $name, string $surname, string $mail)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
    }

    public function addToRegister() {
        $this->setUser($this->name, $this->surname, $this->mail);
    }
}
