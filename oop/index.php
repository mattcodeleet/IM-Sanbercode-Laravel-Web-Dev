<?php
    require_once("animal.php");
    require_once("frog.php");
    require_once("ape.php");

    $sheep = new Animal("shaun");

    echo "Name : " . $sheep->name . "<br>";
    echo "Legs : " . $sheep->legs . "<br>";
    echo "Cold Blooded : " . $sheep->cold_blood . "<br>";
    echo "------------------------<br>";

    $frog = new Frog("buluk");

    echo "Name : " . $frog->name . "<br>";
    echo "Legs : " . $frog->legs . "<br>";
    echo "Cold Blooded : " . $frog->cold_blood . "<br>";
    echo "Jump : " . $frog->jump() . "<br>";
    echo "------------------------<br>";

    $ape = new Ape("kera sakti");

    echo "Name : " . $ape->name . "<br>";
    echo "Legs : " . $ape->legs . "<br>";
    echo "Cold Blooded : " . $ape->cold_blood . "<br>";
    echo "Yell : " . $ape->yell() . "<br>";
    echo "------------------------";

    

    
?>