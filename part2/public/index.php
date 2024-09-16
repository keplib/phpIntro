<?php 

const BASE_PATH = __DIR__ . '/../';

spl_autoload_register(function ($class) {

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});


require BASE_PATH . "core/functions.php";
// require base_path("Database.php");
// require base_path("Response.php");
require base_path('core/router.php');


// if ($uri === '/') {
//     require 'controllers/index.php';
// } else if ($uri === '/about') {
//     require 'controllers/about.php';
// } else {
//     require 'controllers/contact.php';
// }


// $config = require('config.php');

// $db = new Database($config['database']);

// to get the params from the request URL
// $id = $_GET['id'];
// $query = "select * from posts where id = {$id}";
// $query = "select * from notes";

// When we receive several items, we do fetchAll and we fetch it as an associative array
// $posts = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

// but when we only have one item returned we can do -> fetch()

// foreach ($posts as $post) {
//     echo "<li>" . $post['body'] . "</li>";
// }