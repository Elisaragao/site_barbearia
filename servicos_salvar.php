<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formServico" action="" method="post">
            <div id="body">
            <?php
            //PASSO 1: INCLUIR AS DEFINIÇÕES DE ACESSO A DADOS 
            include "conexao_bd.php";
            //PASSO 2: CAPTURAR OS VALORES DIGITADOS
            $descricao = $_POST['txtDescricao'];
            $preco = $_POST['txtPreco'];
            //PASSO 3: MONTAR O COMANDO SQL
            $sql = "INSERT INTO servico (descricao, preco)";
            $sql .= "VALUES ('$descricao', '$preco')";
            //PASSO 4: 
            if(executarComando($sql))
            {
                echo "<h4> Serviço adicionado com sucesso! </h4>";
            }
            else
            {
                echo "<h4> Falha na conexão </h4>";
            }
            ?>
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
