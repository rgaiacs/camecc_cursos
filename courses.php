<?php
$host = "localhost";
$user = "postgres";
$pswd = "psql";
$dbname = "camecc_cursos";
$con = null;

$con = @pg_connect("host=$host user=$user
    password=$pswd dbname=$dbname");

if(!$con){
    // echo "<h3>O sistema não está conectado à  [$dbname] em [$host].</h3>";
}
else{
    // echo "<h3>O sistema está conectado à  [$dbname] em [$host].</h3>";
}

$menu = "<li><a href='index.php' title='Início'>Início</a></li>
<li><a href='about.php' title='Sobre Nós'>Sobre Nós</a></li>
<li class='select'><a href='courses.php' title='Cursos'>Cursos</a></li>
<li><a href='contact.php' title='Contato'>Contato</a></li>";

$news = "";

$result = pg_query($con, "SELECT id, titulo FROM noticias LIMIT 5");
if (!$result) {
      echo "Erro na consulta.<br>";
        exit;
}

while ($row = pg_fetch_row($result)) {
    $news = $news . "<li><a href='news?id=$row[0]'>$row[1]</a></li>";
}

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

@pg_close($con);

require('template.php');
?>
