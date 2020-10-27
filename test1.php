<?php

$x ="d";
$y;
$z;

$y=($x=='a'|| $x=='e'||$x=='i'||$x=='o'||$x=='u' );

$z=($x=='A'|| $x=='E'|| $x=='I'|| $x=='O'|| $x=='U' );

if($y || $z){
    echo "$x vowel";
} else 
    echo "$y  consonant";



?>