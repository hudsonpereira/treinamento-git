<?php require('mind.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <?php
            if (isPost()) {
                sendMail('hudson@grupomindsolutions.com.br', $_POST['name']);
            }
        ?>
        <form method="POST">
            <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <input name="submit" type="submit" value="Enviar" class="btn btn-primary float-right">
            </div>
        </form>
    </div>
</body>
</html>
