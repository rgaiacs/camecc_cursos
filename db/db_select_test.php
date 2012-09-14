<?php
$db = new PDO('sqlite:db.sqlite');

$query = 'SELECT * FROM noticias;';
$result = $db->query($query);
foreach($result as $row){
    echo("<p>" . $row['id'] . $row['mensagem'] . "</p>");
}
?>
