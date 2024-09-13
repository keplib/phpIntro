<?php 
require "functions.php";
require "Database.php";
require "Response.php";
require 'router.php';


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