<?php

  if($_POST)
	{	
		$num1= $_POST
		['numero1'];
		 
	}
        if ($num1 <100 && $num1 >9)
        {
            $d1=$num1 %10;
            $num1=$num1/10;
            $d2=$num1 %10;
            if ($d1%2==0 && $d2%2==0){
                echo ("el promedio de los digitos de:".$num1."es:".(($d1+$d2)/2));
        }}
?>
