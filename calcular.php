<?php 
//OBTER OS DADOS
$nome = $_POST['nome'];
$total = (float) $_POST['total'];
$idade = (int) $_POST['idade'];
if (isset($_POST['cartao']))
{
    $cartao= "sim";
}
else
{
    $cartao= "não";
}
//processamento
$descontoCartao=0;
if ($idade==0) {
    $descontoIdade=0;  
}
else if (idade==1)
{
    $descontoIdade=5;
}
else
{
$descontoIdade=7;

}//fila if da idade
if ($cartao="sim") 
{
    $descontoCartao= 5;
}
$valorDescontoIdade=$total*($descontoIdade/100);
$valorDescontoCartao=$total*($descontoCartao/100);
$valorfinal= $total- $valorDescontoIdade - $valorDescontoCartao;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia Paracetaloka</title>
</head>
<body>
    <div>
        <h1>Farmácia Paracetaloka
            <hr>
            <ol>
                 <?php echo "Cliente: $nome" ?>
               <?php echo "Total do pedido: $total" ?><br>
               <?php echo "Desconto pela faixa etária: $valorDescontoIdade" ?><br>
            <?php echo "Desconto Fidelidade: $valorDescontoCartao" ?><br>
                 <?php echo "total a pagar: $valorfinal" ?><br>
    </div>
    
</body>
</html>