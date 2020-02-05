<?php
require_once 'Prodotti.php';

class Vestito extends Prodotto {
    public $taglia;
    public $genere;
    public $colore;
    function __construct($_nome, $_prezzo, $_taglia, $_genere) {
        parent::__construct($_nome, $_prezzo);
        $this->taglia = $_taglia;
        $this->genere = $_genere;
    }
}


?>
