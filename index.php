<html>
<head>
    <title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

echo 'Versão Atual do PHP: ' . phpversion() . '<br>';

$servername = "54.234.153.24";
$username = "root";
$password = "Senha123";
$database = "meubanco";

// Criar conexão
$link = new mysqli($servername, $username, $password, $database);

/* Verificar conexão */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// Gerar valores randômicos e estáticos para os campos
$AlunoID = rand(1, 999);
$Nome = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$Sobrenome = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$Endereco = "Rua Exemplo, " . rand(1, 1000);
$Cidade = "Cidade " . chr(rand(65, 90));
$Estado = "Estado " . chr(rand(65, 90));
$Pais = "Pais Exemplo";
$CEP = rand(10000, 99999) . "-" . rand(100, 999);
$DataNascimento = date('Y-m-d', strtotime('-' . rand(18, 30) . ' years'));
$Email = strtolower($Nome . "." . $Sobrenome . "@exemplo.com");
$Telefone = "+55 " . rand(10, 99) . " 9" . rand(1000, 9999) . "-" . rand(1000, 9999);
$Curso = "Curso " . chr(rand(65, 90));
$DataMatricula = date('Y-m-d');
$StatusMatricula = "Ativo";
$Host = gethostname();

// Query de inserção
$query = "INSERT INTO dados (
    AlunoID, Nome, Sobrenome, Endereco, Cidade, Estado, Pais, CEP, DataNascimento, Email, Telefone, Curso, DataMatricula, StatusMatricula, Host
) VALUES (
    '$AlunoID', '$Nome', '$Sobrenome', '$Endereco', '$Cidade', '$Estado', '$Pais', '$CEP', '$DataNascimento', '$Email', '$Telefone', '$Curso', '$DataMatricula', '$StatusMatricula', '$Host'
)";

if ($link->query($query) === TRUE) {
    echo "Novo registro criado com sucesso.";
} else {
    echo "Erro: " . $link->error;
}

?>
</body>
</html>

