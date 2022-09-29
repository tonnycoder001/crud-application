<?php

namespace app\models;

class products
{
public ?int $id = null;
public ?string $title = null;
public ?string $description = null;
public ?float $price = null;
public ?string $imagepath= null;
public ?array $imagefile = null;

public function load($data)

{
    $this->id = $data['id'] ?? null;
    $this->title = $data['title'];
    $this->description = $data['descriptio'];

    $this->price = $data['price'];

    $this->imagefile = $data['imagefile'] ?? null;
    $this->imagepath = $data['image'] ?? null;

}

public function save() {

$errors = [];
if (!$this->title) {
    $errors[] = 'product title is required';
}

if (!$this->price) {
    $errors[] = 'product price is required';
}
IF(!is_dir(__DIR__.'/../public/images')) {
    mkdir(__DIR__.'/../public/images');
}


if(empty($errors)) {
    if ($this->imagefile && $this->imagefile['tmp_name']) {
      if ($this->imagepath['image']) {
        unlink(__DIR__.'/../public/'. $this->imagepath);
      }
      $this->imagePath = 'images/' .randomString(8).'/'.$this->imagefile['name'];
       mkdir(dirname(__DIR__.'/../public/'. $this->imagePath));
      move_uploaded_file($this->image['tmp_name'], __DIR__. '/../public/'. $this->imagePath);
    }
    // $db = Database::$db;
    // if ($this->id) {
    //     $db->updateproducts($this);
    // } else {
    //     $db->createProducts($this);
    // }

    }

    return $errors;
}

}