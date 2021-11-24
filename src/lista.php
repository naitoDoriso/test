<?php
    include("./include.php");
    Pheader();
    $path = './files/db.json';
    if(!is_file($path)){
        echo("<p>Não há livros registrados.</p>");
        Pvoltar();
        die(Pfooter());
    }
    $json = json_decode(file_get_contents($path), true);
?>
<table border=1>
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Ano de publicação</th>
        <th>Editora</th>
    </tr>
    <?php
        foreach($json as $arr){
    ?>
        <tr>
            <td><?php echo $arr['Título'] ?></td>
            <td><?php echo $arr['Autor'] ?></td>
            <td><?php echo $arr['Ano'] ?></td>
            <td><?php echo $arr['Editora'] ?></td>
        </tr>
    <?php
        }
    ?>
</table>
<?php
    Pvoltar();
    Pfooter();
?>