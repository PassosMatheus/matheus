<?php
require_once 'header.php';
require_once 'config.php';

if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $msg = addslashes($_POST['msg']);

        $para = "matheus.martinspassos@yahoo.com";
        $assunto = addslashes($_POST['assunto']);
        $corpo = "Nome: ".$nome." - E-mail: ".$email." - Mensagem: ".$msg;
        $cabecalho = "From: matheus@atwebpages.com"."\r\n".
                      "Reply-to: ".$email."\r\n".
                      "X-Mailer: PHP/".phpversion();

        mail($para, $assunto, $corpo, $cabecalho);
        echo "<h2>E-mail enviado com sucesso !</h2>";
        exit;
}
?>

<html>
        <div class="contato">
                <div>Você irá me encontrar através desses meios:</br>
                        <a href="https://github.com/PassosMatheus" target="_blank"><img src="assets/imagens/github.png"/></a>
                        <a href="https://www.linkedin.com/in/matheus-passos-21083b120/" target="_blank"><img src="assets/imagens/linkedin.png"/></a>
                        <a href="https://www.facebook.com/matheus.martins.1481169" target="_blank"><img src="assets/imagens/facebook.PNG"/></a>
                        <a href="https://api.whatsapp.com/send?phone=5511984946126&text=Ol%C3%A1%20Matheus%2C%20aqui%20quem%20fala%20%C3%A9%20..." target="_blank"><img src="assets/imagens/whats.png"/></a>
                </div> 

                <div class="email">Ou se preferir, me mande um email
                        <form method="POST">
                                Nome:<br>
                                <input type="text" name="nome"/></br>
                                Email:<br/>
                                <input type="email" name="email"/></br>
                                Assunto:<br>
                                <input type="text" name="assunto"/></br>
                                Mensagem:</br>
                                <textarea name="msg" style="width:85%;"></textarea><br>
                                <input type="submit" value="enviar"/>
                        </form>
                </div>
        </div>
</html>

<?php
require_once 'footer.php';
?>