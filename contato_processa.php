<?php
$assunto           = "CONTATO PELO SITE";
$deemail           = 'nao-responda@portalfortpel.com.br';
$denome            = "SITE FORTPEL";

$paranome          = "MeninoJesus";
$nome              = req_post('Nome');
$email             = req_post('Email');
$c_assunto         = req_post('Assunto');
$msg               = req_post('Mensagem');
$ip                = getRealIpAddr();

$paraemail = "igor@clinicatoal.com.br";

$html = "<b>CONTATO PELO SITE<b><br><br>";
$html = $html."Nome: ".$nome."<br>Email: ".$email."<br>Assunto: ".$c_assunto."<br>Mensagem: ".$msg."";

$paraemails = explode(";", $paraemail);
$paranomes = explode(";", $paranome); 

// quando limpar pega isso
// 
// 
// 
// 
// 
// 
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}    
// if(isset($_POST['paracopia'])){
//     $paracopia 	= $_POST['paracopia'];  
//     $paracopia = explode(";", $paracopia);  
// }else{
// 	$paracopia = '';
// }

// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("phpmailer/class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
     $mail->CharSet = 'UTF-8';
     $mail->Host = 'smtp.portalfortpel.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Port       = 587; //  Usar 587 porta SMTP
     $mail->Username = 'nao-responda@portalfortpel.com.br'; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = 'Fortpel321'; // Senha do servidor SMTP (senha do email usado)
 
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom($deemail, $denome); //Seu e-mail
     $mail->AddReplyTo($deemail, $denome); //Seu e-mail
     $mail->Subject = utf8_decode($assunto);//Assunto do e-mail
 
 
    //Define os destinatário(s)
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    for($i = 0; $i < count($paraemails); $i++) {
        $mail->AddAddress($paraemails[$i]);
    }
    
    // $mail->AddBCC('matheus.cardoso@royalsoft.com.br', 'Matheus Cardoso');    
    //$mail->AddBCC('suporte@modular.com.br', 'Suporte TI');
    //$mail->AddBCC('melo@modular.com.br', 'Melo');
    
    //Campos abaixo são opcionais 
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    // if($paracopia !=''){
    //     for($i = 0; $i < count($paracopia); $i++) {
    //         $mail->AddBCC($paracopia[$i]); // Cópia Oculta
    //     }
    // }
      
    // if(isset($_POST['anexo'])) {
    //     $mail->AddAttachment($_POST['anexo']);      // Adicionar um anexo    
    // }
    
     //Define o corpo do email
     $mail->MsgHTML($html); 
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
	?>
    <script>
	 //    parent.$('#nome').val("");
		// parent.$('#email').val("");
		// parent.$('#assunto').val("");
		// parent.$('#msg').val("");
  //       parent.$("#btn-enviar").removeAttr("disabled"); 
  //       parent.$.toast({heading: 'Sucesso',text: 'Email enviado com sucesso.',showHideTransition: 'slide',icon: 'success'});
  //       parent.$("#btn-enviar").html("Enviar");   
		
	</script>
    <?php 
     echo "Mensagem enviada com sucesso\n";
 
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}

 ?>