<?php 
    if ($_SERVER['HTTP_HOST'] === 'gene.adolph.io' || $_SERVER['HTTP_HOST'] === 'www.gene.adolph.io') {
        include('./gene.php');
    }elseif ($_SERVER['HTTP_HOST'] === 'julie.adolph.io' || $_SERVER['HTTP_HOST'] === 'www.julie.adolph.io') {
        include('./julie.php');
    }elseif ($_SERVER['HTTP_HOST'] === 'regan.adolph.io' || $_SERVER['HTTP_HOST'] === 'www.regan.adolph.io') {
        include('./regan.php');
    }elseif ($_SERVER['HTTP_HOST'] === 'wesley.adolph.io' || $_SERVER['HTTP_HOST'] === 'www.wesley.adolph.io') {
        include('./wesley.php');
    }else {
        include('./adolph.php');
    }
?>