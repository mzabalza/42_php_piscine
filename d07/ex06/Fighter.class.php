<?php

	abstract class Fighter {

		public $type;

		public function __construct($newFighter) {
			$this->type = $newFighter;

		}
		abstract public function fight($opponent);

		public function __toString() {
			return ($this->type);
		}
	}

?>