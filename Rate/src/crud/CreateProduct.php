<?php

require_once './src/Product/Product.php';
require_once './src/Product/ProductDatabase.php';

if (isset($_POST['submit'])) {
    $product = new Product();
    $product->setName($_POST['name']);
    $product->setDescription($_POST['description']);
    $product->setPrice($_POST['price']);
    $product->setRating($_POST['rating']);

    $productDatabase = new ProductDatabase();
    $productId = $productDatabase->createProduct($name, $description, $price, $rating);

    header('Location: ./index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price">
        </div>
        <div>
            <label for="rating">Rating:</label>
            <input type="text" id="rating" name="rating">
        </div>
        <div>
            <input type="submit" name="submit" value="Create">
        </div>
    </form>
</body>
</html>
