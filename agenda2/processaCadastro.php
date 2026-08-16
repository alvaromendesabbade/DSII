<?php 

$nome = $_POST["nome"];
$idade= $_POST["idade"];
$profissao = $_POST["profissao"];
$salario = $_POST["salario"];
$experiencia = $_POST["experiencia"];


echo "<h2>As seguintes respostas foram salvas com sucesso: </h2>";
echo "<br>";
echo  "Nome Completo: $nome<br>"; 
echo  "Idade: $idade<br>"; 
echo  "Profissão:". $profissao."<br>"; 
echo  "Salário: ". $salario."<br>"; 
echo  "Experiência anterior: ". $experiencia."<br>"; 

echo "<h2> Obrigado! </h2>";


?> 