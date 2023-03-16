<?php
    // variaveis
    $nome = $_POST['nome'];
    $cliente = $_POST['cliente'];
    $serasa = $_POST['serasa'];
    $emprestimo = $_POST['emprestimo'];
    $seguro_desemprego = $_POST['seguro'];
    $parcelas = $_POST['parcelas'];
    $valortotal = 0;

    $taxadejuros = 0.03;
    
    
    
   
    //calculo do juros
    if ($cliente == 0 ) {
        
        $valortotal += 35;
        
        if ($serasa >= 0 && $serasa <= 299){
            $taxadejuros = 0.20;
        } else if ($serasa >= 300 && $serasa <= 499) {
            $taxadejuros = 0.15;
        }  else if ($serasa >= 500 && $serasa <= 699) {
            $taxadejuros = 0.10;
        }  else if($serasa >= 700 && $serasa <= 1000) {
            $taxadejuros = 0.05;  
        }
 
    }

    
    $valortotal = ($taxadejuros * $emprestimo)**$parcelas ; // calculo do juros com o iof
    $valorparcelas = $valortotal/$parcelas;


    echo $nome;
    echo $taxadejuros;
    echo $parcelas;
    $valortotal = number_format($valortotal, 2, ",", ".");
    $valortotal = number_format($parcelas, 2, ",", ".");

?>
   
   <!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem-vindo(a) ao my Bank Simulador de Empréstimos</title>
        <link rel="stylesheet" href="styleIndex.css">

    </head>
    <body>
        
        <main style="font-size:1.2em;">
            <h1>Bem-vindo(a) ao my Bank<br>SIMULADOR DE EMPRÉSTIMOS</h1>
            <h2>Seu Empréstimo</h2><br>
            <p>Quantidade de parcelas: <?php
                echo("Parcelas: $parcelas");
            ?></p>
            <p>Valor de cada parcela: <?php
                echo("R$: $valorparcelas");
            ?></p>
            <p>Custo Efetivo Total: <?php
                echo("R$: $valortotal");
            ?></p>
            <br><br><br><br><br>
            <p><a style ="background-color: #c61d5e; border: none; color: white; padding: 16px 32px; text-decoration= none; margin: 4px 2px; cursor: pointer;" href ="index.html">Simular outro Empréstimo</a></p>
        </main>
        
    </body>
</html>