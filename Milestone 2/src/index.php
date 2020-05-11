<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Dischi musicali</title>
  </head>
  <body>
    <header>
      <img src="logo.png" alt="">
    </header>
		<div class="box">

		</div>

		<script class="album-template" type="text/x-handlebars-template">  
				<div class="container">
					<div class="album">
						<img src="{{cover}}"/>
					</div>
					<div class="titolo">
						<h3>{{title}}</h3>
						<p>{{artist}}</p>
						<p>{{year}}</p>
					</div>
				</div>
		</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
		<script type="text/javascript" src="app.js"></script>
  </body>
</html>
