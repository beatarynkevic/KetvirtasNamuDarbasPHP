<?php
$masyvas =[];
$masyvas['knygos'] = '2knygos';
$masyvas['zurnalai'] = 'seni zurnalai';
$masyvas[''] = 'kates zaislai';
$masyvas[5]= 'knyga';
echo '<pre>';
echo var_dump($masyvas);
echo '</pre>';


$masyvas2 = [
    'mano knygos',
    'zurnalai' => 'seni zurnalai',
    'zaislai' => 'kates zaislai',
    'mano batai'
];

echo '<pre>';
foreach($masyvas2 as $index => $value) {
    if('seni zurnalai' == $value) {
        $masyvas2[$index] = 'Dar daugiau kates zaislu';
    }
}


// // echo '<pre>';
// // print_r($masyvas2);

// $masyvas3['kojines']['zalios'] = 'tik zalios kojines';
// $masyvas3['kojines']['juodos'] = 'tik juodos kojines';
// $masyvas3['kojines']['baltos'] = 'tik baltos kojines';
// print_r($masyvas3);


// // foreach($masyvas as $index => $value) {
// //     echo '<br>';
// //     echo $index . ' => ' . $value;
// // }
// // echo '<br>';
// // foreach(range('A', 'K') as $value) {
// //     echo '<br>';
// //     echo $value;
// // }

// // echo '<br>';
// // $m = range(1, 5);
// // shuffle($m);
// // print_r($m);

// // echo '<br>';
// // echo current($m);
// // echo '<br>';
// // echo next($m);
// // echo '<br>';
// // echo current($m);

// $m = ['red', 'green', 'yellow', 'blue'];
// // $A = 5;
// // $B = &$A; //& variable is passed by reference(nuoroda) (and not by value) !!!
// // $A = 17;

// // echo '<br>';
// // echo $B;

// foreach($m as &$value) {}

// unset($value);

// //priskyrimas pagal reference and value

// foreach($m as $value){
//     echo '<br>';
//     echo $value;
// }
// // echo '<br>';
// // echo current($m);



// for ($i = 1;$i <= 15;$i++){
//     if (rand(0, 10)> 9){
//         break;
//     }
//     echo $i;
//     echo '<br>';
//   }
//   echo 'Ciklo pabaiga <br>';


//   $i = 0;
// for ($i = 0;$i <= 5;$i++){
//    if ($i==2){
//        continue;
//    }
//    echo $i;
//    echo '<br>';
// }
// echo 'Ciklo pabaiga';



// //budai pakeisti kintamaji
$fruits=['banana', 'apple', 'orange', 'peach'];
foreach($fruits as $value) {
    echo $value . '<br>';
}
echo '<pre>';
print_r($fruits);
echo '</pre>';

$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $index => $value) {
   echo 'Indeksas: ' . $index . ' Reikšmė: ' . $value . '<br>';
}


$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
$mode = next($transport);    // $mode = 'bike';
$mode = current($transport); // $mode = 'bike';
$mode = prev($transport);    // $mode = 'foot';
$mode = end($transport);     // $mode = 'plane';
$mode = current($transport); // $mode = 'plane';
?>