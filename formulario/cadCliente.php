<html>
	<head>
		<title>Envio de dados</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			echo "<h1> Os dados informados são: </h1>";
			$nome = $_POST["txtNome"];
			$ender = $_POST["txtEndereco"];
			$cpf = $_POST["txtCPF"];
			$estado = $_POST["listEstados"];
			$dtNasc = $_POST["txtData"];
			$sexo = $_POST["sexo"];
			$cinema = $_POST["checkCinema"];
			$musica = $_POST["checkMusica"];
			$info = $_POST["checkInfo"];
			$login = $_POST["txtLogin"];
			$senha1 = $_POST["txtSenha1"];
			$senha2 = $_POST["txtSenha2"];
			$camposOK = true;
			
			
			//CONFERÊNCIA DE DADOS
			//NOME
			if($nome == ""){
				echo "Nome incorreto <br>";
				$camposOK = false;
			}
			
			//ENDEREÇO
			if($ender == ""){
				echo "Endereço incompleto <br>";
				$camposOK = false;
			}
			
			//SENHA
			if($senha1 != $senha2){
				echo "Senha não confere! <br>";
				$camposOK = false;
			}
			
			
			//CONFERIR CPF
			
			$cpfestaerrado = false; //Para não repetir a frase "CPF está errado"
			$cpfnaoalterado = $cpf; //Para mostrar na tela de confirmação
			$cpf = ereg_replace('[^0-9]', '', $cpf);
			$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
			if ($cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
				$cpfestaerrado = true;
				$camposOK = false;
			}else if (strlen($cpf) != 11) {
				$cpfestaerrado = true;
				$camposOK = false;
			} else {   
         
				for ($t = 9; $t < 11; $t++) {
					  
					for ($d = 0, $c = 0; $c < $t; $c++) {
						$d += $cpf{$c} * (($t + 1) - $c);
					}
					$d = ((10 * $d) % 11) % 10;
            
					if ($cpf{$c} != $d) {
						$cpfestaerrado = true;
						$camposOK = false;
					}
				}
            }
            
            //Se o CPF estiver errado
            if($cpfestaerrado){
				echo "CPF errado";
			}
			
			//CONFERIR DATA
				$datadividida = explode("/", $dtNasc);
				$dataerrada = false;
				$dia = (int) $datadividida[0];
				$mes = (int) $datadividida[1];
				$ano = (int) $datadividida[2];
				
				
				if ($dia <= 0 || $dia > 31) {
					$camposOK = false;
					$dataerrada = true;
				}
				
				if ($mes > 0 && $mes <= 12){
					
					if($mes == 2){
						if($dia < 30){
								if(($ano%4==0)&&($ano%100!=0)){
								}else{
									if($dia==29){
										$camposOK = false;
										$dataerrada = true;
									}
								}
						}else{
								$camposOK = false;
								$dataerrada = true;
						}
					}else if($mes!=1 && $mes!=3 && $mes!=5 && $mes[1]!=7 && $mes!=8 && $mes=10 && $mes!=12){
						if($dia == 31){
								$camposOK = false;
								$dataerrada = true;
						}
					}
				
				}else{
					$camposOK = false;
					$dataerrada = true;
				}
				
				if($dataerrada){
					echo "Data errada";
				}
				
			//SE NÃO HOUVER ERROS
			if($camposOK){
				echo "<table border='0' cellpadding='5'>";
				echo "<tr><td>NOME:</td><td><b>$nome</b></td></tr>";
				echo "<tr><td>CPF:</td><td><b>$cpfnaoalterado</b></td></tr>";
				echo "<tr><td>ENDEREÇO:</td><td><b>$ender</b></td></tr>";
				echo "<tr><td>ESTADO:</td><td><b>$estado</b></td></tr>";
				echo "<tr><td>DATA DE NASCIMENTO:</td><td><b>$dtNasc</b></td></tr>";
				echo "<tr><td>SEXO:</td><td><b>$sexo</b></td></tr>";
				echo "<tr><td>LOGIN:</td><td><b>$login</b></td></tr>";
				echo "<tr><td>SENHA:</td><td><b>$senha1</b></td></tr>";
				echo "<tr><td>ÁREAS DE NTERESSE:</td><td>";
				if($cinema){
					echo "<b> Cinema ";
				}
				if($musica){
					echo " Música ";
				}
				if($info){
					echo " Informática</b>";
				}
				echo "</td></tr></table>";
			}	
		?>
	</body>
</html>

