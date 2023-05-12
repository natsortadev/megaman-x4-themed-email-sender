<?php
function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$msg = $_POST['msg'];

$msg = wordwrap($msg,70);

$to = $_POST['to'];

$subject = $_POST['subject'];

$headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to,$subject,$msg)) {
    function_alert("Mensagem enviada com sucesso!");
} else {
    function_alert("Houve um erro no envio da mensagem.");
}
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimentos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="content">
    <header>
        <nav>
            <a href="index.php"><ul>
                <li><a id="logo" href="index.php"><img id="logoImg" src="img/MMX4RepliforceLogo.webp" alt="logo-megaman-x5"></a></li>
                <li id="title"><h1>epliforce Mail Service</h1></li>
            </ul></a>
        </nav>
    </header>
    <div class="pai">
    <div class="formulario" id="agradecimento">
        <form action="mail.php" method="POST">
            <label>OBRIGADO POR USAR O SERVIÇO DE EMAILS DE INTERNET DISCADA DA REPLIFORCE!</label>
        </form>
    </div>
    </div>
    <footer>
        <p id="rodape">All rights reserved &copy; <a href="https://youtu.be/vSrNSdtVL9w" target="_blank">Cyber Peacock 2023</a></p>
    </footer>

    </div>
</body>
</html>