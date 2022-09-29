<h1>Product List</h1>

<p>
        <a href="/products/create" class="btn btn-success">Create Product</a>
    </p>

    <form><div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search for Products" name="Search" value="<?php echo $search?>">
  <button class="btn btn-outline-secondary" type="Submit">Search</button>
</div></form>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <!-- <?php foreach($products as $i => $product) : ?> -->
    <tr>
        <th scope="row"><?php echo $i + 1 ?></th>
        <td>
          <img src="/<?php echo $product['image'] ?>" alt="" width="50">
        </td>
        <td><?php echo $product['title'] ?></td>
        <td><?php echo $product['price'] ?></td>
        <td><?php echo $product['create-date'] ?></td>
        <td>
        <a href="update.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-outline-primary" >Edit</a>
        <form style="display:inline-block" method="post" action="delete.php">
          <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
        </form>
        </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
