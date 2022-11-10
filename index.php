<?php

require 'App/Db.php';
require 'App/Models/Categories.php';
require 'App/Models/Products.php';

$database = new \App\Db();
$db = $database->getConnection();

$product = new \App\Models\Products($db);
$category = new \App\Models\Categories($db);

$page_title = "Read Products";
include_once "template/header.php";

echo " <div class='d-flex justify-content-end'> ";
echo "<div class='right-button-margin'>";
echo "<a href='template/create_product.php' class='btn btn-primary d-flex justify-content-end'>";
echo "<span class='glyphicon glyphicon-plus'>Create Product</span> ";
echo "</a>";
echo "</div>";
echo "</div>";

$stmt = $product->readAll();
$num = $stmt->rowCount();

if ($num > 0) {

    echo "<table class='table table-hover table-responsive table-bordered'>";
    echo "<tr>";
    echo "<th>Product</th>";
    echo "<th>Price</th>";
    echo "<th>Description</th>";
    echo "<th>Category</th>";
    echo "<th>Actions</th>";
    echo "</tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        echo "<tr>";
        echo "<td>{$name}</td>";
        echo "<td>{$price}</td>";
        echo "<td>{$description}</td>";
        echo "<td>";
        $category->id = $category_id;
        $category->readName();
        echo $category->name;
        echo "</td>";

        echo "<td>";

        echo "<a href='template/read_one.php?id={$id}' class='btn btn-primary'>";
        echo "Read";
        echo "</a>";

        echo "<a href='template/update_product.php?id={$id}' class='btn btn-info left-margin'>";
        echo "Edit";
        echo "</a>";

        echo "<a delete-id='{$id}' class='btn btn-danger delete-object'>";
        echo "Delete";
        echo "</a>";

        echo "</td>";

        echo "</tr>";

    }

    echo "</table>";


} else {
    echo "<div>No products found.</div>";
}
?>
<?php
include_once "template/footer.php";
?>
