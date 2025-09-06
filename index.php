<?php
include_once('./Traits/ratings.php');
include_once('./Models/genres.php');
include_once('./Models/movies.php');
include_once('./db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP Movie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <h1 class="text-center">My Favourite Movies</h1>
  <hr>
  <div class="container">
    <div class="row">
      <?php
      $movies = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6, $movie7, $movie8];
      foreach ($movies as $movie) {
        echo '
        <div class="card m-2" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">' . $movie->title . ' - ' . $movie->year . '</h3>
    <h5>' . $movie->director . '</h5>
    <p class="card-text">' . $movie->description . '</p>';
        foreach ($movie->genres as $genre) {
          echo '<span class="badge text-bg-secondary me-1">' . $genre->name . '</span>';
        }
        echo '
  </div>
</div>
        ';
      }
      ?>
    </div>
  </div>
</body>

</html>