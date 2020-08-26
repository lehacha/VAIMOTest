<?php 
	class Elevator_Interface{ //Elevator Interface class
		private $elevator;
		
		public function __construct($elevator) { //constructor
			$this->elevator = $elevator;
		}
		
		public function press_start_button($floor){
			echo "Elevator on " . $this->elevator->get_lift_floor() ." floor<br>";
			$this->elevator->set_new_task($floor); //elevator moving to person
			echo "Take the person<br>";
		}
		
		public function press_button($floor){
			$this->elevator->set_new_task($floor); //elevator moving to end point(floor)
		}
	}
?>