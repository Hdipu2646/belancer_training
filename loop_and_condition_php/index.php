<?php
/*
$a = 51;
$b = 555;

if($a > $b) {
	echo "Big Number: ".$a;
}
elseif($b > $a) {
	echo "Big Number: ". $b;
}
else {
	echo "The are equal.";
}
*/
//LOOP

for($i = 1; $i <= 4; $i++) {
	for($j = 1; $j <= $i; $j++) {
	echo "*";	
	}
	echo "<br>";
}



//Condition
/*
$a = 5;
$b = 5;
$c = 5;
*/
/*
if($a>$b){
	//a greater than b
	if($a>$c){
		//a greater than c
		echo $a;
	}
	else{
		//c greater than a
		echo $c;
	}
}
elseif($b>$a){
	//b greater than a
	if($b>$c){
		//b greater than c
		echo $b;
	}
	else{
		//c greater than b
		echo $c;
	}
}
else{
	echo "All are equal";
}
*/
/*
&& => AND
|| => OR
*/
/*
if($a>$b && $a>$c){
	echo $a;
}
elseif($b>$a && $b>$c){
	echo $b;
}
elseif($c>$a && $c>$b){
	echo $c;
}
else{
	echo "All are equal";
}
*/
/*
$userName = "ninjarasel";
$password = "123456";
if($userName == "ninjarasel" && $password == "123456"){
	echo $userName. " Welcome...";
}
else{
	echo "Invalid User";
}
*/

?>