<?php
$db = new PDO('sqlite:db.sqlite');

$query = 'CREATE TABLE noticias (id INTEGER PRIMARY KEY, data TEXT, titulo TEXT, mensagem TEXT);';
$db->exec($query);
?>
