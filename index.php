<?php

use App\Router;

require_once 'vendor/autoload.php';

define('DEBUG_TIME', microtime(true));

$router = new Router();
$router
    ->get('/', './views/home/home', 'home')
    ->get('/post', './views/posts/blog', 'post')
    ->get('/category', './views/posts/category', 'category')
    ->get('[*:slug]-[i:id]', './views/posts/show', 'show')
    ->get('/contact', './views/contact/contact', 'contact')
    ->run();
