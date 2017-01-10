<?php 

function user($age,$genre){

	if ($genre==="homme" && $age>18){
		echo "Vous êtes un homme et vous êtes majeur";
	}
	if ($genre==="homme" && $age<18){
		echo "Vous êtes un homme et vous êtes mineur";
	}

	if ($genre==="femme" && $age>18){
		echo "Vous êtes une femme et vous êtes majeur";
	}
	if ($genre==="femme" && $age<18){
		echo "Vous êtes une femme et vous êtes mineur";
	}
	

	
}

user(33,homme);

user(11,homme);

user(23,femme);

user(11,femme);
?>