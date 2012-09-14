<?php
include('header.php');
$menu = set_header('courses');

require('news_last.php');

$main = "<h2>Python</h2>
    <p>\"Python é uma linguagem de programação de alto nível, interpretada, imperativa, orientada a objetos, de tipagem dinâmica e forte.\" (Fonte:<a href='http://pt.wikipedia.org/wiki/Python'>http://pt.wikipedia.org/wiki/Python</a>)</p>
    <p>Ainda não produzimos nenhum material sobre Python. A seguir encontra-se uma lista de outros materiais produzidos por terceiros.</p>
    <ol>
    <li>Básico</li>
    <ul>
    <li><a href='http://pt.wikibooks.org/wiki/Python'>Wikibook sobre Python</a></li>
    <li><a href='http://en.wikibooks.org/wiki/A_Beginner's_Python_Tutorial'>Wikibook sobre Python: A Beginner's Python Tutorial</a> (em inglês)</li>
    </ul>
    <li>Intermediádio</li>
    <ul>
    <li><a href='http://en.wikibooks.org/wiki/Python_Programming'>Wikibook sobre Python: Python Programming</a> (em inglês)</li>
    </ul>
    <li>Avançado</li>
    <ul>
    <li><a href='http://docs.python.org/py3k/'>Documentação oficial</a> (em inglês)</li>
    </ul>
    </ol>
    ";

require('template.php');
?>
