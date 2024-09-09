<?php
// Create database class

// connect to our MySQL database. PDO PHP data objects

// First, create a new PDO class, dsn is the connection link
// $dsn ="mysql:host=127.0.0.1;port=3306;dbname=myapp;user=root;password=yourpassword;charset=utf8mb4";
// $pdo = new PDO($dsn, 'root');

// we create a statement that is essentially an SQL query
// $statement = $pdo->prepare("select * from posts");
// we execute it
// $statement->execute();
// and we fetch the results as associative arrays
// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// we can just console log it
// dd($posts);


// or we can fetch it as HTML list items 
// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }


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




// class Database {

//     public $connection;

//     // this will be called when a new istance of the class is created
//     public function __construct()
//     {
//         $dsn ="mysql:host=127.0.0.1;port=3306;dbname=myapp;user=root;password=yourpassword;charset=utf8mb4";

//         $this->connection = new PDO($dsn, 'root');

//     }

//     public function query($query) {
        
//         $statement = $this->connection->prepare($query);
//         $statement->execute();

//         return $statement;
//     }
// }

// Second iteration, to get rid off hard coded values

class Database {

    public $connection;

    // this will be called when a new istance of the class is created
    public function __construct($config, $username = 'root', $password = 'yourpassword')
    {
    
        // http_build_query($config) => host=localhost&port=3306&dbname=myapp&charset=utf8mb4
        // in order to change the separator, we can pass down a string for the separator as the 3rd value

        //http($config, '', ';') => host=localhost;port=3306;dbname=myapp;charset=utf8mb4

        // $dsn ="mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($query) {
        
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}