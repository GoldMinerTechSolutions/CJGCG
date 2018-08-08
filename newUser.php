<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$nome = $_GET['NO_CLIENTE'];
$sexo = $_GET['SEXO'];
$nascimento = $_GET['DT_NASCIMENTO'];
$bairro = $_GET['NO_BAIRRO'];
$cidade = $_GET['NO_CIDADE'];
$endereco = $_GET['NO_ENDERECO'];
$cep =$_GET['CEP'];
$residencia = $_GET['TP_RESIDENCIA'];
$aluguel = $_GET['ALUGUEL'];
$client_pai = $_GET['CLIENT_PAI'];
$client_mae = $_GET['CLIENT_MAE'];
$naturalidade = $_GET['NATURALIDADE'];
$uf = $_GET['NO_UF'];
$est_civil = $_GET['ESTADO_CIVIL'];
$telefone_res = $_GET['TELEFONE_RES'];
$telefone_cel = $_GET['TELEFONE_CEL'];
$email = $_GET['EMAIL'];


$sql = "INSERT INTO client (NO_CLIENTE, SEXO, DT_NASCIMENTO, NO_BAIRRO, NO_CIDADE, NO_ENDERECO, CEP, TP_RESIDENCIA, ALUGUEL, CLIENT_PAI, CLIENT_MAE, NATURALIDADE, NO_UF, ESTADO_CIVIL, TELEFONE_RES, TELEFONE_CEL, EMAIL) VALUES ('$nome', '$sexo', '$nascimento', '$bairro', '$cidade', '$endereco', '$cep', '$residencia', '$aluguel', '$client_pai', '$client_mae', '$naturalidade', '$uf', '$est_civil', '$telefone_res', '$telefone_cel', '$email')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>