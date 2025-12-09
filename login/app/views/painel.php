<?php
session_start();

if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>

    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['nome']); ?></h1>

    <a href="index.php">
        <button>SAIR</button>
    </a>

</body>
</html>

