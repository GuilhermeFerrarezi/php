<?php
			$lista = array(0,1,2,3,4);
			$n = $_GET["n"];
			echo soma ($lista, $n);
			function soma ($lista, $n) {
				if($n==1){
					return $lista[0];
				}else{
				return soma ($lista,$n-1)+$lista[$n-1];
				}
			}
		?>
