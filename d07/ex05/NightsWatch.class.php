<?php

	class NightsWatch {

		private $_attack = array();

		public function __construct() {
			$this->_attack = array();
		}

		public function fight() {
			foreach ($this->_attack as $name)
				$name->fight();
		}
		
		public function recruit($name) {
			if ($name instanceof IFighter)
				array_push($this->_attack, $name);
		}

	}
?>