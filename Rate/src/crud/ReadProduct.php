<?php

require_once './src/Product/Product.php';
require_once './src/Product/ProductDatabase.php';

$productDatabase = new ProductDatabase();
$product = $productDatabase->readProduct($_GET['id']);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Read Product</title>
</head>
<body>
    <h1>Read Product</h1>
    <div>
        <strong>Name:</strong> <?php echo $product->getName(); ?>
    </div>
    <div>
        <strong>Description:</strong> <?php echo $product->getDescription(); ?>
    </div>
    <div>
        <strong>Price:</strong> <?php echo $product->getPrice(); ?>
    </div>
    <div>
        <strong>Rating:</strong> <?php echo $product->getRating(); ?>
    </div>
    <div>
        <a href="./index.php">Back to Listing</a>
    </div>
</body>
</html>
