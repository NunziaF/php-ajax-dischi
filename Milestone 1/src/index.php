<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Dischi musicali</title>

    <?php
    include 'db.php';
    ?>
  </head>
  <body>
    <header>
      <img src="img/logo.png" alt="logo"/>
    </header>

    <div class="box">

      <?php
        foreach ($db as $album) {?>
          <div class='container'>
            <div class="album">
              <img src="<?php echo $album["poster"]; ?>"/>
            </div>
						<div class="titolo">
              <h3><?php echo $album["title"]; ?></h3>
  						<p><?php echo $album["author"]; ?></p>
  						<p><?php echo $album["year"]; ?></p>
            </div>
  				</div>
        <?php } ?>

    </div>
  </body>
</html>
