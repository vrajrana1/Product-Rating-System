<?php

require_once './src/Product/Product.php';
require_once './src/Product/ProductDatabase.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = new Product($_POST['name'], $_POST['description'], $_POST['price'], $_POST['rating']);
    $productDatabase = new ProductDatabase();
    $productDatabase->updateProduct($_GET['id'],$id, $name, $description, $price, $rating);
    header('Location: ./index.php');
} else {
    $productDatabase = new ProductDatabase();
    $product = $productDatabase->readProduct($_GET['id']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
</head>
<body>
    <h1>Update Product</h1>
    <form action="" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $product->getName(); ?>">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"><?php echo $product->getDescription(); ?></textarea>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="<?php echo $product->getPrice(); ?>">
        </div>
        <div>
            <label for="rating">Rating:</label>
            <input type="text" id="rating" name="rating" value="<?php echo $product->getRating(); ?>">
        </div>
        <button type="submit">Update</button>
        <a href="./index.php">Cancel</a>
    </form>
</body>
</html>
