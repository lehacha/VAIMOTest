<?php 
	interface Move{ //move abstract class
		public function move_up($floor);
		public function move_down($floor);
	}
	
	class Engine implements  Move{ //engine class
		public function move_up($floor){
			return ++$floor;
		}
		public function move_down($floor){
			return --$floor;
		}
	}
	
?>