<?php

$heading = 'Notes';

$config = require('config.php');

$db = new Database($config['database']);
$query = "select * from notes";

// When we receive several items, we do fetchAll and we fetch it as an associative array
$posts = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

// dd($posts);



require "views/notes.view.php";