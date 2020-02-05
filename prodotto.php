<?php

class Prodotto {
    public $id_prodotto;
    public $nome_prodotto;
    public $prezzo_prodotto;
    public $reparto_prodotto;

    public function printProduct() {
        echo $this->nome_prodotto . ' prezzo: ' .  $this->prezzo_prodotto . ' Reparto: ' . $this->reparto_prodotto;
    }
}


 ?>
