<?php
include_once 'prodotto.php'; //Includo file che contiene la classe prodotto
include_once 'scarpe.php'; //Includo file che contiene la classe scarpe

$prodotto = new Prodotto('Guanti Palestra Domyos','10','Gym','5');
$prodotto_2 = new Prodotto('Barretta Proteica','2','Gym');

$scarpe = new Scarpe('Air Max','99','Jogging','30');
$scarpe->marca_scarpe = 'Nike';
$scarpe->numero_scarpe = '42';

$scarpe_2 = new Scarpe('Converse','69','Casual','20');
$scarpe_2->marca_scarpe = 'Converse';
$scarpe_2->numero_scarpe = '40';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>BoolAtlon</title>
        <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>BoolAtlon <small>Gestione Magazzino</small></h1>
        </header>
        <main>
            <div class="prodotti generici">
                <div class="prod">
                    <h2>Prodotti Outlet</h2>
                    <?php
                    $prodotto->printProduct(); //Richiamo funzione per stampare i dati del prodotto a schermo
                    $prezzo_scontato = $prodotto->applSconto(); //Richiamo funzione per calcolare sconto
                    ?>
                    <p><?php echo "Il prezzo scontato è: " . number_format($prezzo_scontato, 2, ",", ".");?></p>
                </div>
                <div class="prod">
                    <?php
                    $prodotto_2->printProduct(); //Richiamo funzione per stampare i dati del prodotto a schermo
                    $prezzo_scontato = $prodotto_2->applSconto(); //Richiamo funzione per calcolare sconto
                    ?>
                    <p><?php echo "Il prezzo scontato è: " . number_format($prezzo_scontato, 2, ",", ".");?></p>
                </div>
            </div>
            <div class="prodotti scarpe">
                <h2>Scarpe</h2>
                <div class="prod">
                    <?php
                    $scarpe->printProduct(); //Richiamo funzione per stampare i dati del prodotto a schermo
                    $prezzo_scontato = $scarpe->applSconto(); //Richiamo funzione per calcolare sconto
                    ?>
                    <p><?php echo "Il prezzo scontato è: " . number_format($prezzo_scontato, 2, ",", "."); ?></p>
                </div>
                <div class="prod">
                    <?php
                    $scarpe_2->printProduct(); //Richiamo funzione per stampare i dati del prodotto a schermo
                    $prezzo_scontato = $scarpe_2->applSconto(); //Richiamo funzione per calcolare sconto
                    ?>
                    <p><?php echo "Il prezzo scontato è: " . number_format($prezzo_scontato, 2, ",", "."); ?></p>
                </div>
            </div>
        </main>
    </body>
</html>
