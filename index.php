<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Manipulação de Arquivos</title>
</head>

<body>
    <header>
        <h4>Manipulação de Arquivos: Cadastro de Livros<hr></h4>
    </header>
    <section class="container">
        <form action="src/save.php" method="POST">
            <div class="flex-box">
                <label >Título: </label>
                <input type="text" name="titulo" class="inputs" required>
            </div>
            <div class="flex-box">
                <label>Autor: </label>
                <input type="text" name="autor" class="inputs" required>
            </div>
            <div class="flex-box">
                <label>Ano de publicação: </label>
                <input type="date" name="ano" min="1900-01-01" max="" id="ano" class="inputs" required>
            </div>
            <div class="flex-box">
                <label>Editora: </label>
                <input type="text" name="editora" class="inputs" required>
            </div>
            <div class="flex-box">
                <input type="submit" value="Enviar" class="submit">
                <input type="reset" value="Reset" class="submit">
                <input type="button" onclick="javascript:location.replace('src/lista.php')" value="Lista" class="submit">
            </div>
        </form>
    </section>
    <footer>
        <p>
            © Vinícius de Sá Ferreira | AQ3008851
        </p>
    </footer>
    <script>
        document.getElementById('ano').setAttribute("max",new Date().getFullYear()+"-"+(new Date().getMonth()+1)+"-"+new Date().getDate());
    </script>
</body>

</html>
