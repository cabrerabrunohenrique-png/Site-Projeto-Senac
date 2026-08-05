<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>
<?php
    
    $data = $_POST['data']??'';
    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoproduto =mb_strtolower(trim(preg_replace('/\s+/',' ',$_POST['nome_do_produto']??'')),'utf-8');
    $fabricante=mb_strtolower(trim(preg_replace('/\s+/',' ',$_POST['fabricante']??'')),'utf-8');
    $variavel = mb_strtolower( trim(preg_replace('/\s+/',' ', $_POST['variavel']??'')),'utf-8');
    $familia = mb_strtolower( trim  (preg_replace('/\s+/',' ',$_POST['familia']??'')),'utf-8');
    $categoria = mb_strtolower( trim (preg_replace('/\s+/',' ', $_POST['categoria']??'')),'utf-8');
    $preco= $_POST['preco']??'';
    /*abri conexao*/ 

    nomeEcodigo($codigodoproduto,$nomedoproduto);

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro</h1>". mysqli_connect_error());
    }




    $slq = "update tbcadastropeca set  fabricanteProduto ='$fabricante', variavelproduto ='$variavel',dataalteracao ='$data', familiaproduto ='$familia', categoriaproduto ='$categoria', preco='$preco'  where codigoproduto = '$codigodoproduto'";
    
    $resultado = mysqli_query($conexao ,$slq);

    $linha = mysqli_affected_rows($conexao);
   
   
    if ($linha >0) {
        mysqli_close($conexao);
        echo "    <div style='display: flex; justify-content: center;'>"; 
        echo "        <div class='box_cinza_claro' style='background: #19f261; border: 1px solid #ccc; border-radius: 4px; padding: 10px 20px;'>"; 
        
        echo"<h1> Produto Alterado com Sucesso</h1>";
        echo "        </div>";
        header('Refresh: 2; url=cadastro_de_produtos.php');
        exit;
    }
    elseif($linha=== 0) {
        mysqli_close($conexao);
        echo "<link rel='stylesheet' href='../css/style.css'>"; 
        echo "<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 40px; font-family: sans-serif;'>"; 
        
        // Texto de aviso no topo, destacado e elegante
        echo "    <p style='color: #666; font-size: 1.1rem; margin-bottom: 20px; font-weight: 500;'>Nenhuma alteração foi feita</p>"; 
        
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




    function nomeEcodigo($codigodoproduto,$nomedoproduto){

        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        if(!$conexao){
            die("<h1>Erro</h1>".mysqli_connect_error());
        }

        $sql ="select codigoProduto, nomeProduto from tbcadastropeca where codigoProduto ='$codigodoproduto' and nomeProduto ='$nomedoproduto'";

        $resultado = mysqli_query($conexao,$sql);

        if($resultado && mysqli_num_rows($resultado)>0){
            mysqli_close($conexao);
            return true;
        }

        else{
            mysqli_close($conexao);
            $_SESSION['nomeEcodigo']="Nome Não Compativel com o Codigo.\nVerifique o Codigo e o Nome";
            header('Location:atualizar_produtos.php');
            exit;
        }
    }




?>