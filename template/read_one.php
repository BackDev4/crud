<?php

$page_title = "Read One Product";
include_once "header.php";


echo "<div class='right-button-margin'>";
	echo "<a href='../index.php' class='btn btn-primary pull-right'>";
		echo "<span class='glyphicon glyphicon-list'></span> Read Products";
	echo "</a>";
echo "</div>";

$id = isset($_GET['id']) ?? $_GET['id'];

include_once '..\App\Db.php';
include_once '..\App\Models\Products.php';
include_once '..\App\Models\Categories.php';

$database = new \App\Db();
$db = $database->getConnection();

$product = new \App\Models\Products($db);
$category = new \App\Models\Categories($db);

$product->id = $id;

$product->readOne();

echo "<table class='table table-hover table-responsive table-bordered'>";

	echo "<tr>";
		echo "<td>Name</td>";
		echo "<td>{$product->name}</td>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>Price</td>";
		echo "<td>&#36;{$product->price}</td>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>Description</td>";
		echo "<td>{$product->description}</td>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>Category</td>";
		echo "<td>";
            $category->id=$product->category_id;
		    $category->readName();
            echo $category->name;
		echo "</td>";
	echo "</tr>";

echo "</table>";

include_once "footer.php";

