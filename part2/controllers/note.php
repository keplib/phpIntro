<?php

$config = require('config.php');
$db = new Database($config['database']);
$heading = 'Note';

// When we receive several items, we do fetchAll and we fetch it as an associative array
// $posts = $db->query("select * from notes where id ={$_GET['id']}")->fetchAll();
$posts = $db->query('select * from notes where id=:id', ['id' => $_GET['id']] )->fetchAll();


require "views/note.view.php";