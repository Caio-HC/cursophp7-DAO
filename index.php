<?php
require_once("config.php");


/*$root = new Usuario();
$root->loadById(1);
echo $root;

busca tudo
$lista = Usuario::getList();
echo json_encode($lista);
*/
/* Faz a busca pelo login
$search = Usuario::search("a");
echo json_encode($search);
*/
//Carega via autentificação
$usuario = new Usuario();
$usuario->login("Caio", "123456");
echo $usuario;
?>
