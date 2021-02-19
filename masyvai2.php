<h2>-----1-----</h2>
<!-- Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25. -->
<?php

$mas = [];
foreach(range(1, 10) as $index1 => $val1) {
    foreach(range(1, 5) as $index2 => $val2) {
        $mas[$index1][$index2] = rand(5, 25);
    }
}

$counter = 0;                               //2.a
$largest = 0;
foreach($mas as $mazas_masyvas) {
    foreach($mazas_masyvas as $reiksmes) {
        if(10 < $reiksmes) {
            $counter++;
        }
        if( $reiksmes >= $largest) { //2b
            $largest = $reiksmes;
        }
    } 
}
echo "Elementu didesniu uz 10 yra: $counter <br>";
// _d($counter);
// _d($mas);
// _dc($mas);
// usort($mas, function($a, $b) { 
//     return $a[0] <=> $b[0]; //pagal mazojo masyvo indeksa
// });
 _dc($mas);

?>
<h2>-----2-----</h2>
<!-- Naudodamiesi 1 uždavinio masyvu:
a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
b) Raskite didžiausio elemento reikšmę;
c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
d) Visus masyvus “pailginkite” iki 7 elementų
e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą.
T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai  -->
<?php
echo 'b) Didziausio elemento reiksme: ' . $largest;    //2b

$vienoduIndeksuSuma0 = 0;
$vienoduIndeksuSuma1 = 0;
$vienoduIndeksuSuma2 = 0;
$vienoduIndeksuSuma3 = 0;
$vienoduIndeksuSuma4 = 0;

for($i = 0; $i < count($mas); $i++) {
    for ($j = 0; $j < count($mas[$i]); $j++) {
        if ($j === 0) {
            $vienoduIndeksuSuma0 += $mas[$i][$j];
        }
    }
}
for($i = 0; $i < count($mas); $i++) {
    for ($j = 0; $j < count($mas[$i]); $j++) {
        if ($j === 1) {
            $vienoduIndeksuSuma1 += $mas[$i][$j];
        }
    }
}
for($i = 0; $i < count($mas); $i++) {
    for ($j = 0; $j < count($mas[$i]); $j++) {
        if ($j === 2) {
            $vienoduIndeksuSuma2 += $mas[$i][$j];
        }
    }
}
for($i = 0; $i < count($mas); $i++) {
    for ($j = 0; $j < count($mas[$i]); $j++) {
        if ($j === 3) {
            $vienoduIndeksuSuma3 += $mas[$i][$j];
        }
    }
}
for($i = 0; $i < count($mas); $i++) {
    for ($j = 0; $j < count($mas[$i]); $j++) {
        if ($j === 4) {
            $vienoduIndeksuSuma4 += $mas[$i][$j];
        }
    }
}
echo "<br><br> c):<br> 0 indeksu suma: $vienoduIndeksuSuma0";
echo "<br> 1 indeksu suma: $vienoduIndeksuSuma1";
echo "<br> 2 indeksu suma: $vienoduIndeksuSuma2";
echo "<br> 3 indeksu suma: $vienoduIndeksuSuma3";
echo "<br> 4 indeksu suma: $vienoduIndeksuSuma4";

for($i = 0; $i < count($mas); $i++ ){       //2d
    for($j = 0; $j < 7; $j++) {
        if(count($mas[$i]) < 7) {
            $mas[$i][] = rand(5, 25);
        }
    }
}

echo '<br><br> d) :';
echo '<pre>';
print_r($mas);



echo '<br> e)Masyvas is masyvo elementu sumos: <br>';            //2e
$nulinisMas = 0;
$pirmasMas = 0;
$antrasMas = 0;
$treciasMas = 0;
$ketvirtasMas = 0;
$penktasMas = 0;
$sestasMas = 0;
$septMas = 0;
$astMas = 0;
$devMas = 0;

for($i=0; $i < count($mas); $i++) {
    for($j = 0; $j < count($mas[$i]); $j++) {
        if($i === 0) {
            $nulinisMas += $mas[$i][$j];
        } else if($i === 1) {
            $pirmasMas += $mas[$i][$j];
        } else if($i === 2) {
            $antrasMas += $mas[$i][$j];
        } else if($i === 3) {
           $treciasMas += $mas[$i][$j];
        } else if($i === 4) {
           $ketvirtasMas += $mas[$i][$j];
        } else if($i === 5) {
            $penktasMas += $mas[$i][$j];
        } else if($i === 6){
            $sestasMas += $mas[$i][$j];
        } else if($i === 7){
            $septMas += $mas[$i][$j];
        } else if($i === 8){
            $astMas += $mas[$i][$j];
        } else {
            $devMas += $mas[$i][$j];
        }
    }
}

$masyvasReiksmiuSuma =[$nulinisMas, $pirmasMas, $antrasMas, $treciasMas, $ketvirtasMas, $penktasMas, $sestasMas, $septMas, $astMas, $devMas];
print_r($masyvasReiksmiuSuma);
?>
<h2>-----3-----</h2>
<?php

?>
<h2>-----4-----</h2>
<h2>-----5-----</h2>
<h2>-----6-----</h2>
<h2>-----7-----</h2>
<h2>-----8-----</h2>
<h2>-----9-----</h2>
<h2>-----10-----</h2>
<h2>-----11-----</h2>
