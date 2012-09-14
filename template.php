<html>
<head>
<meta charset="utf-8">
<title>CAMECC Cursos - Início</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="container">
        <div id="header">
            <a href='index.php'><img src="images/camecc_cursos_logo.png" alt="logo" name="logo" height="140" id="logo" /></a>
            <ul class="menu">
                <?php echo $menu; ?>
            </ul>
        </div>
        <div id="content">
            <div id="news">
                <h2>Últimas Notícias</h2>
                <ul>
                    <?php echo $news; ?>
                </ul>
                <a href='news.php'>Mais notícias</a>
            </div>
            <div id="main">
                <?php echo $main; ?>
            </div>
            <div class="clear"></div>
        </div>
        <div id="footer">
            <table width=100%>
                <tr>
                    <td class='c1'>
                        Última atualização em Fri Jul 20 09:22:27 BRT 2012.<br />JavaScript license information
                    </td>
                    <td>
                        Esta página não é uma publicação oficial da Unicamp, seu conteúdo não foi examinado e/ou editado por esta instituição. A responsabilidade por seu conteúdo é exclusivamente do autor.<br />Copyright &copy; <a href='http://www.ime.unicamp.br/~camecc'>CAMECC</a>. Designed by <a href="mailto:r.gaia.cs@gmail.com" >Raniere Silva</a>.
                    </td>
                </tr>
            </table>

        </div>
    </div>
</body>
</html>
