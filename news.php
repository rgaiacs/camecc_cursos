<?php
include('header.php');
$menu = set_header('news');

require('news_last.php');

$db = new PDO('sqlite:db.sqlite');
if(!isset($_GET["id"]) || empty($_GET["id"])){
    $result = $db->query("SELECT id, data, titulo FROM noticias ORDER BY id DESC");
    if (!$result) {
          echo "Erro na consulta.<br>";
            exit;
    }

    $main = "<h2>Notícias</h2>
        <table>
        <tr>
        <th>Data</th>
        <th>Título</th>
        </tr>";

    foreach($result as $row){
        $main = $main . "<tr><td>$row[1]</td><td><a href='news?id=$row[0]'>$row[2]</a></td></tr>";
    }

    $main = $main . "</table>";
}
else{
    $result = $db->query("SELECT data, titulo, mensagem FROM noticias WHERE id=" . $_GET["id"]);
    $row = $result->fetch();
    $main = "<h2>Notícia</h2><p>Data: $row[0]</p><p>Título: $row[1]</p><p>Mensagem: $row[2]</p>";
}

$db = NULL;

require('template.php');
?>
