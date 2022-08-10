function validaCadastro() {

	if (cadastroUser.nome.value=="") {
		alert("Campo 'Nome' obrigatorio.");
		cadastroUser.nome.focus();
			return false;
	}
	if (cadastroUser.endereco.value=="") {
		alert("Campo 'Data de nascimento' obrigatorio.");
		cadastroUser.endereco.focus();
		return false;
	}
	if (cadastroUser.email.value=="") {
		alert("Campo 'Email' obrigatorio.");
		cadastroUser.email.focus();
		return false;
	}
	if (cadastroUser.senha.value=="") {
		alert("Campo 'Senha' obrigatorio.");
		cadastroUser.senha.focus();
		return false;
	}
	if (cadastroUser.telefone.value=="") {
		alert("Campo 'Senha' obrigatorio.");
		cadastroUser.telefone.focus();
		return false;
	}

	alert("Conta cadastrada com sucesso.");
	}