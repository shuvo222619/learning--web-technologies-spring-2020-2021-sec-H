<?php


$vat = 15;


$vatDivisor = 1 + ($vat / 100);


$price = 1500;


$priceBeforeVat = $price / $vatDivisor;


$vatAmount = $price - $priceBeforeVat;


echo number_format($priceBeforeVat, 2);


echo 'VAT = ' . $vat . '% - ' . number_format($vatAmount, 2);


echo $price;
?>