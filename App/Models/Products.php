<?php

namespace App\Models;

class Products
{
    private $conn;
    public $table_name = 'products';
    public $id;
    public $name;
    public $price;
    public $description;
    public $category_id;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function create()
    {

        $query = "INSERT INTO
					" . $this->table_name . "
				SET
					name = ?, price = ?, description = ?, category_id = ?";

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->price);
        $stmt->bindParam(3, $this->description);
        $stmt->bindParam(4, $this->category_id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }


    public function readAll()
    {

        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }


    public function readOne()
    {
        $query = "SELECT
					name, price, description, category_id
				FROM
					" . $this->table_name . "
				WHERE
					id = ?
				LIMIT
					0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(\PDO::FETCH_ASSOC);

        $this->name = $row['name'];
        $this->price = $row['price'];
        $this->description = $row['description'];
        $this->category_id = $row['category_id'];
    }


    public function update()
    {

        $query = "UPDATE
					" . $this->table_name . "
				SET
					name = :name,
					price = :price,
					description = :description,
					category_id  = :category_id
				WHERE
					id = :id";

        $stmt = $this->conn->prepare($query);


        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete()
    {

        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(1, $this->id);

        if ($result = $stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}