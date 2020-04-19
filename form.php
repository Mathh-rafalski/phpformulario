<html>
 <head>
  <title>Teste FORMS PHP</title>
  <style>
	.err {
		color: red;
		font-size: 12px;
	}
	.blacl {
		color:black;
	}
  </style>
 </head>
 <body>
 
 <?php
 // formulário de calculo de IMC com tratamentos caso não coloque altura ou peso, colocar respectivas embaixo do campo em vermelho(campo obrigatório)

	//if (!empty($_POST)) //checa se há algum valor no método post
	

		

			
		//htmlspecialchars($_POST['name']);
?>
	<form method="post">
		 <p>Nome<br><input class='p' type="text" step='0.01'name="name"/></p>
		 <?php
		 	if(isset($_POST['name']) && !empty($_POST['name'])) {
		}else if (isset($_POST['name'])){
			echo "<span class='err'>O peso é obrigatório</span>";
		}
		 ?>
		<p>Data de Nascimento<br><input type="date" step='0.01'name="data"/></p>
		 <?php
		 	if(isset($_POST['data']) && !empty($_POST['data'])) {
		}else if (isset($_POST['data'])){
			echo "<span class='err'>O peso é obrigatório</span>";
		}
		 ?>
		 <p>Email<br><input type="text" step='0.01'name="email" /></p>
		 <?php
		 	if(isset($_POST['email']) && !empty($_POST['email'])) {
		}else if (isset($_POST['email'])){
			echo "<span class='err'>A altura é obrigatória</span>";
		}
		 ?>
		<p>Senha<br><input type="password" step='0.01'name="senha" /></p>
		 <?php
		 	if(isset($_POST['senha']) && !empty($_POST['senha'])) {
		}else if (isset($_POST['senha'])){
			echo "<span class='err'>A altura é obrigatória</span>";
		}
		 ?>
		<p>Confirmar senha<br><input type="password" step='0.01'name="senha2" /></p>
		 <?php
		 	if(isset($_POST['senha2']) && !empty($_POST['senha2'])) {
		}else if (isset($_POST['senha2'])){
			echo "<span class='err'>A altura é obrigatória</span>";
		}
		 ?>
		 <p><input type="submit" /></p>
	</form>
		<?php
		// if(isset($_POST['age']) && !empty($_POST['age'])) {
		if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['data']) && !empty($_POST['data']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['senha2']) && !empty($_POST['senha2'])){
			$nome = htmlspecialchars($_POST['name']);
			$array = explode(" ",$nome);
			$size = sizeof($array);
			if($size >= 3) {
				echo "<span class='err'>Nome inválido</span>";
				return;
			}
			$data = htmlspecialchars($_POST['data']);
			$email = htmlspecialchars($_POST['email']);
			$senha = htmlspecialchars($_POST['senha']);
			
			$confirmSenha = htmlspecialchars($_POST['senha2']);
			if ($senha != $confirmSenha) {
				echo "<span class='err'>As senhas devem ser iguais</span> ";
				return;
			}
			if (validaEmail($email)) {
				} else {
				echo "O e-mail inserido é invalido!";
				return;
				}
			echo '<span>Salvo</span>';
		}
		function validaEmail($email) {
			$conta = '/^[a-zA-Z0-9\._-]+?@';
			$domino = '[a-zA-Z0-9_-]+?\.';
			$gTLD = '[a-zA-Z]{2,6}'; //.com; .coop; .gov; .museum; etc.
			$ccTLD = '((\.[a-zA-Z]{2,4}){0,1})$/'; //.br; .us; .scot; etc.
			$pattern = $conta.$domino.$gTLD.$ccTLD;
			if (preg_match($pattern, $email))
			return true;
			else
			return false;
			}
			
			// Define uma variável para testar o validador
			
			// Faz a verificação usando a função
		?>
 </body>
</html>