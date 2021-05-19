<?php
  
 
    $name =$_POST['name'];
    $email =$_POST['email'];
    $how =$_POST['how'];
    $check =$_POST['check'];
    $text =$_POST['text'];

    
    
    $to = 'fillipeab9070@gmail.com';
    $subject = 'Resposta do Formulário';
    $message = "Nome :".$name."\n"."Email :".$email."\n"."A mensagem foi: ".$text;
    $header = "From: ".$name;
    
    
    mail($to, $subject, $message, $header);
    

?>
  
