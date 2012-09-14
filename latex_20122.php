<?php
include('header.php');
$menu = set_header('courses');

require('news_last.php');

$db = new PDO('sqlite:db.sqlite');
$result = $db->query("SELECT nome FROM curso_latex_20122 ORDER BY nome ASC");
if (!$result) {
      echo "Erro na consulta.<br>";
        exit;
}
$main = "<h2>LaTeX - Turma de 2012.2</h2>
    <p>A seguir encontra-se a lista dos alunos matriculados para o curso de LaTeX.</p>
    <table>";
foreach($result as $row){
    $main = $main . "<tr><td>$row[0]</td></tr>";
}
$main = $main . "</table>";

require('template.php');
?>
