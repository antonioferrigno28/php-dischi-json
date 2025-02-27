<?php 
require_once("./functions.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
    <h1 class="title my-4 text-center">Boolify</h1>
    <div class="row g-3 px-5 justify-content-center mx-auto my-auto centered pb-4">
    <?php 
    // PER OGNI DISCO
    foreach($dischi as $disco) {
        // STAMPA CARD
        echo "<div class='col-lg-4 col-md-6 col-sm-12'> 
            <div class='card px-0 border-0 rounded-0'> 
                <img src='$disco->cover' class=' img-fluid'>
                <div class='card-body text-center'>
                    <h5 class='card-title'>$disco->titolo</h5>
                    <p class='card-text fw-semibold'>$disco->artista</p>
                    <p class='card-text'>$disco->anno</p>
                    <p class='card-text fst-italic'>$disco->genere</p>
                </div>
            </div>
        </div>";
    }
    ?>
</div>
<h1 class="title-light my-4 text-center">Vuoi aggiungere un disco alla lista?</h1>
<h2 class="text-light my-4 text-center">Compila questo semplice form!</h2>
    
<div class="text-center">
    <!-- FORM POST PER LE INFORMAZIONI SENSIBILI -->
    <form action="server.php" class="container py-4" method="POST">

        <div class="row g-3 justify-content-center">
            <div class="col-lg-3 col-md-4 col-12">
                <label for="album-cover" class="form-label text-light">Cover dell'album</label>
                <input type="text" id="new-album-cover" name="new-album-cover" class="form-control" placeholder="Inserisci l'URL della cover">
            </div>

            <div class="col-lg-3 col-md-4 col-12">
                <label for="album-name" class="form-label text-light">Nome dell'album</label>
                <input type="text" id="new-album-name" name="new-album-name" class="form-control" placeholder="Nome dell'album">
            </div>
            
            <div class="col-lg-3 col-md-4 col-12">
                <label for="album-artist" class="form-label text-light">Artista</label>
                <input type="text" id="new-album-artist" name="new-album-artist" class="form-control" placeholder="Nome dell'artista">
            </div>
            
            <div class="col-lg-3 col-md-4 col-12">
                <label for="album-year" class="form-label text-light">Anno di pubblicazione</label>
                <input type="text" id="new-album-year" name="new-album-year" class="form-control" placeholder="Anno di pubblicazione">
            </div>

            <div class="col-lg-3 col-md-4 col-12">
                <label for="album-genre" class="form-label text-light">Genere</label>
                <input type="text" id="new-album-genre" name="new-album-genre" class="form-control" placeholder="Genere dell'album">
            </div>
        </div>

        <!-- BUTTON SENZA TYPE SUBMIT SENNO' VIENE MOSTRATA LA ROBA NELL'URL (CI HO SCLERATO MEZZ'ORA) -->
        <button class="btn btn-success mt-3 px-5">Invia</button>
    </form>
</div>

        </div>
</body>
</html>