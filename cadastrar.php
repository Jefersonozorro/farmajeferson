<?php 
//require 'conexao.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar Medicamento</title>
 
</head>
<body>
    <h1>Cadastro do Medicamento </h1>
    <form action="inserir.php" method="post">
            <div>
            <input type="text" name="Nome do medicamento" id="NomedoMedicamento" placeholder="Nome do Medicamento" required><br><br>
            <input type="number" name="Quantidade do medicamento" id="QTDMedicamento " placeholder="Quantidade do medicamento" required><br><br>
            <input type="number" name="preço Unitario" id=" precound " placeholder="Preço Unitario" required><br><br>
            <input type="text" name="categoria" id=" categoria " placeholder="Categoria Do Medicamento" required><br><br>
            <input type="date" name="validade" id=" validade " placeholder="Validade Do Medicamento" required><br><br>
            <button type="submit">Salvar</button>
            </div>   
    </form>

</body>
</html>