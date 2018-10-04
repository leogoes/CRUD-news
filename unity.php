<?php

session_start();

$mysqli = new mysqli('localhost:3307','root','','novasnoticias') or die (mysqli_error($mysqli));

$id = 0;
$update = false;
$titulo = '';
$slug = '';
$descricao ='';
$palavras_chave ='';
$conteudo='';

if (isset($_POST['save'])){ // checa se o botao foi pressionado //
        $titulo = $_POST['titulo'];
        $slug = $_POST['slug'];
		$descricao = $_POST['descricao'];
		$palavras_chave = $_POST['palavras_chave'];
		$conteudo = $_POST['conteudo'];

	$_SESSION['message'] = "Sua Notícia foi salva!";
	$_SESSION['msg_type'] = "Sucesso";

		header("location: inicio.php");


        $mysqli->query("INSERT INTO noticias (titulo, slug, descricao, palavras_chave, conteudo) VALUES ('$titulo', '$slug', '$descricao', '$palavras_chave', '$conteudo')") or
                die($mysqli->error);

}

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM noticias WHERE id=$id") 
	or die ($mysqli->error());

	$_SESSION['message'] = "Sua Notícia foi apagada!";
	$_SESSION['msg_type'] = "Cuidado";

	header("location: inicio.php");
} 

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM noticias WHERE id=$id")
	or die ($mysqli->error());
	
	if (count($result)==1){
		$row = $result->fetch_array();
        $titulo = $row['titulo'];
		$slug = $row['slug'];
		$descricao = $row['descricao'];
		$palavras_chave = $row['palavras_chave'];
		$conteudo = $row['conteudo'];

	} 
}

if (isset($_POST['update'])){
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$slug = $_POST['slug'];
	$descricao = $_POST['descricao'];
	$palavras_chave = $_POST['palavras_chave'];
	$conteudo = $_POST['conteudo'];

	$mysqli->query("UPDATE noticias SET titulo='$titulo', slug='$slug', descricao ='$descricao', palavras_chave = '$palavras_chave', conteudo = '$conteudo' WHERE id=$id")
	   or die ($mysqli->error());

	$_SESSION ['message'] = "Sua Notícia foi atualizada!";
	$_SESSION ['msg_type'] = "cuidado";

		header('location: inicio.php');


}
