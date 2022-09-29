<h1>create new products</h1>

<?php include_once "_form.php" ?>


<?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
      <?php foreach($errors as $error): ?>
        <div><?php echo $error?></div>
        <?php endforeach;?>
    </div>
    <?php endif; ?>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <?php if($product['image']): ?>
<img src="/<?php echo $product['image'] ?>" alt="" class="update-image">
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
<!-- <?php echo '<pre>';
var_dump($products);
echo'</pre>'; ?> -->