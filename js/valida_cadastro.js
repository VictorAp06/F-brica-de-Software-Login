var form = document.getElementById("form-cadastro");

if(form.addEventListener) {
  form.addEventListener("submit", validaCadastro);
} 

function validaCadastro(evento){

  var email = document.getElementById('email');
  var nome = document.getElementById('nome');
  var sobrenome = document.getElementById('sobrenome');
  var datanascimento = document.getElementById('datanascimento');
  var periodo = document.getElementById('periodo');
  var senha = document.getElementById('senha');
  var confirmacaosenha = document.getElementById('confirmacaosenha');
  var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  var erro = 0;

  caixa_email = document.querySelector('.msg-email');
  if(email.value == ''){
      caixa_email.innerHTML = "Favor preencher o E-mail";
      caixa_email.style.diplay = 'block';
      erro += 1;
  }else if(filtro.test(email.value)){
    caixa_email.style.display = 'none';
  }else{
    caixa_email.innerHTML = "Formato do E-mail inválido";
    caixa_email.style.display = 'block';
    contErro += 1;
  }
  
  campo_nome = document.querySelector('.msg-nome');
  if(nome.value == '') {
    campo_nome.innerHTML = "Favor preencher o nome";
    erro += 1;
  } else {
    campo_nome.style.display = 'none';
  }

  campo_sobrenome = document.querySelector('.msg-sobrenome');
  if(sobrenome.value == '') {
    campo_sobrenome.innerHTML = "Favor preencher o sobrenome";
    erro += 1;
  } else {
    campo_nome.style.display = 'none';
  }

  campo_senha = document.querySelector('.msg-senha');
  if(senha.value == ""){
    campo_senha.innerHTML = "Favor preencher a senha";
    campo_senha.style.display = 'block';
    erro += 1;
  }else if(senha.value.length < 6){
    campo_senha.innerHTML = "Favor preencher a Senha com o mínimo de 6 caracteres";
    campo_senha.style.display = 'block';
    erro += 1;
  }else{
    campo_senha.style.display = 'none';
  }
 
	campo_confirmacaosenha = document.querySelector('.msg-confirmacaosenha');
	if(confirmacaosenha.value == ""){
		campo_confirmacaosenha.innerHTML = "Favor preencher o campo Repita a Senha";
		campo_confirmacaosenha.style.display = 'block';
		erro += 1;
	}else if(confirmacaosenha.value.length < 6){
		campo_confirmacaosenha.innerHTML = "Favor preencher o campo Repita a Senha com o mínimo de 6 caracteres";
		campo_confirmacaosenha.style.display = 'block';
		erro += 1;
	}else{
		campo_confirmacaosenha.style.display = 'none';
	}
 
	if(senha.value != "" && confirmacaosenha.value != "" && senha.value != confirmacaosenha.value){
		campo_confirmacaosenha.innerHTML = "Favor confirme sua senha";
		campo_confirmacaosenha.style.display = 'block';
		erro += 1;
	}

  campo_periodo = document.querySelector('.msg-periodo');
  var selec = document.getElementById('periodo');
  if( selec.value == '') {
    campo_periodo.innerHTML = "Favor selecionar um periodo";
    erro += 1;
  } else {
    campo_periodo.style.display = 'none';
  }

    if(erro > 0){
      evento.preventDefault();
    }

}