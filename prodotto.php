<?php

class Prodotto { //Creo classe per prodotto generico
    public $id_prodotto;
    public $nome_prodotto;
    public $prezzo_prodotto;
    public $reparto_prodotto;
    public $sconto_prodotto;

    function __construct($nome_prodotto,$prezzo_prodotto,$reparto_prodotto = NULL,$sconto_prodotto = NULL) { //Costruttore per dati prodotto
        $this->nome_prodotto = $nome_prodotto;
        $this->prezzo_prodotto = $prezzo_prodotto;
        $this->reparto_prodotto = $reparto_prodotto;
        $this->sconto_prodotto = $sconto_prodotto;

    }

    public function printProduct() { //Funzione di stampa prodotto
        echo $this->nome_prodotto . ' prezzo: ' .  $this->prezzo_prodotto . ' Reparto: ' . $this->reparto_prodotto;
    }

    public function applSconto() { //Funzione di calcolo sconto
        $sconto = ($this->prezzo_prodotto * $this->sconto_prodotto) / 100;
        $prezzo_finale = $this->prezzo_prodotto - $sconto;
        return $prezzo_finale;
    }
}


 ?>
