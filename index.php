<h2>-----1-----</h2>
<!-- Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra
atsitiktiniai skaičiai nuo 5 iki 25. -->
<?php
//destytojo sprendimas
// $mas = [];
// foreach(range(1, 30) as $val) {
//     $mas[] = rand(5, 25);
// }
// echo '<pre>';
// print_r($mas);



$masyvas = range(0, 29);
$count = 0;             //2.a
$visuReiksmiuSuma = 0;      //2.c
foreach($masyvas as $index => $value) {
    $masyvas[$index] = rand(5, 25);
    if($masyvas[$index] > 10) {                 //2.a
        $count++;
        $visuReiksmiuSuma += $masyvas[$index];  //2.c
    }
}

echo '<pre>';
print_r($masyvas);
//  _dc($masyvas);
//  _d('fffff');
echo '</pre>';
echo '<h2>-----2-----</h2>';
echo 'a) Reiksmiu didesniu uz 10 yra: ' . $count; 

// Naudodamiesi 1 uždavinio masyvu:
// a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// b) Raskite didžiausią masyvo reikšmę;
// c) Suskaičiuokite visų reikšmių sumą;
// d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g) Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

echo '<br>';
echo 'b) Didziausia masyvo reiksme yra: '. max($masyvas) . '<br>';  //2.b
echo 'c) Visu reiksmiu suma yra: ' . $visuReiksmiuSuma . '<br>';

$newArray =[];                              //2.d
for($i = 0; $i < count($masyvas); $i++) {
    array_push($newArray, ($masyvas[$i] - $i));
}


$papildomaiElementu = 10;

for($i = 0; $i < $papildomaiElementu; $i++) {       //2.e
    $reiksmes = rand(5, 25);
    array_push($newArray, $reiksmes);
}
echo 'd), e) :';
echo '<pre>';
print_r($newArray);

echo '<br> Poriniu indeksu reiksmiu masyvas: <br>';
$oddArray = [];
$evenArray = [];
foreach($newArray as $i => $v) {
    if($i % 2 === 0) {
        array_push($evenArray, $newArray[$i]);
    } else {
        array_push($oddArray, $newArray[$i]);
    }
}


echo '<pre>';
print_r($evenArray);
echo '<br> Neporiniu indeksu reiksmiu masyvas: <br>';
echo '<pre>';
print_r($oddArray);

$c = 0;
foreach($evenArray as $i => $v) {
    if ($v > 15) {
        $evenArray[$i] = 0;
    } 
}
echo '<pre>';
echo "g) 0 jeigu jie didesni už 15: <br>";
print_r($evenArray);

echo "h) Pirmas maziausias indeksas, kurio elemento reiksme daugiau nei 10: ";
foreach($evenArray as $i => $v) {
    if($v > 10) {
        print_r($i);
        break;
    }
}
echo '<pre>';

echo "i) ";
foreach ($masyvas as $index => $value) {
    if ($index % 2 === 0) {
       unset($masyvas[$index]);             //If you want to delete an element from an array 
    }
}
echo 'Array without even elements: <pre>';
print_r($masyvas);
echo '</pre>';

?>

<h2>-----3-----</h2>
<!-- Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės. -->
<?php

$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;
$array = range(0, 200);
foreach($array as $i => $v) {
    $skaicius = rand(65, 68);
    $raide = chr($skaicius);
    $array[$i] = $raide;
    if($raide === 'A') {
        $countA++;
    } else if ($raide === 'B') {
        $countB++;
    } else if ($raide === 'C') {
        $countC++;
    } else {
        $countD++;
    }
}
echo '<pre>';
print_r($array);
echo "A raidziu yra: $countA, B raidziu yra: $countB, C raidziu yra: $countC, D raidziu yra: $countD";
?>
<h2>-----4-----</h2>
<!-- Išrūšiuokite 3 uždavinio masyvą pagal abecėlę. -->
<?php
sort($array);
echo '<pre>';
print_r($array);
?>
<h2>-----5-----</h2>
<!-- Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes.
Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote. -->

<?php
$mergedArray = [];
for($i = 0; $i <= 200; $i++) {
    $skaicius = rand(65, 68);
    $raide = chr($skaicius);
    $array1[$i] = $raide;
}
for($i = 0; $i <= 200; $i++) {
    $skaicius = rand(65, 68);
    $raide = chr($skaicius);
    $array2[$i] = $raide;
}
for($i = 0; $i <= 200; $i++) {
    $skaicius = rand(65, 68);
    $raide = chr($skaicius);
    $array3[$i] = $raide;
}

for($i = 0; $i <= 200; $i++) {
    $mergedArray[$i] = $array1[$i].$array2[$i].$array[$i];
}
echo '<pre>';
print_r($mergedArray);

//kiek unikaliu ?

$unikalus = [];
foreach($mergedArray as $value) {
    if(!in_array($value,$unikalus)) { //jeigu nera vertes naujame masyve
        array_push($unikalus, $value);
    }
}
echo '<br>';
echo 'Kiek unikaliu??' . '<br>';
echo count($unikalus);

// echo '<br>' . 'kitoks variantas' . '<br>';
// $ABCZ = 'ABCZ';

// for ($i = 0; $i < 200; $i++) {
//     $randomABCD1[] = $ABCZ[rand(0,3)];
//     $randomABCD2[] = $ABCZ[rand(0,3)];
//     $randomABCD3[] = $ABCZ[rand(0,3)];
// }

// foreach($randomABCD1 as $key => $val) {
//     $bendrasMasyvas[] = $val.$randomABCD2[$key].$randomABCD3[$key];
// }
//lauztiniai skliaustai, curly braces
// _dc($bendrasMasyvas);
// $unikalios = [];
// $po1kart = [];

// foreach($bendrasMasyvas as $val) {
//     if(!in_array($val, $unikalios)) {
//         $unikalios[] = $val;
//     }
// }

// foreach($bendrasMasyvas as $key => $val) {
//     unset($bendrasMasyvas[$key]);
//     if(!in_array($val, $bendrasMasyvas)) {
//         $po1kart[] = $val;
//     }
//     $bendrasMasyvas[$key] = $val;
// }
// //print kiek unikaliu reiksmiu
// _dc(count($unikalios));

?>

<h2>-----6-----</h2>
<!-- Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100.
Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis). -->

<?php

$array6B = [];
$array6A= [];

while(count($array6A) < 101)
{
    $randomNum = rand(100, 999);
    if(!in_array($randomNum, $array6A)) {
        array_push($array6A, $randomNum);
    }
}
while(count($array6B) < 101)
{
    $randomNum = rand(100, 999);
    if(!in_array($randomNum, $array6B)) {
        array_push($array6B, $randomNum);
    }
}

echo '<pre>';
print_r($array6A);
print_r($array6B);
?>
<h2>-----7-----</h2>
<!-- Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve. -->

<?php
$arrayUnique = [];
$arrayEqual = [];
for ($i = 0; $i < count($array6A); $i++) {
    in_array($array6A[$i], $array6B) ? array_push($arrayEqual, $array6A[$i]) : array_push($arrayUnique, $array6A[$i]);
}

echo '<pre>';
print_r($arrayUnique);
?>
<h2>-----8-----</h2>
<!-- Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose. -->

<?php
echo '<pre>';
print_r($arrayEqual);
?>
<h2>-----9-----</h2>
<!-- Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo. -->

<?php
$array9 = [];
for($i = 0; $i < count($array6A); $i++) {
    $array9[$array6A[$i]] = $array6B[$i];
}
echo '<pre>';
print_r($array9);
?>
<h2>-----10-----</h2>
<!-- Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25.
Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t. -->

<?php
$array10 =[];
for($i = 0; $i < 10; $i++) {
    if(($i === 0) || ($i === 1)) {
        $array10[$i] = rand(5, 25);
    } else {
        array_push($array10, ($array10[$i-1] + $array10[$i-2]) );
    }  
}
echo '<pre>';
print_r($array10);
?>
<h2>-----11-----</h2>
<!-- Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra ne unikalios pergeneruokite
iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje,
o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas
(neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite.
(Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30) -->
<?php
$m11= [];
while(count($m11) < 102)
{
    $rand = rand(0, 300);
    if(!in_array($rand, $m11)) {
        array_push($m11, $rand);
    }
}
for($i = 51; $i >= 0; $i--) {
    for($j = 50; $j >= 0; $j--) {
        if($m11[$i] > $m11[$j]) 
        {
            $laikinas =$m11[$i];
            $m11[$i] = $m11[$j];
            $m11[$j] = $laikinas;
        }
    }
}
for($i = 50; $i < count($m11); $i++) {
    for($j = $i + 1; $j < count($m11); $j++) {
        if($m11[$i] < $m11[$j]) 
        {
            $laikinas =$m11[$i];
            $m11[$i] = $m11[$j];
            $m11[$j] = $laikinas;
        }
    }
}
echo '<pre>';
print_r($m11);






// print_r(array_search(max($m11), $m11));
// $b = [1, 5, 8, 9, 4, 2, 3];
// arsort($b);
// echo '<pre>';
// print_r($b);
?>