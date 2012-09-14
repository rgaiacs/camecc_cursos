<?php
$db = new PDO("sqlite:db.sqlite");

$query = "INSERT INTO noticias VALUES (1, 'time', 'Título', 'Mensagem');";
$db->exec($query);
?>
