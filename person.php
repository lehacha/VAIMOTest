<?php 
	class Person{ 
		private $floor;
		
		public function __construct($floor) { //constructor
			if($floor > 0 && $floor < 25){
				$this->floor = $floor;
			}
			else{
				$this->floor = 1;
				echo "Incorect person floor!<br>";
			}
		}
		public function move_to(Elevator_Interface $interface, $end_floor){ // method move for person
			$interface->press_start_button($this->floor);
			if($end_floor > 0 && $end_floor < 25){
				$interface->press_button($end_floor);
			}
			else{
				echo "Incorect end floor!<br>";
			}
			
		}	
		public function get_floor(){ // get method to take person floor
			return $this->floor;
		}
	}
?>