<?php

$config = require('config.php');
$db = new Database($config['database']);
$heading = 'Note';
$currentUserId = 1;

// When we receive several items, we do fetchAll and we fetch it as an associative array
// $posts = $db->query("select * from notes where id ={$_GET['id']}")->fetchAll();
$post = $db->query('select * from notes where id=:id', ['id' => $_GET['id']] )->findOrFail();

authorize($post['user_id'] === $currentUserId);

require "views/notes/show.view.php";