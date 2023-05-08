<?php

class Person {
    private $name;
    private $email;

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

$person = new Person();
$person->setName('Ruhul Kuddus');
$person->setEmail('Ruhul@kuddus.com');

echo '<p>Name: ' . $person->getName() . '</p>';
echo '<p>Email: ' . $person->getEmail() . '</p>';

?>
