<?php

// KONSTANSOK
// tároló lemek, amelyek értéke nem fog változni, nem változtatható
// nem kell eléjük a $
define("EGY", 1);
const KETTO = 1;

echo KETTO;
echo "\n";

$a = 1;
$b = "asd";

/*
if (<feltétel>){
    <teljesülés esetén lefutó rész>
} else if(<feltétel1>){
    <....>
} else{
    <nem teljesülés esetén lefutó kód>
}
*/

$c = "13";
if ($c > KETTO){           // < > <= >= ==
    echo "NAGYOBB!";
}
echo "\n";
// PHP összehasonlításnál automatikusan konvertálja a stringet inegerré
if ($c == 13){           // egy = azt vizsgálná, hogy megkapta-e azt az értéket a változó
    echo "EGYENLŐEK!";
}
echo "\n";
if ($c === 13){
    echo "EGYENLŐEK!";
} else{
    echo "NEM E...!"; // nem egyenlőek, mert itt nem konvertál automatikusan és a c szöveg, a feltétel meg szám
}

echo "\n";
$d = "0";
echo gettype($d); // string 0
echo $d;
echo "\n";
$d += 2; // $d = $d + 2;
echo gettype($d); // int 2
echo $d;
echo "\n";
$d = $d + 1.3;
echo gettype($d); // float 3.3 (itt double-nek hívják)
echo $d;
echo "\n";

$e = 3 + (integer)"4 kg Trapista sajt"; // ha beírjuk elé: (integer) - az kényszeríti a konvertálást
echo gettype($e);
echo " ";
echo $e;
// 7 lesz az érték és integer típusú lesz
// azt a részét konverálja át, amit tud
// de ha a végére írnám, pl. + "Trappista sajt: 4 kg" azt már nem vinné

echo "\n";

// HIBÁBA FUT!
// PHP8-ban már nem lehet a tömbökkel ilyesmit csinálni
/*
$f = 1;
$f[1] = 2;
var_dump($f);
*/

// ÖSSZEHASONLÍTÓ OPERÁTOROK
// == érték összehasonlítás
// === típus összehasonlítás
// != nem egyenlő
// !== n.e.
// < kisebb
// <= kisebb-egyenlő
// > nagyobb
// >= nagyobb-egyenlő

// AROTMETIKAI OPERÁTOROK
// + - * / %
$a = 5;
$b = 8;
echo $a / $b;
echo "\n";

// SZÖVEG OPERÁTOROK
// szöveggel végezhető műveletek
// . összefűzés
// .= végére fűzünk valamit, olyan mint számoknál a +=
$g = "asd";
$g .= "fgh";
echo $g;
// .= += /= *= -= %=
echo "\n";

// ++ --
$t = 1;
echo $t++; // 1-et ír ki, csak utána növeli az értéket, így végül 2 lesz...
$t = 1;
echo ++$t; // 2 lesz: először növel, és utána írjuk ki
echo "\n";

// LOGIKAI MŰVELETEK
// or ||
// and &&
// xor (kizáró vagy kapcsolat)
if (false xor true )
{
    // lefut
}
if (true xor false)
{
    // lefut
}
if (true xor true)
{
    // nem fut le
}
if (false xor false)
{
    // nem fut le
}
// ! tagadás