<?php

$str = $_POST['id'].';'.$_POST['titre'].';'.$_POST['director'].';';

foreach($_POST['genre'] as $genre){
    if($genre === end($_POST['genre'])){
        $str .= $genre.';';
    } else {
        $str .= $genre.' ';
    }
}

$str .= $_POST['resume'].';'.preg_split("/[\-]/", $_POST['date'])[0];

$path_file = './data/movies.csv';

if(is_writable($path_file)){
    $myMovie = fopen($path_file, 'a');

    fwrite($myMovie, $str);
    fclose($myMovie);
    
    header('Location: index.php');
    exit;
} else {
    echo "Il est impossible d'écrire dans le fichier";
    exit;
}
