<?php
			$n =$_GET["n"];
			echo fatorial ($n);
			function fatorial ($n) {
				if($n==0){
					return 1;
				}
				return $n*fatorial($n-1);
			}
		?>
