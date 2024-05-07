<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);
    $celular = addslashes($_POST["celular"]);
    $mensagem = $_POST["mensagem"];
    
    // Configurações de e-mail
    $para = "cgsilva.mariana@gmail.com"; 
    $assunto = "Nova mensagem do formulário de contato - Portifolio";
    $corpo_mensagem = "Nome: " .$nome."\n"."Email: ".$email."\n"."Celular: ".$celular."\n"."Mensagem: \n".$mensagem;
    
    $cabeca = "From: cgsilva.mariana@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    // Envia o e-mail
    if (mail($para, $assunto, $corpo_mensagem, $cabeca)) {
        echo "Sua mensagem foi enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar sua mensagem.";
    }
} else {
    echo "Este script deve ser acessado via método POST.";
}
?>
