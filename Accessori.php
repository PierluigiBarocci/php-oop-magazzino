<?php
require_once 'Prodotti.php';

class Accessorio extends Prodotto {
    function sales_on_accessories($perc_sale) {
        return ($this->prezzo - $this->prezzo * ($perc_sale / 100));
    }
}



?>
