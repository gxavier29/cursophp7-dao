<?php  

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


//carrega um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;


//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);



//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);


//carrega um usuario usando login e a senha
//$usuario = new Usuario();
//$usuario->login("user", "12345");
//echo $usuario;

//INSERT - Criando novo usuario
//$aluno = new Usuario("gabriel", "xxxx");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(10);

$usuario->update("zelhao", "101010");

echo $usuario;


?>