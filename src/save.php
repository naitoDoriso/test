<?php
    $path = './files/db.json';
    if(!is_dir('./files')){
        mkdir('./files'); // Cria pasta
        $folder = fopen('./files/db.json','w');
        fwrite($folder,"[\r\n\r\n]");
        fclose($folder);
    }

    $dados = [
        "Título"=>$_POST["titulo"],
        "Autor"=>$_POST["autor"],
        "Ano"=>$_POST["ano"],
        "Editora"=>$_POST["editora"]
    ];

    $json = json_decode(file_get_contents($path), true); // Transforma o json em array associativo
    array_push($json,$dados);
    $jsonData = json_encode($json,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT); // Transforma o array em json formatação UTF-8 e indentado
    file_put_contents($path, $jsonData);

    header("Location: lista.php")
?>