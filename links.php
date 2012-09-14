<?php
include('header.php');
$menu = set_header('links');

require('news_last.php');

$main = "<h2>Links úteis</h2>
    <table cellspacing='10'>
    <tr>
    <td><a href='http://www.imecc.unicamp.br/~camecc'><img src='images/camecc_logo.png' alt='logo' name='logo' height='100' id='logo_camecc' /></a></td>
    <td><a href='http://www.dceunicamp.org.br/'><img src='images/dce.png' alt='logo' name='logo' height='100' id='logo_dce' /></a></td>
    <td><a href='http://www.ime.unicamp.br/'><img src='images/imecc.png' alt='logo' name='logo' height='100' id='logo_imecc' /></a></td>
    <td><a href='http://www.unicamp.br/'><img src='images/unicamp.png' alt='logo' name='logo' height='100' id='logo_unicamp' /></a></td>
    </tr>
    </table>";

require('template.php');
?>
