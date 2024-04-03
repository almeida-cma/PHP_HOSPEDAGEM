<?php
// Configuração do banco de dados
$servername = "";
//$port = 7306;
$username = "";
$password = "";
$dbname = "";

try {
    // Conexão com o banco de dados
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>
