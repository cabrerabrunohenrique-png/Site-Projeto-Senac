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
    

    
    try{
        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    }
    catch(mysqli_sql_exception $e){
        die ("Erro com o banco de dados"."<h1>Erro</h1> <a href='deletar_produto.php'>Voltar</a>" );
    }

    #inserir os dados

    $sql = " delete from tbcadastropeca where codigoproduto ='$codigodoproduto' and nomeProduto='$nomedoproduto'";

    $resultado = mysqli_query($conexao,$sql);
                    

    $linha = mysqli_affected_rows($conexao);
    
    if ($linha > 0 ) {
        mysqli_close($conexao);
        echo "<link rel ='stylesheet' href='../css/style.css'>";
            echo "
            <div class='success-container'>
                <div class='success-box'>
                    <h1 class='success-title' >Produto Excluido com Sucesso</h1>                  
                    <a class='btn-success success-text 'href='deletar_produto.php'>Voltar Cadastro</a>
                </div>
            </div>";  
        
        header('Refresh: 5; url=cadastro_de_produtos.php');
        exit; 
        

    }

    else {
        mysqli_close($conexao);
       
        echo "<link rel='stylesheet' href='../css/style.css'>"; 
        echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>";
        echo "<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 40px; font-family: sans-serif;'>"; 
        
        // Texto de aviso no topo, destacado e elegante
        echo "<p style='color: #666; font-size: 1.1rem; margin-bottom: 20px; font-weight: 500; text-align: center;'>Nenhum Produto foi Excluído.<br>Verifique se o nome e o código estão corretos.</p>";

        // Bloco dos botões alinhados
        echo "    <div style='display: flex; justify-content: center; '>"; 
         echo "        <div class='cp caixa  fontemenu ' style ='background-color: red'>"; 
        echo "            <a class='box_letra' href='deletar_produto.php' style='text-decoration: none; color: #333; font-weight: bold;'> Voltar</a>";
       
        echo "        </div>";
        echo "<div style='width: 15px;'></div>";
        echo "        <div class='cp caixa  fontemenu '>"; 
        echo "            <a class='box_letra' href='cadastro_de_produtos.php' style='text-decoration: none; color: #333; font-weight: bold;'> Cadastro de Produtos </a>"; 
        echo "        </div>"; 
        echo "        <div style='width: 15px;'></div>"; 
        echo "        <div class=' cp caixa  fontemenu  letraFundoAzul text-bg-info'> "; 
        echo "            <a class='box_letra ' href='../navegacao.php' style='text-decoration: none; color: #333; font-weight: bold;'> Menu </a>"; 
        echo "        </div>"; 
        echo "    </div>"; 
        echo "</div>"; 
        exit;
    }



    //header('Location:discografia_listagem.php');



?>