<?php 

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);



//carrega um usário

//$root = new Usuario();
//$root->loadById(1);

//echo $root;

//carrega uma lista de usuários


//$lista = Usuario::getList();

//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login

//$search = Usuario::search("jo");

//echo json_encode($search);

//carrega um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("jose", "123456");
//
//echo $usuario;

//Criando um novo usuário INSERT

//$aluno = new Usuario("aluno", "@aluno");

//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(8);

$usuario->update("professor", "12344411");

echo $usuario;
 ?>