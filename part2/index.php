<?php 
require "functions.php";

// require 'router.php';


// if ($uri === '/') {
//     require 'controllers/index.php';
// } else if ($uri === '/about') {
//     require 'controllers/about.php';
// } else {
//     require 'controllers/contact.php';
// }


// connect to our MySQL database. PDO PHP data objects

// First, create a new PDO class, dsn is the connection link
$dsn ="mysql:host=127.0.0.1;port=3306;dbname=myapp;user=root;password=yourpassword;charset=utf8mb4";
$pdo = new PDO($dsn, 'root');

// we create a statement that is essentially an SQL query
$statement = $pdo->prepare("select * from posts");
// we execute it
$statement->execute();
// and we fetch the results as associative arrays
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// we can just console log it
// dd($posts);


// or we can fetch it as HTML list items 
foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}



// INTRO TO OBJECTS

// class Person {
//     public $name;
//     public $age;

//     public function breathe() {
//         echo $this->name . ' is breathing';
//     }
// }


// $person = new Person();

// $person->name = 'John Doe';
// $person->age= 25;
// $person->breathe();