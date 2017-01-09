<?php 
function number ($a=2,$b=4){
	
if($a>$b){
	echo 'Le premier nombre est plus grand';
}
if ($a<$b){
echo 'Le premier nombre est plus petit';
}
if ($a===$b){
	echo 'Les deux nombres sont identiques';
}
 }
 echo number();
?>