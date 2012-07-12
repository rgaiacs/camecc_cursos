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
<li class='select'><a href='about.php' title='Sobre Nós'>Sobre Nós</a></li>
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

$main = "<h2>História</h2>
<p>O CAMECC Cursos foi idealizado por Raniere Silva em 2012 para organizar o curso de LaTeX preparado por ele e manter o material do curso disponível a todos.</p>
<h2>Missão</h2>
<p>Manter material de auxílio técnico aos alunos vinculados ao IMECC e organizar cursos com base neste material.</p>
<h2>Valores</h2>
<p>Liberdade e honestidade.</p>
<h2>Equipe</h2>
<p>Hoje, o CAMECC Cursos encontra-se sobre direção de [[Diretor]] com a colaboração de [[Colaboradores]].</p>
<p>A seguir uma lista de antigos colaboradores: [[Antigos Colaboradores]]</p>";

@pg_close($con);

require('template.php');
?>
