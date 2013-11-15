<?php
$radio=$_POST['numero1'];
$longitud=2* pi()*$radio;
$area=  pi()* pow($radio, $radio);

echo "longitud de la circuferencia ->".$longitud."<br>";
echo "Area de la circuferencia ->".$area;


?>
