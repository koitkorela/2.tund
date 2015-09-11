<?php
	$first_name = "Koit" ;
	$last_name = "Korela";
	
	echo $first_name." ".$last_name ;
?>

<?php
	$age = 19;
	
	// kui on väiksem kui 18
	if ($age<18) { 
		echo "alaealine";
		} 
	else {
		echo "täisealine";
	}
?>


<?php
// kordus kuni i on väiksem kui age
	for($i=0; $i< $age; $i = $i + 1) {
		echo "palju " ;
	}
	echo "õnne";
?>

<br>

<?php
	echo(date("l, j.m.Y"))
?>