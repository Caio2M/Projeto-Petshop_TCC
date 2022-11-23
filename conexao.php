<?php

$host = "144.22.145.159" ;
$user = "emporiopet";
$pass = "emporiopet2022";
$base = "EMPORIOPET";


$mysqli = new mysqli($host, $user, $pass, $base);

if($mysqli->connect_errno)

{
    echo "Erro";
}
else
{

}
?>
