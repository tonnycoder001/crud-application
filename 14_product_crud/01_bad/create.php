<?php



require_once "database.php";


$errors = [];
$title = '';
$price = '';
$description = '';
echo $_SERVER['REQUEST_METHOD'].'<br>';
if($_SERVER['REQUEST_METHOD'] ==='POST') {
$title = $_POST['title']; //test
$description = $_POST['description'];
$price = $_POST['price'];
$date = date('Y-m-d H:i:s');
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
    $imagePath = '';
    if ($image && $image['tmp_name']) {
      $imagePath = 'images/' .randomString(8).'/'.$image['name'];
       mkdir(dirname($imagePath));
      move_uploaded_file($image['tmp_name'], $imagePath);
    }
$statement = $pdo->prepare("INSERT INTO products (title, image, description, price, `create-date`)
 VALUES (:title, :image, :description, :price, :date)");
$statement->bindValue(':title', $title);
$statement->bindValue(':image', $imagePath);
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':date', $date);
$statement->execute();
header('Location: index.php');
    }
  }
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

    <h1>Create New Product</h1>
    <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
      <?php foreach($errors as $error): ?>
        <div><?php echo $error?></div>
        <?php endforeach;?>
    </div>
    <?php endif; ?>
    <form action="create.php" method="post" enctype="multipart/form-data">
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