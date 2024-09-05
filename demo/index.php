<?php
$name = "Dark Matter";
$read = false;

if ($read) {
  $message = "You have read $name";
} else {
  $message = "You haven't read $name";
}


$books = [
  [
    "Do Androids dream of electric sheep",
    "Philip K. Dick",
    "http://example.com"
  ],
  [
    "Hail Mary",
    "Andy Weir",
    "http://example.com"
  ]
];

  $associativeBooks = [
  [
    "title" => "Do Androids dream of electric sheep",
    "author" => "Philip K. Dick",
    "release_year" => 1968,
    "purchaseUrl" => "http://example.com"
  ],
  [
    "title" => "Hail Mary",
    "author" => "Andy Weir",
    "release_year" => 2021,
    "purchaseUrl" => "http://example.com" 
  ],
    [
    "title" => "The Martian",
    "author" => "Andy Weir",
    "release_year" => 2011,
    "purchaseUrl" => "http://example.com" 
  ]
];

function filter($items, $fn) {

  $filteredItems = [];

  foreach ($items as $item) {
    if ($fn($item)) {
      $filteredItems[] = $item;
      }
  }
  return $filteredItems;
};

$filteredByAuthor = function ($books, $author) {
  $filteredBooks = [];

  foreach ($books as $book) {
    if ($book['author'] === $author) {
      $filteredBooks[] = $book;
      }
  }
  return $filteredBooks;
};

// $filteredBooks = filter($associativeBooks, function ($book) {
//   return $book['release_year'] >= 2000;
// });

$filteredBooks = array_filter($associativeBooks, function($book) {
  return $book['release_year'] < 2000;
});

require "index.view.php";

