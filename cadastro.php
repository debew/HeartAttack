<div id="sobre">
			<section id="area-cadastro">
			
				<h2>CADASTRE - SE</h2>
			
				<form method="post" action="estruturas/cad.php">
					
						<input type="text" id="nome" name="nome" required  placeholder="Nome" pattern="[a-z\s]+$" />
						
						<input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+$" placeholder="E-mail" />

						<input type="text" id="login" name="login" required  placeholder="Login" />					
						
						<input type="password" id="senha" name="senha" required  placeholder="Senha" />
						
						<input type="password" id="senha2" name="senha2" onClick="validaSenha(this)" required  placeholder="Repita sua senha" />					
						<input type="text" id="cpf" name="cpf" required  placeholder="CPF" />

						<input type="tel" id="fone" name="fone" required placeholder="Telefone" />

						<input type="text" id="data" name="data" required  placeholder="Data de nascimento" />

						<input type="submit" id="enviar" value="Enviar" />	
				
				</form>
			</section>
</div>