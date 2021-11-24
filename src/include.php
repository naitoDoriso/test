<?php
function Pheader(){
    echo '
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Manipulação de Arquivos</title>
    </head>

    <body>
        <header>
            <h4>Manipulação de Arquivos<hr></h4>
        </header>
    ';
};

function Pfooter(){
    echo '
    <footer>
        <p>
            © Vinícius de Sá Ferreira | AQ3008851
        </p>
    </footer>
    </body>

    </html> 
    ';
};

function Pvoltar(){
    echo '
    <a href="../"> Volte clicando aqui.</a>
    ';
}
?>