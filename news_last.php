<?php
$db = new PDO('sqlite:db.sqlite');

$result = $db->query("SELECT id, titulo FROM noticias ORDER BY id DESC LIMIT 5");
if(!$result){
      echo "Erro na consulta.<br>";
        exit;
}

$news = "";
foreach($result as $row){
    $news = $news . "<li><a href='news?id=$row[0]'>$row[1]</a></li>";
}

$db = NULL;
?>
