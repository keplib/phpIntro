<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
//$heading = 'Note';
$currentUserId = 1;


if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $post = $db->query('select * from notes where id=:id', ['id' => $_GET['id']] )->findOrFail();
    
    authorize($post['user_id'] === $currentUserId);

    // form was submitted, delete the current note
    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);

    header('location: /notes');
    exit();

} else {
    // When we receive several items, we do fetchAll and we fetch it as an associative array
    // $posts = $db->query("select * from notes where id ={$_GET['id']}")->fetchAll();
    $post = $db->query('select * from notes where id=:id', ['id' => $_GET['id']] )->findOrFail();
    
    authorize($post['user_id'] === $currentUserId);
    
    //require "views/notes/show.view.php";
    
    view('notes/show.view.php', [
        'heading' => 'Note',
        'post' => $post,
        //'currentUserId' => $currentUserId
    ]);
}
