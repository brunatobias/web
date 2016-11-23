<div class="container">
	<div class ="masthead">

			<h3><img src="http://localhost/pokemon/assets/img/pokemon.png">PokemonGO</h3><br>
			<nav class="nav nav-default">

<ul class="nav nav-tabs">

			  <li class="active"><a href="http://localhost/pokemon/index.php/Home">Consultar</a></li>
				<li><a href="http://localhost/pokemon/index.php/Cadastro">Inserir</a></li>
				

			  <ul class="nav navbar-nav navbar-right">
					<?php echo "<li><a>". $this->session->userdata('usuario')->nome." "."</a></li>"
	?>
					<li><a href="http://localhost/pokemon/index.php/Login/sair">Sair</a></li>
			 </ul>

		 </ul>
	 </nav>

  </div>
