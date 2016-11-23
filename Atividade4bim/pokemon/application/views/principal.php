<div id="homebody">
		<h2>Pokemons</h2>
		<div class ="alinhado-centro borda-base espaco-vertical">
  	</div>
  	<div class="row-fluid">
			
				<?php
              foreach($pokemon as $pok) {
                       echo "<p><strong>"."Id do Pokemon</strong>";
						echo "<p>".$pok->id_pokemon."</td>";
                       echo "<p><strong>"."Nome do Pokemon</strong>";
                         echo "<p>".$pok->nome."</td>";
                       echo "<p><strong>"."Tipo</strong>";
                         echo "<p>".$pok->tipo_pokemon."</td>";
                       echo "<p><strong>"."Data</strong>";
                         echo "<p>".$pok->data_captura."</td>";
                       echo "<p><strong>"."Ações</strong>";
                        echo "<p><a href='http://localhost/pokemon/index.php/Editar'><button type='submit' class='btn btn-success'>Editar</button></a></p>";
												echo"<p><a><button type='submit' class='btn btn-danger'>Excluir</button></a><p>";
						echo"<hr align='center' width='40' size='1' color='red'></hr>";
                     }
                  ?>

    
</div>
  </div>
 </div>
