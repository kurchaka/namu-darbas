<?php
// antra.php

$pradzia = 1;
$pabaiga = 10000;   // galima keisti iki 10^6

$rezultatai = [];

for ($i = $pradzia; $i <= $pabaiga; $i++) {

    $skaicius = $i;
    $iteracijos = 0;
    $didziausia_reiksme = $skaicius;

    while ($skaicius != 1) {

        if ($skaicius % 2 == 0) {
            $skaicius = $skaicius / 2;
        } else {
            $skaicius = 3 * $skaicius + 1;
        }

        if ($skaicius > $didziausia_reiksme) {
            $didziausia_reiksme = $skaicius;
        }

        $iteracijos++;
    }

    $rezultatai[$i] = [$iteracijos, $didziausia_reiksme];
}

// pradines reikšmės palyginimui
$didziausias_augimas_skaicius = $pradzia;
$didziausias_augimas_reiksme = $rezultatai[$pradzia][1];

$daugiausiai_iteraciju_skaicius = $pradzia;
$daugiausiai_iteraciju_kiekis = $rezultatai[$pradzia][0];

$maziausiai_iteraciju_skaicius = $pradzia;
$maziausiai_iteraciju_kiekis = $rezultatai[$pradzia][0];

foreach ($rezultatai as $skaicius => $duomenys) {

    if ($duomenys[1] > $didziausias_augimas_reiksme) {
        $didziausias_augimas_reiksme = $duomenys[1];
        $didziausias_augimas_skaicius = $skaicius;
    }

    if ($duomenys[0] > $daugiausiai_iteraciju_kiekis) {
        $daugiausiai_iteraciju_kiekis = $duomenys[0];
        $daugiausiai_iteraciju_skaicius = $skaicius;
    }

    if ($duomenys[0] < $maziausiai_iteraciju_kiekis) {
        $maziausiai_iteraciju_kiekis = $duomenys[0];
        $maziausiai_iteraciju_skaicius = $skaicius;
    }
}

// 3 eilutės po 2 stulpelius
echo $didziausias_augimas_skaicius . " | " . $didziausias_augimas_reiksme . "<br>";
echo $daugiausiai_iteraciju_skaicius . " | " . $daugiausiai_iteraciju_kiekis . "<br>";
echo $maziausiai_iteraciju_skaicius . " | " . $maziausiai_iteraciju_kiekis . "<br>";

?>