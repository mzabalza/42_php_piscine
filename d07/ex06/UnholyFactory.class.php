<?php

include_once('Fighter.class.php');

	class UnholyFactory {

		private $_absorbed = array();

		public function __construct() {
			$this->_absorbed = array();
		}

		public function absorb($fighter) {
			if ($fighter instanceof Fighter) {
				if (in_array($fighter, $this->_absorbed))
					echo "(Factory already absorbed a fighter of type ".$fighter. ")". PHP_EOL;
				else 
					array_push($this->_absorbed, $fighter);
					echo "(Factory absorbed a fighter of type ".$fighter. ")". PHP_EOL;
			}
			else
				echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
		}

		public function fabricate($newFighter) {
			foreach ($this->_absorbed as $fighter) {
				if ($fighter->type === $newFighter) {
					print( "(Factory fabricates a fighter of type " . $fighter
						   . ")" . PHP_EOL );
					return clone $fighter;
				}
			}
			echo "(Factory hasn't absorbed any fighter of type ".$fighter. ")". PHP_EOL;
			return (NULL);
		}
	}
?>