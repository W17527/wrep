<?php
					class Calculadora{
						private $numero1;
						private $numero2;

						public function soma($n1, $n2){
							$this->numero1 = $n1;
							$this->numero2 = $n2;

								if($this->numero1 != NULL){

									if($this->numero2 != NULL){
										$resultado = $this->numero1 + $this->numero2;
						
										print("<div class='bkgblk'><br><h4>Números $this->numero1 e $this->numero2</h4><br>");
										print("O resultado da soma é: $resultado.<br>");
									}else{
										echo 'Preencha o segundo campo!<br><br>';
									}
								}else{
									echo 'Preencha primeiro campo!<br><br>';
								}	

								return $resultado;
							}
							public function subtracao($n1, $n2){
								$this->numero1 = $n1;
							$this->numero2 = $n2;

								if($this->numero1 != NULL){

									if($this->numero2 != NULL){
										$resultado = $this->numero1 - $this->numero2;
						
										print("<div class='bkgblk'><br><h4>Números $this->numero1 e $this->numero2</h4><br>");
										print("O resultado da subtração é: $resultado.<br>");
									}else{
										echo 'Preencha o segundo campo!<br><br>';
									}
								}else{
									echo 'Preencha primeiro campo!<br><br>';
								}	

								return $resultado;
						}
						public function multiplicacao($n1, $n2){
							$this->numero1 = $n1;
							$this->numero2 = $n2;

								if($this->numero1 != NULL){

									if($this->numero2 != NULL){
										$resultado = $this->numero1 * $this->numero2;
						
										print("<div class='bkgblk'><br><h4>Números $this->numero1 e $this->numero2</h4><br>");
										print("O resultado da multiplicação é: $resultado.<br>");
									}else{
										echo 'Preencha o segundo campo!<br><br>';
									}
								}else{
									echo 'Preencha primeiro campo!<br><br>';
								}	

								return $resultado;
						}
						public function divisao($n1, $n2){
							$this->numero1 = $n1;
							$this->numero2 = $n2;

								if($this->numero1 != NULL){

									if($this->numero2 != NULL){
										$resultado = $this->numero1 / $this->numero2;
						
										print("<div class='bkgblk'><br><h4>Números $this->numero1 e $this->numero2</h4><br>");
										print("O resultado da divisão é: $resultado.<br>");
									}else{
										echo 'Preencha o segundo campo!<br><br>';
									}
								}else{
									echo 'Preencha primeiro campo!<br><br>';
								}	

								return $resultado;
						}
					}
								
				