<?php


require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(4);

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("h");
//echo json_encode($search);

//Carrega usuario usando login e senha
$usuario = new Usuario();
$usuario->login("thiago", "09876543");

echo $usuario;

?>