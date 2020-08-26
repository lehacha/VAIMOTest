<?php 
	abstract class Move{ //move abstract class
		abstract protected function move_up($floor);
		abstract protected function move_down($floor);
	}
	
	class Engine extends Move{ //engine class
		public function move_up($floor){
			return ++$floor;
		}
		public function move_down($floor){
			return --$floor;
		}
	}
	
?>