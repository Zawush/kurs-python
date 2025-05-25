<?php
$host = 'localhost';
$dbname = 'diplom';
$username = 'root';
$password = ''; // по умолчанию в XAMPP/MAMP пусто

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>
