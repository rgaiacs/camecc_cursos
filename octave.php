<?php
include('header.php');
$menu = set_header('courses');

require('news_last.php');

$main = "<h2>GNU Octave</h2>
    <p>\"GNU Octave é uma linguagem computacional, desenvolvida para computação matemática. Possui compatibilidade com Matlab, possuindo um grande número de funções semelhantes.\" (Fonte: <a href='http://pt.wikipedia.org/wiki/GNU_Octave'>http://pt.wikipedia.org/wiki/GNU_Octave</a>)</p>
    <p>Ainda não produzimos nenhuma material sobre GNU Octave. A seguir encontra-se uma lista de outros materiais produzido por terceiros.</p>
    <ol>
    <li>Básico</li>
    <ul>
    <li><a href='http://pt.wikibooks.org/wiki/GNU_Octave'>Wikibook sobre Gnu Octave</a></li>
    </ul>
    <li>Intermediádio</li>
    <ul>
    <li><a href='http://en.wikibooks.org/wiki/Octave_Programming_Tutorial'>Wikibook sobre GNU Octave</a> (em inglês)</li>
    </ul>
    <li>Avançado</li>
    <ul>
    <li><a href='http://www.gnu.org/software/octave/doc/interpreter/'>Documentação oficial</a> (em inglês)</li>
    </ul>
    </ol>
    ";

require('template.php');
?>
