<?php
$menu = "<li><a href='index.php' title='Início'>Início</a></li>
<li><a href='about.php' title='Sobre Nós'>Sobre Nós</a></li>
<li class='select'><a href='courses.php' title='Cursos'>Cursos</a></li>
<li><a href='contact.php' title='Contato'>Contato</a></li>";
$news = "<li>Anúncio do curso de LaTeX.</li>";
$main = "<h2>Cursos Existentes</h2>
    <p>Os cursos a seguir já foram ministrados ao menos uma vez (para novo oferecimento, entre em contato).
    <ul>
    <li>LaTeX</li>
    </ul>
    </p>
    <h2>Cursos Em Desenvolvimento</h2>
    <p>Os cursos a seguir estão em desenvolvimentos e serão oferecidos muito em breve. Caso tenha interesse de contribuir, entre em contato com o responsável.</p>
    <h2>Futuros Cursos</h2>
    <p>Os cursos a seguir são aguardados por vários alunos mas ninguém começou a prepará-lo. Se tiver interesse de iniciar algum, entre em contato conosco.
    <ul>
    <li>Octave</li>
    <li>R</li>
    <li>GeoGebra</li>
    </ul>
    </p>
    <p>Acredita-se que também tenha demanda para os cursos abaixo.
    <ul>
    <li>Programação web (html, css, php, javascript, ...)</li>
    <li>Maxima</li>
    <li>Python</li>
    <li>Moodle</li>
    <li>Vim</li>
    <li>Emacs</li>
    </ul></p>";

require('template.php');
?>
