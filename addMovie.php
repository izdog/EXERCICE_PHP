<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .form-group, button {
            margin-top: 1em;
        }
        label[for="resume"] {
            display: block;
            margin-bottom: 5px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <section>
        <h1>Ajouter un film à ma collection </h1>
        <form action="postMovie.php" method="POST">
            <div class="form-group">
                <label for="id">Numero identifiant :</label>
                <input type="number" name="id" id="id">
            </div>
            <div class="form-group">
                <label for="titre">Titre :</label>
                <input type="text" name="titre" id="titre">
            </div>
            <div class="form-group">
                <label for="director">Réalisateur :</label>
                <input type="text" name="director" id="director">
            </div>
            <div class="form-group">
                <label for="action">Action : <input type="checkbox" name="genre[]" id="action" value="action"></label>
                <label for="aventure">Aventure :<input type="checkbox" name="genre[]" id="aventure" value="aventure"></label>
                <label for="drame">Drame : <input type="checkbox" name="genre[]" id="drame" value="drame"></label>
                <label for="horreur">Horreur : <input type="checkbox" name="genre[]" id="horreur" value="horreur"></label>
                <label for="sf">Science-fiction : <input type="checkbox" name="genre[]" id="sf" value="science-fiction"></label>
                <label for="thriller">Thriller : <input type="checkbox" name="genre[]" id="thriller" value="thriller"></label>
            </div>
            <div class="form-group">
                <label for="resume">Résumé : </label>
                <textarea name="resume" id="resume" cols="60" rows="7">Résumé du film ...</textarea>
            </div>
            <div class="form-group">
                <label for="date">Année : </label>
                <input type="date" name="date" id="date">
            </div>
            <button type="submit">Ajouter</button>
        </form>
    </section>
</body>
</html>