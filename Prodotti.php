<?php
// ciao ragazzi, oggi mettete subito le mani in pasta con la programmazione a oggetti e provate a creare una gerarchia di classi per gestire i prodotti di un magazzino (almeno una classe base e una classe che fa extends).
// A voi piena scelta sulla tipologia di prodotti e sulle funzioni da inserire, l'idea è che prendiate familiarità con questo nuovo paradigma di programmazione
// Nome repo: php-oop-magazzino

class Prodotto {
    public $nome;
    public $prezzo;
    public $numero_pezzi;
    public $codice_interno;
    function __construct($_nome, $_prezzo) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
}

?>
