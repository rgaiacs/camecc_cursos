<?php
include('header.php');
$menu = set_header('courses');

require('news_last.php');

$main = "<h2>LaTeX</h2>
    <p>O primeiro curso de LaTeX foi desenvolvido voltado aos alunos do curso de licenciatura com uma carga horária de 4 horas. O material utilizado no primeiro curso encontra-se disponível abaixo e o código fonte em <a href='https://github.com/r-gaia-cs/latex_with_vim'>https://github.com/r-gaia-cs/latex_with_vim</a>.</p>
    <table>
    <tr>
    <th>Material</th>
    <th>Link para download</th>
    </tr>
    <tr>
    <td>Apostila</td>
    <td><a href='latex_files/camecc_lic.pdf'>latex_files/camecc_lic.pdf</a></td>
    </tr>
    <tr>
    <td>Aula 01</td>
    <td><a href='latex_files/slide01.pdf'>latex_files/slide01.pdf</a></td>
    </tr>
    <tr>
    <td>Exercício 01</td>
    <td><a href='latex_files/try11.pdf'>latex_files/try11.pdf</a></td>
    </tr>
    <tr>
    <td>Exercício 01 (solução)</td>
    <td><a href='latex_files/try11.tex'>latex_files/try11.tex</a></td>
    </tr>
    <tr>
    <td>Aula 02</td>
    <td><a href='latex_files/slide02.pdf'>latex_files/slide02.pdf</a></td>
    </tr>
    <tr>
    <td>Exercício 02</td>
    <td><a href='latex_files/try21.pdf'>latex_files/try21.pdf</a></td>
    </tr>
    <tr>
    <td>Exercício 02 (solução)</td>
    <td><a href='latex_files/try21.tex'>latex_files/try21.tex</a></td>
    </tr>
    <tr>
    <td>Aula 03</td>
    <td><a href='latex_files/slide03.pdf'>latex_files/slide03.pdf</a></td>
    </tr>
    <tr>
    <td>Exercício 03</td>
    <td><a href='latex_files/try31.pdf'>latex_files/try31.pdf</a></td>
    </tr>
    <tr>
    <td>Exercício 03 (solução)</td>
    <td><a href='latex_files/try31.tex'>latex_files/try31.tex</a></td>
    </tr>
    <tr>
    <td>Aula 04</td>
    <td><a href='latex_files/slide04.pdf'>latex_files/slide04.pdf</a></td>
    </tr>
    </table>";

require('template.php');
?>
