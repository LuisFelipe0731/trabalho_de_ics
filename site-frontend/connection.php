<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = mysqli_connect('192.168.100.20', 'biblioteca', 'ifrn', 'dblivros');

if (!$db) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
