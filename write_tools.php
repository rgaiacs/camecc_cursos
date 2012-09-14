<?php
include('header.php');
$menu = set_header('courses');

require('news_last.php');

$main = "<h2>Ferramentas para criação de cursos</h2>
    <p>Nesta página encontra-se listado (e comentado) as ferramentas que são utilizadas para a produção de algum curso.</p>
    <h3>LaTeX</h3>
    <p><a href='http://latex-project.org/'>LaTeX</a> é uma linguagem de marcação muito utilizada para produção de textos científicos, incluindo livros.</p>
    <p>Recomenda-se utilizar o LaTeX por ser uma ferramenta estável, com pacotes que facilitam várias atividades, e com elevado grau de personalização.</p>
    <h3>Sphinx</h3>
    <p><a href='http://sphinx.pocoo.org/'>Sphinx</a> é uma ferramenta para produção da documentação de softwares que utiliza a linguagem de marcação reStructuredText.</p>
    <p>Embora bem mais nova que o LaTeX, hoje é utilizada em vários projetos (principalmente relacionados ao Python) e mais fácil de aprender que o LaTeX.</p>
    <h3>Writer (do LibreOffice)</h3>
    <p>Embora seja possível utilizar o <a href='http://www.libreoffice.org'>Writer</a>, recomenda-se não utilizá-lo.</p>
    <h3>Git</h3>
    <p><a href='http://www.git-scm.com/'>Git</a> é um sistema de controle de versão distribuído que pode ser utilizado em conjunto com o LaTeX e/ou o Sphinx.</p>
    <p>Recomenda-se utilizar o Git para facilitar a colaboração de outras pessoas.</p>
    <h3>Mercurial</h3>
    <p><a href='http://mercurial.selenic.com/'>Mercurial</a> também é um sistema de controle de versão distribuído (escrito em Python) que pode ser utilizado com o LaTeX e/ou o Sphinx.</p>
    <p>Da mesma forma que o Git, recomenda-se utilizá-lo para facilitar a colaboração de outras pessoas.<p>
    ";

require('template.php');
?>
