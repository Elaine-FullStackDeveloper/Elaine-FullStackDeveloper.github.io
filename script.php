<?php
	$assunto        = $_POST['assunto'];
	$corpo 			= "
		Assunto: 	".$_POST['assunto']."
		Nome: 		".$_POST['nome']." 
		Email: 		".$_POST['email']."
		Mensagem:	".$_POST['mensagem']."
	";

	mail('elaine.adm.redes@gmail.com', $assunto, $corpo, 'From: Portfólio');
	echo 'Seus dados foram enviados com sucesso!';
?>
