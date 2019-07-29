<?php 
//Chemin du fichier
$path_file = './data/movies.csv';

$dataMovies = [];
$myMovies = fopen($path_file, 'r');

if($myMovies){
    while($row = fgetcsv($myMovies, 1000, ';')){
        $dataMovies[] = $row;
    }

    fclose($myMovies);
}


$dataMovies = array_slice($dataMovies, 1);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes films</title>
</head>
<body>
    <h1>Voici ma liste de films de préférés</h1>
    <div class="container-movies">
        <?php foreach($dataMovies as $movie):?>
            <div class="movie">
                <h1><?= $movie[1] ?></h1>
                <div class="movie-infos">
                    <span class="info director"><?= $movie[2] ?></span>
                    <span class="info genre"><?= ucfirst($movie[3]) ?></span>
                    <span class="info annee"><?= $movie[5]?></span>
                </div>
                <div class="movie-resume">
                    <p><?= $movie[4] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>