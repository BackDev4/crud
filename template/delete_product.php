<?php

if($_POST){

	include_once '..\App\Db.php';
	include_once '..\App\Models\Products.php';

	$database = new \App\Db();
	$db = $database->getConnection();

	$product = new \App\Models\Products($db);

	$product->id = $_POST['object_id'];

	if($product->delete()){
		echo "Object was deleted.";
	}
	else{
		echo "Unable to delete object.";
	}
}
