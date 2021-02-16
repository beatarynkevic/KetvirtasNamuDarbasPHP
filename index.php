<h2>-----1-----</h2>
<!-- Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra
atsitiktiniai skaičiai nuo 5 iki 25. -->
<?php
$masyvas = range(0, 29);
foreach($masyvas as $index => $value) {
    $masyvas[$index] = rand(5, 25);
}

echo '<pre>';
print_r($masyvas);
echo '</pre>';
?>
<h2>-----2-----</h2>
<!-- Naudodamiesi 1 uždavinio masyvu:
a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
b) Raskite didžiausią masyvo reikšmę;
c) Suskaičiuokite visų reikšmių sumą;
d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
g) Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą; -->
<?php




?>
<h2>-----3-----</h2>
<!-- Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės. -->
<?php


?>
<h2>-----4-----</h2>
<!-- Išrūšiuokite 3 uždavinio masyvą pagal abecėlę. -->
<?php


?>
<h2>-----5-----</h2>
<!-- Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes.
Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote. -->

<?php


?>
<h2>-----6-----</h2>
<!-- Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100.
Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis). -->

<?php


?>
<h2>-----7-----</h2>
<!-- Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve. -->

<?php


?>
<h2>-----8-----</h2>
<!-- Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose. -->

<?php


?>
<h2>-----9-----</h2>
<!-- Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo. -->

<?php


?>
<h2>-----10-----</h2>
<!-- Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25.
Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t. -->

<?php


?>
<h2>-----11-----</h2>
<!-- Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra ne unikalios pergeneruokite
iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje,
o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas
(neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite.
(Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30) -->

<?php

?>