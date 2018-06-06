<?php

	interface IFighter {

		function fight($name) {
		}

		function recruit($name) {
			this->fight($name);
		}
	}
?>