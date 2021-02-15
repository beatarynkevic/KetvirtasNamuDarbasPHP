<?php
//Example #2 Type Casting and Overwriting example
//reiksmes visos vienodos, nors is pradziu ir skirtingu tipu !!!
$array = array(
    1    => "a", //int
    "1"  => "b", //nors string bet bus interpretuojamas kaip int
    1.5  => "c", //also cast to ints, suapvalinamas
    true => "d", //true> 1, false>0
);
var_dump($array);
echo '<pre>';
print_r($array);

//As all the keys in the above example are cast to 1, the value will be overwritten on
// every new element and the last assigned value "d" is the only one left over.

//Example #5 Keys not on all elements
echo '<pre>';
$array = array(
    "a",
    "b",
6 => "c",
    "d",
);
print_r($array);
echo '<br>';
?>

//Array elements can be accessed using the array[key] syntax.
//Example #6 Accessing array elements

<?php
$array = [
    "foo" => "bar",
    42    => 24,
    "multi" => [
         "dimensional" => [
             "array" => "foo"
        ]
    ]
];

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>