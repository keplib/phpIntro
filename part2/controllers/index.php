<?php

//$heading = 'Home';

// dd($_SERVER);

//echo $_SERVER['REQUEST_URI'];


// if ($_SERVER['REQUEST_URI'] === '/') { 
//     echo 'bg-gray-900 text-white';
// } else { 
//     echo 'text-gray-300';
// }


view("index.view.php", [
    'heading' => 'Home'
]);
