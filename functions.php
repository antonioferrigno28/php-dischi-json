<?php 
//Vogliamo leggere il json in modo da mostrare il risultato in pagina
//Leggi un file presente sul server e restituisce UNA STRINGA
$json_text = file_get_contents("./dischi.json");
//var_dump($json_text);

//per trasformare la stringa in una struttura dati
$dischi = json_decode($json_text); 
//mostro
//var_dump($dischi);
//echo "<br>";
//Adesso che è un oggetto posso anche fare 
//var_dump($dischi[0]);
?>