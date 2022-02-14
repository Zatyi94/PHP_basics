<?php

// kiírás
print("Hello World!");
echo 'Hello World!';

$egy = "Tom";
echo $egy;
$egy = 1;
echo $egy;

$ketto = "Ann";

// echo $egy * $ketto;
// ez hibát dobna, mert szöveget nem szorozhatunk számmal

// EGYSZERŰ TÍPUSOK

//szamok
$a = 12; // egész szám
echo gettype($a);
echo "\n";
$b = -23; // negatív egész szám
echo gettype($b);
echo "\n";
$c = 023; // oktális egész szám
echo gettype($c);
echo "\n";
$d = 0x12; // hexadecimális egész szám
echo gettype($d);
echo "\n";
$e = 12.1; // lebegőpontos szám
echo gettype($e);
echo "\n";

//
$w = is_numeric($a); // megvizsgálja, hogy az adott érték szám-e. igaz vagy hamis értéket ad vissza
is_int($a); // egész szám?
is_float($a); // lebegőpontos szám?
// zárójelek közé adjuk meg mindig, hogy mit vizsgálunk
// amit kiemel sárgán, azért mert nincs beletöltve az eredmény egy változóba. ellenpélda: 1. vizsgálat

// speciális karaktereket, pl. sortörés (\n) vagy tabulátor: csak ""-k között működnek,
// ''-k közé írva a terminál szöveg típusként érelmezi

// szöveg
$f = "Trapista sajt"; // C#-al ellentétben a string lehet ""-ben és ''-ben is
//
is_string($f); // paraméterben megadott változó szöveg ípus?
$w = strlen($f); // szöveg hosszának lekérése (egéz számot ad vissza)
$w = strtolower(); // strtoupper(); // szöveg átalakítása kis vagy nagybetűvé
// explode(); implode(); // szétdarabolni tudunk egy szöveget vagy összefűzni valamilyen karakter mentén
// ezt a kettő szöveg műveletet a tömbökkel együtt szoktuk használni
$w = strpos("lorem ip sum dolor sit amet", "ip"); // megkeres valamit, hogy hanyadik helyen van...
// a szövegben - az indexét írja ki. 0-tól indexelünk. ha nem találja: -1
$w = strpos($f, "sajt");
$need = "ajt";
$w = strpos($f, $need);
str_replace("lorem ip sum dolor sit amet", "d", "i");

// boolean: igaz / hamis
$g = true;
$h = false;
//
$w = is_bool($g); // paraméterben megadott változó boolean?

// ÖSSZETETT TÍPUSOK

// tömb
$i = array(); // nem kell megadni a tömb méretét, szabadon garázdálkodhatunk :)
//
$w = is_array($i); // paraméterben megadott változó tömb típusú?

// osztály
$j = new PDO(); // new kulcsszóval megadjuk az osztály nevét és zárójelben a paramétereit
//
// $w = is_class($j); // ez hibát dobna, is_class nincs
$w = get_class($j); // paraméterben megadott változó osztály típusú?

// SPECIÁLIS TÍPUSOK

// erőforrás típus (resource)
$k = fopen("asd.txt");
//
$w = is_resource($k); // paraméterben megadott változó erőforrás típusú?

// null típus
$l = null;
// van a memóriánk, mint egy táblázat, minden cellának címe, és ha létrehozunk egy változót,
// és elmentünk benne érétket, az helyet kap az egyikben
// null értékkel a helyet kapjuk meg

// callable
$m = function (){
    // milyen műveleteket hajtson végre a függvény,
    // ami a változóba kerül
};
//
$w = is_calleble($m); // paraméterben megadott változó callable?

// ADOTT VÁLTOZÓ DEFINIÁLVA VAN?
$w = isset($m); // igaz - az $m korábban már létrehozásra került
$w = isset($z); // hamis - a $z korábban még nem került létrehozásra



