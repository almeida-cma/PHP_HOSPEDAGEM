<?php
// Configuração do banco de dados
$servername = "sql312.infinityfree.com";
//$port = 7306;
$username = "if0_36294597";
$password = "NvbSzXvcoW";
$dbname = "if0_36294597_BD";

try {
    // Conexão com o banco de dados
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>
