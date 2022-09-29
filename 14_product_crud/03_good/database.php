<?php

namespace app;

use PDO;

class database
{
public \PDO $pdo;
    public function __construct()
    {
        $this->pdo = new
PDO('mysql:host=localhost;port=3306;dbname=products-crud',
'root', '');
$this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    }

public function getproducts($search = '')
{ 

    
$search = $_GET['search'] ??'';
if ($search) {

  $statement = $this->pdo->prepare('SELECT * FROM products WHERE title like :title  ORDER BY `products`.`create-date` DESC');
  $statement->bindValue(':title', "%$search%");
} else {
  
$statement = $this->pdo->prepare('SELECT * FROM products  ORDER BY `products`.`create-date` DESC');
}

$statement->execute();
return $statement->fetchAll(PDO::FETCH_ASSOC);
}
public function createproduct($product) {

  $statement = $this->pdo->prepare("INSERT INTO products (title, image, description, price, `create-date`)
 VALUES (:title, :image, :description, :price, :date)");
$statement->bindValue(':title', $product->title);
$statement->bindValue(':image', $product->imagePath);
$statement->bindValue(':description', $product->description);
$statement->bindValue(':price', $product->price);
$statement->bindValue(':date', 'Y-m-d H:i:s');
$statement->execute();
}

}