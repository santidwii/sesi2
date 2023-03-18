<?php 
//area script PHP
    $pg = 1; 
    if(isset($_GET["pg"])){
    $pg = $_GET["pg"];
    }
    switch($pg){
        case 1:
            $konten="<h3>page 1</h3>";
            $judulpage = "page 1";
            break;
        case 2:
            $konten="<h3>page 2</h3>";
            $judulpage = "page 2";
            break;
        case 3:
            $konten="<h3>page 2</h3>";
            $judulpage = "page 2";
            break;
        default:
            $konten="<h3>page 1</h3>";
            $judulpage = "page 1";
            break;
    }

    $judulpage ="latihan 02";
    $konten="<h3>babyy slayyy</h3>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage?></title>
</head>
<body>
<ul class="nav">
    <li class="nav-item"><a href="?pg=1">page 1</a></li>
    <li class="nav-item"><a href="?pg=2">page 2</a></li>
    <li class="nav-item"><a href="?pg=3">page 3</a></li>
</ul>
    <?=$konten;?>
</body>
</html>