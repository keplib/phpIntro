<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>demo</title>
    <style>
      body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
      }
    </style>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="" />
  </head>
  <body>
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
            "purchaseUrl" => "http://example.com"
          ],
          [
            "title" => "Hail Mary",
            "author" => "Andy Weir",
            "purchaseUrl" => "http://example.com"
          ]
        ];
      ?>
    <h1>
      <?= $message?>
    </h1>

    <h1>Recommended Books </h1>
    <ul>
      <?php foreach ($books as $book) {echo "<li>$book[0]</li>";} ?>
    </ul>
     <ul>
      <?php foreach ($books as $book) : ?>
        <li><?= $book[0] ?> </li>
      <?php endforeach; ?>
    </ul>
    <p><?= $books[1][0]?></p>
     <ul>
      <?php foreach ($associativeBooks as $book) : ?>
        <li>
          <a href="<?= $book['purchaseUrl']?>" >
            <?= $book['title']?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
