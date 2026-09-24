<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia Paracetaloka</title>
    <h1>Farmácia Paracetaloka</h1>
</head>
<body>
    <form action="calcular.php" method= "post">
        <label>Nome do Cliente:</label>
        <input type="text" name="nome" required><br>
        <br>

        <label>Total do pedido:</label>
        <input type="number" name="total" required><br>
        <br>

        <label>Faixa etária:</label>
        <br>
        <input type="radio" name="idade" value= "0" required>Menor que 50 anos<br>
        <input type="radio" name="idade" value= "1" required>Entre 51 e 70<br>
        <input type="radio" name="idade" value= "2" required>Maior que 70 anos<br>
        

        <label>
        <input type="checkbox" name="cartao">
        Cartão fidelidade
        </label><br>      
        <br>
        <button type="submit"> Calcular </button>
        <button type="submit"> Limpar </button>
</form>
    
</body>
</html>