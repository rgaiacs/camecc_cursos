<?php
include('header.php');
$menu = set_header('index');

require('news_last.php');

$main = "<h2>Bem vindo.</h2>
    <p>O CAMECC Cursos é um órgão do <a href='http://www.ime.unicamp.br/~camecc'>CAMECC</a> responsável por manter material relacionado a softwares livres (sob a licença GNU GPL) ou software aberto (sob alguma das licenças listadas em <a href='http://opensource.org/licenses/alphabetical'>http://opensource.org/licenses/alphabetical</a>) de interesse dos alunos do IMECC.</p>
    <p>Todo o material disponibilidado ou indicado neste site encontra-se sob alguma licenças <a href='http://creativecommons.org.br/'>Creative Commons</a>.</p>";

require('template.php');
?>
