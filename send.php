<?php 

$nombre=$mail=$subject=$para=$headers=$msjCorreo = NULL;

if(isset($_POST['Submit']));
	$nombre=$_POST['name'];
	$mail=$_POST['mail'];
	$subject=$_POST['subject'];
	$mensaje=$_POST['mensaje'];
	$para="masterhackjuan@gmail.com";

	//$headers='From'." ". $email ."\r\n";
    $headers='From:'."". $mail ."\r\n";
    $headers="Content-type: text/html; charset=utf-8";

    //Cuerpo de correo
    $msjcorreo="name:".$nombre;
    $msjCorreo.="\r\n";
    $msjCorreo.="mail:".$mail;
    $msjCorreo.="\r\n";
    $msjCorreo.="subject:".$subject;
    $msjCorreo.="\r\n";
    $msjCorreo.="mensaje:".$mensaje;
    $msjCorreo.="\r\n";

    if(mail($para,$subject,$msjCorreo,$headers)){
    	echo "<script language='JavaScript'>alert('Mensaje enviado,muchas gracias');</script>";
        header('Location:msend.html');
    }else{
    	echo "<script language='JavaScript'>alert('Fallado');</script>";

        }

 ?>