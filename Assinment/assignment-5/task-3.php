<?php
require_once 'task-2.php';
echo "<h1>"."Data from FORM"."</h1>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$name = isset($_POST['name']) ? $_POST['name'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";

$person = new Person();
$person->setName($name);
$person->setEmail($email);

echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br>";
}
?>

