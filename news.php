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

if(!isset($_GET["id"]) || empty($_GET["id"])){
    $result = pg_query($con, "SELECT id, data, titulo FROM noticias");
    if (!$result) {
          echo "Erro na consulta.<br>";
            exit;
    }

    $main = "<h2>Notícias</h2>
        <table>
        <tr>
        <th>Data</th>
        <th>Título</th>
        </tr>";

    while ($row = pg_fetch_row($result)) {
        $main = $main . "<tr><td>$row[1]</td><td><a href='news?id=$row[0]'>$row[2]</a></td></tr>";
    }

    $main = $main . "</table>";
}
else{
    $result = pg_query($con, "SELECT data, titulo, mensagem FROM noticias WHERE id=" . $_GET["id"]);
    $row = pg_fetch_row($result);
    $main = "<h2>Notícia</h2><p>Data: $row[0]</p><p>Título: $row[1]</p><p>Mensagem: $row[2]</p>";
}

@pg_close($con);

require('template.php');
?>
