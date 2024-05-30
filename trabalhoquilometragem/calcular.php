<?php
$km = $_POST['km'];
$litro = $_POST['litro'];
$limpar = $_POST['limpar'];
$res = $km / $litro;

echo" Seu Carro Gasta ".$res." Litros Por KM";

?>