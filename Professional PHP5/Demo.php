<?php
  
  class Demo {
	  
    private $_name;
		
		public function sayHello() {
			print "Hello {$this->getName()}\n";
		}
		
		public function getName() {
			return $this->_name;
		}
		
		public function setName($name) {
			if(! is_string($name) || strlen($name) == 0) {
				throw new Exception("Invalid name value");
			}
		
			$this->_name = $name;
		}
	}
  
?>