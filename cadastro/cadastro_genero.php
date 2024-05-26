<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Gêneros</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1 class="page-title">Cadastro de Gêneros</h1>
    <form action="processa_cadastro_genero.php" method="post">
    <div class="input-group mb-3">
    <input type="text" class="form-control" name="genero" placeholder="Gênero da Obra" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Efetuar Cadastro</button>
    </div>
    </form>
</body>
<br><br>
<a href="../index.php" class="std-button">Voltar à Home</a>
</html>