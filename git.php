<?php
include('header.php');
$menu = set_header('courses');

require('news_last.php');

$main = "<h2>Git</h2>
    <p>\"Git é um sistema de controle de versão distribuído com ênfase em velocidade.\" (Fonte: <a href='http://pt.wikipedia.org/wiki/Git'>http://pt.wikipedia.org/wiki/Git</a>)</p>
    <p>Ainda não produzimos nenhum material sobre Git. A seguir encontra-se uma lista de outros materiais produzidos por terceiros.</p>
    <ol>
    <li>Básico</li>
    <ul>
    </ul>
    <li>Intermediádio</li>
    <ul>
    <li><a href='http://en.wikibooks.org/wiki/Git'>Wikibook sobre Git</a> (em inglês)</li>
    </ul>
    <li>Avançado</li>
    <ul>
    <li><a href='http://git-scm.com/docs'>Documentação ofical</a> (em inglês)</li>
    <li><a href='http://git-scm.com/book'>Pro Git</a> de Scott Chacon (em inglês)</li>
    </ul>
    </ol>
    ";

require('template.php');
?>
