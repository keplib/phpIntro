
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
    <h1>
      <?= $message?>
    </h1>

    <h1>Recommended Books </h1>

    <!-- <ul>
      <?php foreach ($books as $book) {echo "<li>$book[0]</li>";} ?>
    </ul> -->


     <!-- <ul>
      <?php foreach ($books as $book) : ?>
        <li><?= $book[0] ?> </li>
      <?php endforeach; ?>
    </ul> -->

    <!-- <p><?= $books[1][0]?></p> -->


    <!-- <ul>
      <?php foreach ($associativeBooks as $book) : ?>
        <li>
          <a href="<?= $book['purchaseUrl']?>" >
            <?= $book['title']?> <?= $book['release_year']?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul> -->

    <!-- <ul>
      <?php foreach ($associativeBooks as $book) : ?>
        <?php if($book['author'] === 'Andy Weir') : ?>
        <li>
          <a href="<?= $book['purchaseUrl']?>" >
            <?= $book['title']?> <?= $book['release_year']?>
          </a>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul> -->
    

    <ul>
      <?php foreach ($filteredBooks as $book) : ?>
        <li>
            <?= $book['title']?> 
          </a>
        </li>
      <?php endforeach; ?>
    </ul>


  </body>
</html>
