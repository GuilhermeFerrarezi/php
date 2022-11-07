<?php
			$i = $_GET["i"];
			echo func ($i);
			function func ($a) {
				if($a < 2){
					return 1;
				}
				return ($a-1) * func($a-1);
			}
		?>
