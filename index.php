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

$menu = "<li class='select'><a href='index.php' title='Início'>Início</a></li>
<li><a href='about.php' title='Sobre Nós'>Sobre Nós</a></li>
<li><a href='courses.php' title='Cursos'>Cursos</a></li>
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

$main = "<h2>Bem vindo.</h2>
    <p>O CAMECC Cursos é um órgão do CAMECC responsável por manter material relacionado a softwares livres (normalmente sob a licença GNU GPL) de interesse dos alunos do IMECC.</p>
    <p>Todo o material está disponibilidado sob uma das seguintes licenças <a href='http://creativecommons.org.br/'>Creative Commons</a>:
    <ul>
    <li><a href='http://creativecommons.org/licenses/by/3.0'>Atribuição (CC BY)</a>,</li>
    <li><a href='http://creativecommons.org/licenses/by-sa/3.0'>Atribuição-CompartilhaIgual (CC BY-SA)</a>,</li>
    <li><a href='http://creativecommons.org/licenses/by-nc/3.0'>Atribuição-NãoComercial (CC BY-NC)</a>,</li>
    </ul>
    no formato pdf (para visualização) e também no código LaTeX/HTML ou arquivo odf (para edição).</p>";

@pg_close($con);

require('template.php');
?>
