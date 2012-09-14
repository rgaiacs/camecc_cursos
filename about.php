<?php
include('header.php');
$menu = set_header('about');

require('news_last.php');

$main = "<h2>História</h2>
<p>O CAMECC Cursos foi idealizado por Raniere Silva em 2012 para organizar o curso de LaTeX preparado por ele e manter o material do curso disponível a todos.</p>
<h2>Missão</h2>
<p>Manter material de auxílio técnico (referentes a softwares livres e/ou abertos) para os alunos vinculados ao IMECC e organizar cursos com base neste material.</p>
<h2>Valores</h2>
<p>Liberdade e honestidade.</p>
<h2>Equipe</h2>
<p>Hoje, o CAMECC Cursos encontra-se sobre responsabilidade de Raniere Silva com a colaboração de:
<ul>
<li>Vinícius Ignácio.</li>
</ul></p>
<p>A seguir uma lista de antigos colaboradores:</p>";

require('template.php');
?>
