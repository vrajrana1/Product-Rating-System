<?php

require_once './src/Product/ProductDatabase.php';

$productDatabase = new ProductDatabase();
$productDatabase->deleteProduct($_GET['id']);

header('Location: ./index.php');

?>
