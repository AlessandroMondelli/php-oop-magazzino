<?php
include_once 'prodotto.php'; //Includo file che contiene la classe prodotto
include_once 'scarpe.php'; //Includo file che contiene la classe scarpe

$prodotto = new Prodotto();
$prodotto->id_prodotto = '1';
$prodotto->nome_prodotto = 'Guanti Palestra Domyos';
$prodotto->prezzo_prodotto = '7.99';
$prodotto->reparto_prodotto = 'Gym';

$prodotto->printProduct(); //Richiamo funzione per stampare i dati del prodotto a schermo

echo "<br>";

$scarpe = new Scarpe();
$scarpe->id_prodotto = '2';
$scarpe->nome_prodotto = 'Air Max';
$scarpe->prezzo_prodotto = '99.99';
$scarpe->reparto_prodotto = 'Jogging';
$scarpe->marca_scarpe = 'Nike';
$scarpe->numero_scarpe = '42';

$scarpe->printProduct(); //Richiamo funzione per stampare i dati del prodotto a schermo

 ?>
