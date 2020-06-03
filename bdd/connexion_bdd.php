<?php
$pdo = new PDO('mysql:host=localhost;dbname=diabgesta', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
var_dump($_POST);
