<?php
include('header.php');
$menu = set_header('courses');

require('news_last.php');

$main = "<h2>Cursos Existentes</h2>
    <p>Os cursos a seguir já foram ministrados ao menos uma vez (<a href='contact.php'>para novo oferecimento, entre em contato</a>).
    <ul>
    <li><a href='latex.php'>LaTeX</a></li>
    </ul>
    </p>
    <h2>Cursos Em Desenvolvimento</h2>
    <p>Os cursos a seguir estão em desenvolvimentos e serão oferecidos muito em breve. Caso tenha interesse de contribuir, entre em contato com o responsável.</p>
    <h2>Futuros Cursos</h2>
    <p>Os cursos a seguir são aguardados por vários alunos mas ninguém começou a prepará-lo. Se tiver interesse de iniciar algum dê uma olhada em <a href='write_tools.php'>ferramentas para criação de cursos</a> e entre em <a href='contact.php'>contato</a> conosco.
    <ul>
    <li><a href='octave.php'>Octave</a></li>
    <li><a href='r.php'>R</a></li>
    <li>GeoGebra</li>
    </ul>
    </p>
    <p>Acredita-se que também tenha demanda para os cursos abaixo.
    <ul>
    <li>Programação web (html, css, php, javascript, ...)</li>
    <li>Maxima</li>
    <li><a href='python.php'>Python</a></li>
    <li>Moodle</li>
    <li><a href='git.php'>Git</a></li>
    <li>Vim</li>
    <li>Emacs</li>
    </ul></p>";

require('template.php');
?>
