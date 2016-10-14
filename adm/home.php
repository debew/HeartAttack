<div id="form">
	<form method="post" action="galeria_adm.php" enctype="multipart/form-data">
		<label for="Foto"> Foto do prato:</label>
		<input type="file" name="imagem" id="Foto" /><br><br>
		<label for="nome_prato"> Nome do prato:</label>
		<input type="text" name="nome_prato" id="nome_prato" /><br><br>
		<label for="desc">Descrição:</label><br>
		<textarea name="descricao" cols="60" rows="6" placeholder="Descrição..." id="desc"></textarea><br><br>
		<label for="cheff"> Cheff:</label>
		<input type="text" name="cheff" id="cheff" />

		<input type="submit" value="Adicionar prato" />
	</form>
</div>
<!-- Box de Cardapio -->
<div id="cardapio">
	<h1>BURGERS</h1>	
	<section class="conjunto">
		<?php /*
			
			require_once "estruturas/oo.php";

			$cardapio = new oo();
			$cardapio->galeria(); */
		?>
	</section>
</div>