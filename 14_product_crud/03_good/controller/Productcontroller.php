<?php
namespace app\controllers;


class Productcontroller
{

    public function index($router){
        $search = $_GET['search'] ?? '';
    //    $products = $router->db->getproducts()
    $router->renderview('products/index', [
        'products'
    ]);
$errors = [];
    $productData = "[
'title' = '',
'description' = '',
'image' = '',
'price' = '',
    ]";

    // if ($_SERVER['REQUEST_METHOD']) 'POST'{
        $productData['title'] = $_POST['title'];
        $productData['description'] = $_POST['description'];
        $productData['price'] = $_POST['price'];
        $productData['imagefile'] = $_FILES['image'] ?? null;
      

        // $product = new product();
//         $product->load($product);
// $error = $product->save();

if(empty($errors)) {
    header('location: /products');
    exit;

    $productData['title'] = $_POST['title'];
    $productData['description'] = $_POST['description'];
    $productData['price'] = $_POST['price'];
    $productData['imagefile'] = $_FILES['image'] ?? null;
  
}

    }
    
    public function create(){
        
        echo "create page";
    }
    
    public function update(){
        
        echo "update page";

    }
    
    public function delete(){

        echo "delete page";
    }
}
