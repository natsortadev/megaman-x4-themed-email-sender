<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">
    <header>
        <nav>
            <ul>
                <li><a id="logo" href="index.php"><img id="logoImg" src="img/MMX4RepliforceLogo.webp" alt="logo-megaman-x5"></a></li>
                <li id="title"><h1>epliforce Mail Service</h1></li>
            </ul>
        </nav>
    </header>
    <div class="pai">
    <div class="formulario">
        <form id="principal" action="mail.php" method="POST">
            <label for="to">DESTINATÁRIO</label>
            <input class="campo" type="email" name="to" id="to" required>
            <label for="subject">ASSUNTO</label>
            <input class="campo" type="text" name="subject" id="subject" required>
            <label for="msg">CORPO DO EMAIL</label>
            <input class="campo" type="text" name="msg" id="msg" required>
            <input class="botao" type="submit" name="mandar" id="mandar" value="ENVIAR">
        </form>
    </div>
    </div>
    <footer>
        <p id="rodape">All rights reserved &copy; <a href="https://youtu.be/vSrNSdtVL9w" target="_blank">Cyber Peacock 2023</a></p>
    </footer>

    </div>
</body>
</html>