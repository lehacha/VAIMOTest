<?php 
	class Elevator{
		private $floor;
		private $task;
		private $engine;
		
		public function __construct($floor) { //constructor
			$this->engine = new Engine();
			if($floor > 0 && $floor < 25){
				$this->floor = $floor;
			}
			else{
				$this->floor = 1;
				echo "Incorect elevator floor!<br>";
			}
		}
		
		public function set_new_task($floor){ //set new task for elevator
			$this->task = $floor;
			$this->move();
		}
		
		public function get_lift_floor(){ // get method to take elevator floor
			return $this->floor;
		}
		
		private function move(){ // move method
			echo "Task for elevator: move to $this->task <br>";
			if($this->task >= $this->floor){ //elevator moving up
				while($this->floor != $this->task){
					$this->floor = $this->engine->move_up($this->floor);
				}
			}
			else{
				while($this->floor != $this->task){ //elevator moving down
					$this->floor = $this->engine->move_down($this->floor);
				}
			}
			echo "Done! Elevator is on " . $this->floor . " floor now<br>";
		}	
	}
?>