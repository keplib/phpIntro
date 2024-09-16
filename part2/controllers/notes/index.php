<?php

//$heading = 'My Notes';

$config = require base_path('config.php');

$db = new Database($config['database']);
$query = "select * from notes where user_id = 1";

// When we receive several items, we do fetchAll and we fetch it as an associative array
// $posts = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
$posts = $db->query($query)->get();


// dd($posts);



//require "/notes/index.view.php";

view('notes/index.view.php', [
    'heading' => 'My Notes',
    'posts'  => $posts
]);