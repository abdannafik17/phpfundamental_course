<?php
	//function dengan echo
	function writeMessage() {
        echo "You are really a nice person, Have a nice time!";
 	}
 	//function dengan return & parameter
 	function penjumlahan($x, $y) {
 		return $x + $y;
    } 
    //function dengan return & default value
 	function pengurangan($x = 10, $y = 2) {
 		return $x - $y;
    } 

 	/* Calling a PHP Function */
 	writeMessage();
 	echo '<br/>'.penjumlahan(1,2);
 	echo '<br/>'.pengurangan();
 	echo '<br/>'.pengurangan(50,8);
 	

?>