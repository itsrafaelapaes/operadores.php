<?php
//OBTER OS DADOS (ENTRADA)
$Nome = $_POST['tnome'];
$anoNasc = (int) $_POST['tano'];
$anoAtual = (int) date('Y'); //Obtem o ano do sistema

//PROCESSAMENTO
$Idade =$anoAtual - $anoNasc;

$dias = $Idade* 365.25;
$horas = $dias* 24;
$minutos = $horas* 60;

$batimentos = $minutos* 75;
$respiracoes = $minutos* 17;
$bat_restantes = (90 * 365.25 * 24 * 60 * 75) - $batimentos;

//SAIDA
echo "<h2> $Nome, sua idade é $Idade anos</h2>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo de vida</title>
</head>
<body>
    <h1>Tempo de vida</h1>
    <hr>
    <h2><?php echo "<h2>$Nome sua idade é: $Idade</h2>"; ?>
    <h2><?php echo "<h2>$Nome voce viveu: $dias dias</h2>"; ?>
    <h2><?php echo "<h2>$Nome voce viveu: $horas horas</h2>"; ?>
    <h2><?php echo "<h2>$Nome voce viveu: $minutos minutos</h2>"; ?>
    <h2><?php echo "<h2>$Nome voce teve: $batimentos batimentos no total</h2>"; ?>
    <h2><?php echo "<h2>$Nome voce teve: $respiracoes respiracoes no total</h2>"; ?>
    <h2><?php echo "<h2>$Nome voce tem $bat_restantes de batimentos restantes </h2>"; ?>

</body>
</html>