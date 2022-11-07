<?php
			$lista = array(20,41,99,6,10);
			$n = $_GET["n"];
			echo maximo ($lista, $n);
			function maximo ($lista, $n) {
				if($n==1){
					return $lista[0];
				}
				return max($lista[$n-1], maximo($lista, $n-1)); 
			}
		?>
