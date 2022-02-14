<?php
// projekt: csináljunk random számot 1-től 6-ig, mint amit a kockával dobhatunk

// argumentumok: amikor meghívunk egy programot
// var_dump($argv);
// a terminálban való futtatáskor beírjuk, hogy php cube.php 8
// 0. elem, amit futtatunk, a fájl maga, utána azok az argumentumok, amiket még meghívunk
// ha beírom pl. hogy 8, az lesz az argv tömb 1. eleme
// $max = $argv[1];

// $argv[1] - Dobókockák oldalának száma
// $argv[3] - Dobókocka legkisebb értéke (pl. 0, ha 10 oldalú kocka 0-tól 9-ig van számozva)
// $argv[4] - Dobókocka legnagyobb értéke (pl. 9, ha 10 oldalú kocka 0-tól 9-ig van számozva)
// lehessen megadni paraméternek, hogy hány oldalú legyen a kockám (nem csak 6 oldalúak vannak)
$max = 6; // meghatározzuk a max oldalszámot
// $min = 1; // minimum szám default értéke, amit dobhatunk
// if ( (isset($argv[1]) && is_integer((integer)$argv[1])) && (isset($argv[3]) && is_integer((integer)$argv[3])) ) {
if (isset($argv[1]) && is_integer((integer)$argv[1])) {
    // megvizsgáljuk, hogy állítottunk-e be maxot
    // ezzel védem ki, hogyha pl. karaktert ütök be, akkor is lefusson hiba nélkül
    // mivel a 6 a default érték
    // terminálban minden string, ami onnan jön, string
        // ha onnan szeretnénk valamivel operálni, át kell alakítani
    $max = (integer)$argv[1]; // ha igen, akkor a max legyen az új oldalszám, ha nem, akkor marad a 6
    // $min = (integer)$argv[3]; //minimum legyen a legkisebb érték, különben 1
}

// mi van akkor, ha monopolyzunk, és 2 kockával szeretnénk dobni?
// $argv[2] - Dobókockák száma
$count = 1;
if (isset($argv[2]) && is_integer((integer)$argv[2])){
    $count = (integer)$argv[2];
}

/* CIKLUSOK

    vezérlés átadó utasítások
    ciklus magba lehet őket meghívni
    befolyásolja, hogy működjön a ciklus
    jó feltétellel külön break hívás nélkül is megszűnik a ciklusunk
        break; // megszakítja a ciklus futását
        break <n>; // <n> egy érték. több ciklus van egymásban, akkor nem csak a legbelső ciklusból, hanem egyszerre többől tudunk kilépni
        continue; // ciklus magja ne fussontovább, hanem ugorjon a kövekező elemre
        continue <n>; // ha több ciklus van egymásba ágyazva, akkor ne csak a legbelsőből ugorjon, hanem a többiből is

    számláló
        for($i = 0; $i < 10; $i++){
            <ismételt kódblokk>
        }

        for(<számláló inicializálása>; <bennmaradási feltétel>; <változás>){
            <ciklus mag>
        }

    elöltesztelő
        első futás előtt végez egy ellenőrzést
        majd a ciklusmagban gondoskodunk róla, hogy a bennmaradási feltétel addig maradjon igaz, amíg szeretnénk
        ha megváltozik a bennmaradási feltétel, akkor lépjen ki
        while(<bennmaradási feltétel>){
            <ciklus mag>
        }

    hátultesztelő
        egyszer mindenképp lefut a ciklusmag
        fejjel a falnak megy, utána nézi meg, hogy teljesül-e a feltétel
        do {
            <ciklus mag>
        } while (<feltétel>);

    foreach
        gyűjtemények (pl. tömb, lista) bejárására találták ki
        tömb elemek átírására ebben a ciklusban nincs lehetőség, mert nem az elemet érem el, hanem az értékét
        foreach(<array> as <item>){
            <ciklus mag>
        }
        bővített változata:
        foreach(<array> as <key> => <value>){
            <ciklus mag>
        }
 */

for ($i = 0; $i < $count; $i++){
    $r = rand(1, $max);
    echo ($i+1) . ". dobás: " . $r . "\n";
    if ($max <= 6) {
        if ($r == 6)
        {
            $k = " *     * ". "\n";
            $k.= " *     * ". "\n";
            $k.= " *     * ". "\n";
            echo $k;
        }
        else if ($r == 5)
        {
            $k = " *     * ". "\n";
            $k.= "    *    ". "\n";
            $k.= " *     * ". "\n";
            echo $k;
        }
        else if ($r == 4)
        {
            $k = " *     * ". "\n";
            $k.= "         ". "\n";
            $k.= " *     * ". "\n";
            echo $k;
        }
        else if ($r == 3)
        {
            $k = " *       ". "\n";
            $k.= "    *    ". "\n";
            $k.= "       * ". "\n";
            echo $k;
        }
        else if ($r == 2)
        {
            $k = " *       ". "\n";
            $k.= "         ". "\n";
            $k.= "       * ". "\n";
            echo $k;
        }
        else if ($r == 1)
        {
            $k = "         ". "\n";
            $k.= "    *    ". "\n";
            $k.= "         ". "\n";
            echo $k;
        }
    } else {
        // echo rand(1,6); // meg kell adni a legkisebb és a legnagyobb értékét
        echo ($i+1) . ". - " . rand(1,$max) . "\n"; // argumentumot használva
    }
}

// PHP_EOL; \n-ek helyett lehet használni

/*
$k = " *  * ". "\n";
$k.= " *  * ". "\n";
$k.= " *  * ". "\n";
echo $k;
*/

/* case esetek
switch ($r) {
    case 1:
        break;
    case 2:
        break;
}
*/



