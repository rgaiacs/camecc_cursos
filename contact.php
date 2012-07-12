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
<li><a href='courses.php' title='Cursos'>Cursos</a></li>
<li class='select'><a href='contact.php' title='Contato'>Contato</a></li>";
$news = "";

$result = pg_query($con, "SELECT id, titulo FROM noticias LIMIT 5");
if (!$result) {
      echo "Erro na consulta.<br>";
        exit;
}

while ($row = pg_fetch_row($result)) {
    $news = $news . "<li><a href='news?id=$row[0]'>$row[1]</a></li>";
}

$main = "<p>A única forma de contato é por email:</p>";

@pg_close($con);

require('template.php');
?>
