<h2>-----1-----</h2>
<!-- Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25. -->
<?php

$mas = [];
foreach(range(1, 10) as $index1 => $val1) {
    foreach(range(1, 5) as $index2 => $val2) {
        $mas[$index1][$index2] = rand(5, 25);
    }
}

$counter = 0;
foreach($mas as $mazas_masyvas) {
    foreach($mazas_masyvas as $reiksmes) {
        if(10 < $reiksmes) {
            $counter++;
        }
    } 
}
_d($counter);
_d($mas);

usort($mas, function($a, $b) {
    return $a[1] <=> $b[0];
});
_dc($mas);

?>
<h2>-----2-----</h2>
<!-- Naudodamiesi 1 uždavinio masyvu:
a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
b) Raskite didžiausio elemento reikšmę;
c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
d) Visus masyvus “pailginkite” iki 7 elementų
e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai  -->
<?php


?>
<h2>-----3-----</h2>
<h2>-----4-----</h2>
<h2>-----5-----</h2>
<h2>-----6-----</h2>
<h2>-----7-----</h2>
<h2>-----8-----</h2>
<h2>-----9-----</h2>
<h2>-----10-----</h2>
<h2>-----11-----</h2>
