<?php 
require "functions.php";
require "Database.php";
// require 'router.php';


// if ($uri === '/') {
//     require 'controllers/index.php';
// } else if ($uri === '/about') {
//     require 'controllers/about.php';
// } else {
//     require 'controllers/contact.php';
// }


$config = require('config.php');

$db = new Database($config['database']);
// When we receive several items, we do fetchAll and we fetch it as an associative array
$posts = $db->query("select * from posts;")->fetchAll(PDO::FETCH_ASSOC);

// but when we only have one item returned we can do -> fetch()

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}