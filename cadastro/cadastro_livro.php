<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1 class="page-title">Cadastro de Livros</h1>

<form id="cadastroLivroForm" action="processa_cadastro_livro.php" method="post" onsubmit="return validarForm()">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="nomeLivro" id="nomeLivro" placeholder="Digite o Nome do Livro" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div id="nomeLivroError" class="invalid-feedback"></div>
    </div><br>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="anoLancamento" id="anoLancamento" placeholder="Digite o Ano de Lançamento" aria-label="Recipient's username" aria-describedby="button-addon2">    
        <div id="anoLancamentoError" class="invalid-feedback"></div>
    </div><br>
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Efetuar Cadastro</button>
</form>

<script>
    function validarForm() {
        var nomeLivro = document.getElementById("nomeLivro").value;
        var anoLancamento = document.getElementById("anoLancamento").value;
        var nomeLivroError = document.getElementById("nomeLivroError");
        var anoLancamentoError = document.getElementById("anoLancamentoError");
        var isValid = true;

        nomeLivroError.textContent = "";
        anoLancamentoError.textContent = "";

        if (nomeLivro === "") {
            nomeLivroError.textContent = "Por favor, preencha o nome do livro.";
            isValid = false;
        }

        if (anoLancamento === "") {
            anoLancamentoError.textContent = "Por favor, preencha o ano de lançamento.";
            isValid = false;
        }

        return isValid;
    }
</script>



</body>
<br><br>
<a href="../index.php" class="std-button">Voltar à Home</a>
</html>