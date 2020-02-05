<?php
require_once 'Vestiti.php';
require_once 'Accessori.php';

$calza = new Prodotto('calza', '10.00€');
$calza->codice_interno = 'QWERTY123';

$maglia = new Vestito('t-shirt','30.00€', 'XL', 'Uomo');
$maglia->numero_pezzi = 65;

$orecchini = new Accessorio('orecchini', 40.00);


echo '<pre>';
var_dump($maglia);
var_dump($calza);
var_dump($orecchini);
echo '<br>';
echo "Il prezzo del prodotto ". $orecchini->nome ." scontato al 20% è di: ". $orecchini->sales_on_accessories(20) . "€.";
echo '</pre>';


?>
