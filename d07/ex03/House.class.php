<?php

	abstract class House {

		abstract public function getHouseName();
		abstract public function getHouseMotto();
		abstract public function getHouseSeat();

		public function introduce() {
			echo sprintf('House %s of %s : "%s" '.PHP_EOL,
			$this->getHouseName(), $this->getHouseSeat(), $this->getHouseMotto());
		}
	}

?>