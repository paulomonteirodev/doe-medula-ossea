<?php
	if(isset($_POST['assunto']) && isset($_POST['mensagem']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['confirmaemail'])){
		$para = 'projetodoacaodemedula@gmail.com';
		$assunto = "Site - ";
		$assunto .= $_POST['assunto'];
		$mensagem = $_POST['mensagem'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$confirmaemail = $_POST['confirmaemail'];
		
		$header = "Content-type: text/html; charset= utf-8\n";
		$header .= "From: $nome<$email>\n";
		
		$corpo  = "<strong>Nome: </strong> $nome <br>";
		$corpo .= "<strong>Email: </strong> $email <br><br><br>";
		$corpo .= $mensagem;
		
		if(($email == $confirmaemail) && mail($para, $assunto, $corpo, $header)){
			header("location:../contato.php?msg=enviado&nome=$nome");
		}
		else
			if($email != $confirmaemail){
			echo "Confirme o email corretamente";
		}
		else{
			echo "Erro ao enviar email";
		}
	}
?>
 