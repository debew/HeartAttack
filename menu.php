<nav id="navegação"> 
	<ul>
		<li><a href="index.php" ><span id="home"> HOME </span></a></li>
		<li><a href="index.php?page=sobre"> SOBRE </a></li>
		<li><a href="index.php?page=cardapio"> BURGERS </a></li>
		<li><a href="index.php?page=contato"> CONTATO </a></li>
						
		<li onClick="toggle()"><a href="#login"><span id="login"> LOGIN </a></li>
								
		<div id="menu-login" style="display:none">
								
			<form id="form1" name="form1" method="post" action="estruturas/senha.php">
				<li><span> USUÁRIO </span><input type="text" name="login" class="form1" required /></li>
				<li><span> SENHA </span><input type="password" name="senha" class="form1" required /></li>
				<li><input type="submit" name="button" class="button1" value="Entrar" /></li>
			</form>
							
		</div>
		<li><a href="index.php?page=cadastro"><span id="cadastro"> CADASTRO </span></a></li>
	</ul>
</nav>
</div>
</header>