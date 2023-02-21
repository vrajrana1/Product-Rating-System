<?php

require_once './src/Product/ProductDatabase.php';

$productDatabase = new ProductDatabase();
$products = $productDatabase->readAllProducts();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Product Listing</title>
  </head>
  <body>
    <h1>Product Listing</h1>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Rating</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
          <td><?php echo $product['name']; ?></td>
          <td><?php echo $product['description']; ?></td>
          <td><?php echo $product['price']; ?></td>
          <td><?php echo $product['rating']; ?></td>
          <td>
            <a href="./src/crud/ReadProduct.php?id=<?php echo $product['id']; ?>">View</a>
            <a href="./src/crud/UpdateProduct.php?id=<?php echo $product['id']; ?>">Edit</a>
            <a href="./src/crud/DeleteProduct.php?id=<?php echo $product['id']; ?>">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="./src/crud/CreateProduct.php">Create Product</a>
  </body>
</html>
