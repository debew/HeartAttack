function validarSenha(form){ 
	senha = document.formulario.senha.value
	senhaRepetida = document.formulario.repetir_senha.value
	if (senha != senhaRepetida){
		alert("Repita a senha corretamente");
		document.formulario.repetir_senha.focus();	
		return false;
	}
}


jQuery(function($){

	$("#cpf").mask("999.999.999-99",{placeholder:" "});
	$("#fone").mask("(99) 9999-9999",{placeholder:" "});
	$("#data").mask("99/99/9999",{placeholder:" "});

});