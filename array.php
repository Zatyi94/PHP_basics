<?php

// ahhoz,hogy terminálban tudjuk futtatni, először a következő parancsot adtuk be neki:
// c:\xampp\php\php.exe filename.php

$a = array("ab", "bc", "ca");

//print_r($a);
// kiírja a tömböt, index alapján rendezve az elemeit
echo "3 elemű tömb megjelenítése:\n";
var_dump($a);
// kiírja a tömb elemeit index alapján rendezve, hogy mi az elem, és azt is, hogy milyen típusú, hány karakter
$a[] = "da"; // rakd be az a tömb végére / következő üres helyére a következő elemet
echo "A következő helyre 1 elem került hozzáadásra:\n";
var_dump($a);

$a[2] = "DD"; // megmondhatjuk, hogy hova rakja be: 2. indexű (3. helyen lévő) elem helyére (kicseréli)
echo "2. elem cseréje:\n";
var_dump($a);

$a[100] = "Zzz"; // nincs 100 elemem, de mondhatom az, hogy a 100. legyen vmi, és megcsinálja
echo "100. elem beállítása 'Zzz'-re:\n"; // lesz egy 5elemű tömböm, aminek van egy 100. indexű eleme
var_dump($a);

// mínusz számokkal nem tudunk indexelni
// de léteznek asszociatív tömbök
$a["a"] = "KG";
echo "'a' indexű elem beállítása 'KG're:\n";
var_dump($a);

// tudunk együtt mozgatni értékeket
// ha a student nevű tömbnek megadom az index - változó párjait (mint a kulcs-érték párokat)
// akkor elég a var_dump-pal a student tömb kiírását kérnem, hoz mindent
$student = array();
$student["name"] = "Anna";
$student["borndate"] = "1998.01.12.";
$student["class"] = "12.A";
var_dump($student);

$student1 = array(
    "name" => "Peter",
    "borndate" => "2001.11.25.",
    "class" => "9.C",
    "woman" => false,
    "height" => 251
);
var_dump($student1);

// = array( ... ); helyett így is írhatom: = [ ... ];
$student2 = [
    "name" => "Boba",
    "borndate" => "1984.05.10.",
    "class" => "Mandalorian",
    "woman" => false,
    "height" => 200
];
var_dump($student2);

// több diák adatainak tárolása és kiírása
$students = array();
$students[] = $student;
$students[] = $student1;
$students[] = $student2;
var_dump($students);

// valamelyik tanuló valamelyik adatát szeretném elérni:
echo $students[2]["name"]; // 1. indexű tanuló nevét kérem

echo "\nEXPLODE::";
$szoveg = "Lorem ip s'um dolor s'it amet";
$szavak = explode(" ", $szoveg);
// separatort megadhatjuk '' és "" között is, ez azért jó, mert a szövegemben szerepelhet a másik
echo $szoveg;
echo "\n";
// echo $szavak; - erre hibát dob: "PHP Warning: Array to string conversion in...
// echoval nem lehet tömböt, csak egyszerű típusokat kiírni. helyette használjuk a var_dump-ot
var_dump($szavak);

echo "\nIMPLODE::";
$szoveg1 = implode(';', $szavak);
echo $szoveg1;