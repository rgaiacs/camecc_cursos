<?php
include('header.php');
$menu = set_header('courses');

require('news_last.php');

$main = "<h2>LaTeX</h2>
    <p>\"LaTeX é um conjunto de macros para o processamento de textos TeX, utilizado amplamente para a produção de textos matemáticos e científicos devido à sua alta qualidade tipográfica.\" (Fonte: <a href='http://pt.wikipedia.org/wiki/LaTeX'>http://pt.wikipedia.org/wiki/LaTeX</a>)</p>
    <p>O material sobre LaTeX mantido por nós encontra-se disponível em <a href='latex_own.php'>latex_own.php</a>. A seguir encontra-se uma lista de outros materiais produzidos por terceiros.</p>
    <ol>
    <li>Básico</li>
    <ul>
    </ul>
    <li>Intermediádio</li>
    <ul>
    <li><a href='http://pt.wikibooks.org/wiki/Latex'>Wikibook sobre LaTeX</a></li>
    </ul>
    <li>Avançado</li>
    <ul>
    <li><a href='http://en.wikibooks.org/wiki/LaTeX/'>Wikibook sobre LaTeX</a> (em inglês)</li>
    </ul>
    </ol>
    ";

require('template.php');
?>
