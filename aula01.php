<?php
/*

Teste de utilização de variáveis por referências em php

*/
$x = 20;
$y = &$x;

function testingInPointers($h){
    if($h%2==0){
        $a = 30;
        $b = &$a;
        echo $a."<br>";
        echo $b."<br>";
    }else{
        echo"pause";
    }
}
echo testingInPointers(3);
echo '<br>';
echo testingInPointers(2);
echo '<br>';
echo testingInPointers(4);
echo '<br>';
?>