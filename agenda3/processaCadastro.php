<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<title>Mensagem</title> 
</head> 
<body> 
<div class="w3-container w3-teal"> 

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $txtNome = $_POST["txtNome"];
    $txtValorCompra = $_POST["txtValorCompra"];
    $formaPagamento = $_POST["cmbPag"];
    $desconto = 0;

    // ERRO: cálculo incorreto para boleto e depósito
    if ($formaPagamento == "cartaoCredito") {
        $desconto = 0;
        $mensagem = "Olá $txtNome, sua compra de R$ $txtValorCompra foi realizada com cartão de crédito. Não há desconto.";
	$pagamento = "Cartão de crédito";
    } elseif ($formaPagamento == "boleto") {
        $desconto = $txtValorCompra * 0.08; // ERRO: deveria ser 8% para boleto
        $mensagem = "Olá $txtNome, sua compra de R$ $txtValorCompra foi realizada com boleto. Seu desconto é de R$ $desconto.";
	$pagamento = "Boleto";
    } elseif ($formaPagamento == "deposito") {
        $desconto = $txtValorCompra * 0.1; // ERRO: deveria ser 10% para depósito
        $mensagem = "Olá $txtNome, sua compra de R$ $txtValorCompra foi realizada com depósito. Seu desconto é de R$ $desconto.";
	$pagamento = "Depósito";

    } else {
        $mensagem = "Forma de pagamento inválida.";
    }

    // ERRO: mensagem final não mostra valor com desconto
    echo "<div class='w3-panel w3-green'>$mensagem</div>";
}




echo "<h2>As seguintes respostas foram salvas com sucesso: </h2>";

echo  "Nome completo do cliente: $txtNome<br>"; 
echo  "Valor da compra: $txtValorCompra<br>"; 
echo  "Forma de pagamento:". $pagamento."<br>"; 


echo "<h2> Obrigado! </h2>";

/*
O erro presente no código estava referente aos descontos que estavam sendo aplicados nos valores de acordo com a forma errada de pagamento, ou seja, os descontos atribuídos em decimal estavam invertidos em relação ao valor percentual presentes nos campos boleto  e depósito.

*/

?>

</div> 
</body> 
</html>


