<?php

//pentru ca sa nu setam manul numarul de prezente
//poate putem sa introduca proful o variabila care sa 
//spuna saptamana curenta -> deci numarul maxim de prezente
//si noi dupa o preluam 

//daca nu poate sa ramana asa si sa bagam noi la mana numarul de prez max in fuctie de sapt

$nr_prez = 1; //numarul de prezente ale elevului
$max_nr_prez = 4; //numarul maxim de prezente

$procentaj = ($nr_prez * 100) / $max_nr_prez; //procentajul de trecere in functie de prezente

echo $procentaj;