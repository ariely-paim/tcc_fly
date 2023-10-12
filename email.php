<?php
if(isset($_POST['email']) && !empty($_POST['name'])){


/*$nome = addcslashes($_POST['name']);
$email= addcslashes($_POST['$email']);
$mensagem = addcslashes($_POST['message']);
*/
$nome = addcslashes($_POST['name'], "\n\r\t\"\\");
$email = addcslashes($_POST['email'], "\n\r\t\"\\");
$mensagem = addcslashes($_POST['message'], "\n\r\t\"\\");


$to = "emanoelaneris@gmail.com";
$subject = "contato cessibtech";
$body = "Nome: ".$nome. "\r\n" .
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From: manunrs@hotmail.com"."\r\n".
           "Reply-To:" .$email. "\r\n".
           "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo ("Email enviado com sucesso");
}else{
    echo("O email não pode ser enviado");
}

}

?>

