<?php
function set_header($select){
    $menu = "";
    if($select == 'index'){
        $menu = $menu . "<li class='select'><a href='index.php' title='Início'>Início</a></li>";
    }
    else{
        $menu = $menu . "<li><a href='index.php' title='Início'>Início</a></li>";
    }
    if($select == 'about'){
        $menu = $menu . "<li class='select'><a href='about.php' title='Sobre Nós'>Sobre Nós</a></li>";
    }
    else{
        $menu = $menu . "<li><a href='about.php' title='Sobre Nós'>Sobre Nós</a></li>";
    }
    if($select == 'courses'){
        $menu = $menu . "<li class='select'><a href='courses.php' title='Cursos'>Cursos</a></li>";
    }
    else{
        $menu = $menu . "<li><a href='courses.php' title='Cursos'>Cursos</a></li>";
    }
    if($select == 'contact'){
        $menu = $menu . "<li class='select'><a href='contact.php' title='Contato'>Contato</a></li>";
    }
    else{
        $menu = $menu . "<li><a href='contact.php' title='Contato'>Contato</a></li>";
    }
    if($select == 'links'){
        $menu = $menu . "<li class='select'><a href='links.php' title='Links'>Links</a></li>";
    }
    else{
        $menu = $menu . "<li><a href='links.php' title='Links'>Links</a></li>";
    }
    return $menu;
}
?>
