<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>

<?php
    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoproduto =$_POST['nome_do_produto']??'';
    

    
    /*abri conexao*/
    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");

    if(!$conexao){
        die("<h3>Erro</h3>".mysqli_connect_error());
    }

    #inserir os dados

    $sql = " delete from tbcadastropeca where codigoproduto ='$codigodoproduto' and nomeProduto='$nomedoproduto'";

    $resultado = mysqli_query($conexao,$sql);
                    

    $linha = mysqli_affected_rows($conexao);
    
    if ($linha > 0 ) {
        mysqli_close($conexao);
        echo "    <div style='display: flex; justify-content: center;'>"; 
        echo "        <div class='box_cinza_claro' style='background: #f0f0f0; border: 1px solid #ccc; border-radius: 4px; padding: 10px 20px;'>"; 
        
        echo"<h1> Excluido com SUCESSO</h1>";
        echo "        </div>";
        header('Refresh: 2; url=cadastro_de_produtos.php');
        exit; 
        

    }

    else {
        mysqli_close($conexao);
       
        echo "<link rel='stylesheet' href='css/style.css'>"; 
        echo "<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 40px; font-family: sans-serif;'>"; 
        
        // Texto de aviso no topo, destacado e elegante
        echo "<p style='color: #666; font-size: 1.1rem; margin-bottom: 20px; font-weight: 500; text-align: center;'>Nenhum Produto foi Excluído.<br>Verifique se o nome e o código estão corretos.</p>";

        // Bloco dos botões alinhados
        echo "    <div style='display: flex; justify-content: center;'>"; 
        echo "        <div class='box_cinza_claro' style='background: #f0f0f0; border: 1px solid #ccc; border-radius: 4px; padding: 10px 20px;'>"; 
        echo "            <a class='box_letra' href='cadastro_de_produtos.php' style='text-decoration: none; color: #333; font-weight: bold;'> Cadastro de Produtos </a>"; 
        echo "        </div>"; 
        echo "        <div style='width: 15px;'></div>"; // Corrigido o erro da aspa que sumia com o botão do Menu
        echo "        <div class='box_cinza_claro' style='background: #f0f0f0; border: 1px solid #ccc; border-radius: 4px; padding: 10px 20px;'>"; 
        echo "            <a class='box_letra' href='../navegacao.php' style='text-decoration: none; color: #333; font-weight: bold;'> Menu </a>"; 
        echo "        </div>"; 
        echo "    </div>"; 
        echo "</div>"; 
        exit;
    }



    //header('Location:discografia_listagem.php');



?>