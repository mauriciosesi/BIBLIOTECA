<?php
include "config.php";
if (!$conn){
    die("Falha na conexão {mysqli_connect_error()}");
}

//receba os dados do formulário 
$titulo = $_POST['Titulo'];
$autor = $_POST['Autor'];
$editora = $_POST['Editora'];
$sinopse = $_POST['Sinopse'];
$anopublicacao = $_POST['AnoPublicacao'];
$genero =$_POST['Genero'];
$paginas = $_POST['Paginas'];


// criar variáveis para inserir o resistro
$sql ="INSERT INTO `livros`
(`Titulo`, `Autor`, `Editora`, `Sinopse`, `AnoPublicacao`, `Genero`, `Paginas`) VALUES 
('$titulo','$autor','$editora','$sinopse','$anopublicacao','$genero','$paginas')";

// Executa a consulta SQL. falhar, exibe o erro do banco de dados
$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $conn));

if($query){
    echo "<center>";
    echo "Cadrasto realizado com sucesso!! <br>";
    echo "<a href='index.php'><button title='Home pago'>Voltar<button></a>";
    echo "</center>";
} else {
 echo "<center>";
 echo "<a href='index.php'><button title='Home pago'>Voltar<button></a>";
 echo "</center>";
}
 ?>      