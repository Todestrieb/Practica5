?> <?php 

$filas = 10; 
$columnas = 10; 
$numero = 1;

?> 

<table border="1"> 
<?php 
for($x=0;$x<$filas;$x++)
{ 
if($c==1){ $color='#88BBBB'; $c=2;
} 
else { 
$color='#FFFFBC'; $c=1;
} 
echo "<tr bgcolor=$color>"; 
for($y=0;$y<$columnas;$y++)
{ 
echo "<td>".$numero."</td>"; 
$numero++; 
} 
echo "</tr>";
}
 
?> 
</table>
<?php
