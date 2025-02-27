<?php 
//leggere il file dei dischi e salva in variabile
$json_text = file_get_contents("./dischi.json");

//convertiamo la stringa da json ad array associativo
$dischi = json_decode($json_text, true); 

//modifichiamo la struttura dati
//inseriamo il nuovo disco nel file
$new_album = [
    'titolo' => $_POST['new-album-name'],
    'artista' => $_POST['new-album-artist'],
    'cover' => $_POST['new-album-cover'],
    'anno' => $_POST['new-album-year'],
    'genere' => $_POST['new-album-genre'],
];

$dischi[] = $new_album;

//riconvertiamo la struttura dati in json
//JSON_PRETTY_PRINT E' STATA UNA BELLA SCOPERTA
$json_text = json_encode($dischi, JSON_PRETTY_PRINT);

//sovrascriviamo il contenuto del file.json
file_put_contents("./dischi.json", $json_text);

//reindirizzare l'utente a index
header("Location: ./index.php");
exit();

?>