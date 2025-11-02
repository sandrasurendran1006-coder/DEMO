<?php

function saygreet($name){

    echo"hai,$name! . <br>";

   
showage(19);


}
saygreet("sandra");



function showage($age){
    echo"your age is,$age . <br>";

}
showage(19);

function sum($a,$b){
    $tot = $a+$b;
    echo "sum is $tot . <br>";
   
}
sum(1,2);

function sub($a,$b){
    $diff = $a-$b;
    $mul = $a*$b;
    $div = $a/$b;
    $mod = $a%$b;
    echo"fifference is $diff . <br>";
   echo"multiplication of numbers  is $mul . <br>";
    echo"division of numbers is $div . <br>";
    echo"modulus of numbers is $mod.<br>";
}
sub(45,67);


function add($a,$b){
    return$a+$b;
}
$result = add(7,4);
echo
?>