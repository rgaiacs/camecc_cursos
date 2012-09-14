<?php
include('header.php');
$menu = set_header('courses');

require('news_last.php');

$main = "<h2>R</h2>
    <p>\"R é uma linguagem e um ambiente de desenvolvimento integrado, para cálculos estatísticos e gráficos.\" (Fonte:<a href='http://pt.wikipedia.org/wiki/R_%28linguagem_de_programa%C3%A7%C3%A3o%29'>http://pt.wikipedia.org/wiki/R_(linguagem_de_programação)</a>)</p>
    <p>Ainda não produzimos nenhum material sobre R. A seguir encontra-se uma lista de outros materiais produzidos por terceiros.</p>
    <ol>
    <li>Básico</li>
    <ul>
    <li><a href='http://pt.wikibooks.org/wiki/R_(linguagem_de_programação)'>Wikibook sobre R</a></li>
    </ul>
    <li>Intermediádio</li>
    <ul>
    <li><a href='http://en.wikibooks.org/wiki/R_Programming'>Wikibook sobre R</a> (em inglês)</li>
    </ul>
    <li>Avançado</li>
    <ul>
    <li><a href='http://cran.r-project.org/manuals.html'>Documentação oficial</a> (em inglês)</li>
    </ul>
    </ol>
    ";

require('template.php');
?>
