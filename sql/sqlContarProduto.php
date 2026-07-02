<?php
    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoproduto =$_POST['nome_do_produto']??'';
    $fabricante= $_POST['fabricante']??'';
    $pesodoproduto =$_POST['peso_do_produto']??'';
    $alturadoproduto =$_POST['altura_do_produto']??'';
    $comprimentodoproduto =$_POST['comprimento_do_produto']??'';

    
    /*abri conexao*/
    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");

    if(!$conexao){
        die("<h3>Erro</h3>".mysqli_connect_error());
    }

    #inserir os dados

    $sql = " select sum(quantidadeproduto) as quantidadetotal from tbentradaestoque where nomeproduto='$nomedoproduto'";

    $resultado = mysqli_query($conexao,$sql);
                    
  
    
    if($resultado){
        $linha = mysqli_fetch_assoc($resultado);
        mysqli_close($conexao);

        while($linha_resultado = mysqli_fetch_array($resultado))
            {
               
                echo"<tr class =''>";
                echo "<td class =''> {$linha_resultado['dataEntradaProduto']} </td>";
                echo "<td> {$linha_resultado['codigoProduto']} </td>";
                echo "<td> {$linha_resultado['nomeProduto']} </td>";

                echo "<td> {$linha_resultado['quantidadeProduto']} </td>";
                
                echo"</tr>";
            }

        // eader('Refresh: 2; url=../produtos/quantidade_produto.php');
        exit;      


    }else {
        mysqli_close($conexao);
       
        echo"<link rel ='stylesheet' href='css/style.css'>
            <div style='display: flex; justify-content: center;' > 
                <div class='box_cinza_claro'>
                    <a class='box_letra' href='cadastro_de_produtos.php'>
                    Voltar
                </a>
                </div>
            </div>";
        echo "<h1 class='box_letra' >Nao foi exluido!</h1>";
        exit;
    }



    //header('Location:discografia_listagem.php');



?>