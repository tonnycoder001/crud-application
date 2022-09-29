<?php

namespace Router;

class Router
{
    public array $getroutes = [];
    public array $postroutes = [];

public $db;

    public function __construct()
    {
       
    }
    
    public function get($url, $fn)
{
  $this->getRoutes[$url] = $fn;
  $this->postRoutes[$url] = $fn;
}
    public function post($url, $fn)
{
$this->postRoute[$url] = $fn;
}
    public function resolve()
    {
     $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
$method = $_SERVER['REQUEST_METHOD'];

if($method === 'GET') {
    $fn = $this->getRoutes[$currentUrl] ?? null;

} else {
    $fn = $this->postRoute[$currentUrl] ?? null;
}
if ($fn) {

call_user_func($ $this);

} else {
    echo "page not found";
}


}

public function renderviews($views, $params = [])
{ 
    foreach($params as $key =>$value){
        $$key = $value;
    }
    ob_start();
include_once __DIR__."/views/$views.php";
$content = ob_get_clean();
include_once __DIR__."/views/_layout.php";
}
}