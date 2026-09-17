<?php
//ENTRADA
$n1= (float)$_POST['n1'];
$n2= (float)$_POST['n2'];

//PROCESSAMENTO
$adicao=$n1+$n2;
$subtracao = $n1 + $n2;
$multiplicacao = $n1 * $n2;

$divisaoValida = $n2 !=0; //Atribuir o resultado logico na variavel
if ($divisaoValida==true)
{
    $divisao=$n1/$n2;
    $modulo=$n1%$n2;
}

$divisao = $n1 / $n2;
$modulo = $n1 % $n2;
$potencia = $n1 ** $n2;
$concatenacao = $n1.$n2; //o ponto ele JUNTA e texto, não soma como número

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações aritméticas</title>
    
</head>
<body>
    <div class= "card">
        <h1>Operações Aritméticas</h1>
        <h1>Resultados</h1>
        <hr>
        <h3>
            <?php echo "$n1 + $n2 = $adicao"; ?>
        </h3>
        <h3>
            <?php echo "$n1 - $n2 = $subtracao"; ?>
        </h3>
        <h3>
            <?php echo "$n1 x $n2 = $multiplicacao"; ?>
        </h3>
        <h3>
            <?php
            if ($divisaoValida ==true)
            {
                echo "$n1 % $n2 = $divisao";
                echo "<br>";
                echo "$n1 modulo $n2 = ".number_format($modulo,2, ',',',');
            }
           else
           {
            echo "<h1>Não há divisão por zero!</h1>";
           }
           ?>
        </h3>
        <h3>
            <?php echo "$n1<sup> $n2 </sup>= $potencia"; ?>
        </h3>
        <h3>
            <?php echo "$n1 | $n2 = $concatenacao"; ?>
        </h3>

    <a href="index.php">voltar</a>
       
    <div>
    
</body>
</html>
