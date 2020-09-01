<?php 
	include('person.php');
	include('interface.php');
	include('elevator.php');
	include('engine.php');
	
	
	$elevator = new Elevator(7);
	$interface = new Elevator_GUI($elevator);
	
	$person1 = new Person(8);
	echo "--Test 1--<br>Person1 on " . $person1->get_floor() ." <br>";
	$person1->move_to($interface, 1);
	
	$person2 = new Person(3);
	echo "--Test 2--<br>Person2 on " . $person2->get_floor() ." floor<br>";
	$person2->move_to($interface, 1);
	
?>

