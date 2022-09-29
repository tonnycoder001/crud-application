<?php

require_once "database.php";


$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;


}
$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id',$id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);
$errors = [];
$title = $product['title'];
$price = $product['price'];
$description =$product['description'];
if($_SERVER['REQUEST_METHOD'] ==='POST')
{


$title = $_POST['title']; //test
$description = $_POST['description'];
$price = $_POST['price'];
echo $_SERVER['REQUEST_METHOD'].'<br>';
if(!$title) {
  $errors[] = 'Product title is required';
}


if(!is_dir('images')) {
  mkdir('images');
}

if(!$price) {
  $errors[] = 'Product price is required';
}

if(empty($errors)) {
    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image'];
    if ($image && $image['tmp_name']) {
      if ($product['image']) {
        unlink($product['image']);
      }
      $imagePath = 'images/' .randomString(8).'/'.$image['name'];
       mkdir(dirname($imagePath));
      move_uploaded_file($image['tmp_name'], $imagePath);
    }

$statement = $pdo->prepare("UPDATE products SET title = :title, image = :image,
description = :description, price = :price WHERE id = :id");
$statement->bindValue(':title', $title);
$statement->bindValue(':image', $imagePath);
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':id', $id);
$statement->execute();
header('Location: index.php');
    }
 };

  function randomString($n)
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for($i = 0; $i < $n; $i++) {
      $index = rand(0, strlen($characters) - 1);
      $str .= $characters[$index];
    }

    return $str;
  }
?>
<?php include_once "views/partials/header.php"; ?>

    <p>
        <a href="index.php" class="btn btn-secondary">Go Back to Products</a>
    </p>
    <h1>Update Product <b><?php echo $product['title']?></b></h1>
    <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
      <?php foreach($errors as $error): ?>
        <div><?php echo $error?></div>
        <?php endforeach;?>
    </div>
    <?php endif; ?>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <?php if($product['image']): ?>
<img src="<?php echo $product['image'] ?>" alt="" class="update-image">
            <?php endif; ?>
  <div class="mb-3">
    <label>Product Image</label>
    <input type="file" name="image" class="form-control">
  </div>
  <div class="mb-3">
    <label>Product Title</label>
    <br>
    <input type="text" name="title" value="<?php echo $title?>">
  </div>
  <div class="mb-3">
    <label>Product Description</label>
    <textarea class="form-control" name="description"><?php echo $description?></textarea>
  </div>
  <div class="mb-3">
    <label>Product Price</label>
    <input type="number" step="0.01" class="form-control" name="price" value="<?php echo $price?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </body>
</html>