<?php

$n=100;


for( $i=1; $i<=100; $i++)

{
    if($i%3==0 && $i%5==0){
        echo "<p style='color:blue';> $i. Hello World </p>";
    }
    elseif($i%3==0){
echo "<p style='color:green';> $i. Hello World </p>";


    }
    elseif($i%5==0){
        echo "<p style='color:red';> $i. Hello World </p>";   
    }  else{
        echo "<p style='color:yellow';> $i. Hello World </p>"; 
    }
}



?>