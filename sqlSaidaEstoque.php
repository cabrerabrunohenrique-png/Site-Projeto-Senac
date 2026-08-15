<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>


<?php
    $os =$_POST['os']??'';
    $data =$_POST['data']??'';   
    
    $codigo= $_POST['codigo_do_produto']??'';
    $nome =$_POST['nome_do_produto']??'';
    $quantidade =$_POST['quantidade']??'';
    $nf =$_POST['numero_nf']??'';

    
    
     function fcosa($os){
        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");

        if(!$conexao){
            die('<h1>ERRO</h1>'.mysqli_connect_error());
          
        }

        $Sql ="select * from tbsaidaestoque where numeroOs ='$os'";

        $r = mysqli_query($conexao,$Sql);

        if($r && mysqli_num_rows($r)>0){
            mysqli_close($conexao);
            
      echo "<link rel ='stylesheet' href='../css/style.css'>";

            echo "
            <div class='alert-container'>
                <div class='alert-box'>
                    <h1 class='alert-title' >Registro Não lançado</h1>
                    <h2 class='alert-title'>⚠️ OS com lançamento Duplicado</h2>
                    <p class='alert-text'>Já possuii lançamento para esse numero de OS.</p>
                    <a class='btn-back' href='estoque_saida.php'>Voltar Pagina</a>
                </div>
            </div>";
            
            exit;

         
        }
    }
    fcosa($os);


   
    function fcos($os,$codigo){
        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");

        if(!$conexao){
            die('<h1>ERRO</h1>'.mysqli_connect_error());
          
        }

        $Sql ="select * from tbordemservico where codigoOs ='$os' and codigoProduto ='$codigo'";

        $r = mysqli_query($conexao,$Sql);

        if(!$r || mysqli_num_rows($r)<1){
            mysqli_close($conexao);
            echo "<link rel ='stylesheet' href='../css/style.css'>";

            echo "
            <div class='alert-container'>
                <div class='alert-box'>
                    <h2 class='alert-title'>⚠️ Registro não lançado</h2>
                    <p class='alert-text'>A OS informado não é compatível com  produto.</p>
                    <a class='btn-back' href='estoque_saida.php'>Voltar para o Estoque</a>
                </div>
            </div>
            ";
      
            exit;

         
        }
    }
    fcos($os,$codigo);
    


    function fccodigo($codigo,$nome){

        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        if(!$conexao){
            die("<h1>Erro</h1>".mysqli_connect_error());
        }

        $sql = "select codigoproduto, nomeProduto from tbcadastropeca where codigoproduto='$codigo' and nomeProduto ='$nome'";

        $resultado = mysqli_query($conexao,$sql);

        if($resultado && mysqli_num_rows($resultado)>0){
            mysqli_close($conexao);
            return true;
            
        } else{
            mysqli_close($conexao);
            echo "<link rel ='stylesheet' href='../css/style.css'>";

            echo "
            <div class='alert-container'>
                <div class='alert-box'>
                    <h2 class='alert-title'>⚠️ Registro não lançado</h2>
                    <p class='alert-text'>O codigo e o nome não são compativeis.</p>
                    <a class='btn-back' href='estoque_saida.php'>Voltar para o Estoque</a>
                </div>
            </div>
            ";
            exit;
        }
    }
    fccodigo($codigo,$nome);

    function quantidade($os,$quantidade){
         $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        if(!$conexao){
            die("<h1>Erro</h1>".mysqli_connect_error());
        }

        $sql = "select codigoOS, quantidadeProduzida from tbordemservico where codigoOS='$os' and quantidadeProduzida ='$quantidade'";

        $resultado = mysqli_query($conexao,$sql);

        if($resultado && mysqli_num_rows($resultado)>0){
            mysqli_close($conexao);
            return true;
            
        } else{
            mysqli_close($conexao);
            echo "<link rel ='stylesheet' href='../css/style.css'>";

            echo "
            <div class='alert-container'>
                <div class='alert-box'>
                    <h2 class='alert-title'>⚠️ Registro não lançado</h2>
                    <p class='alert-text'>Quantidade diferente do informado na OS.</p>
                    <a class='btn-back' href='estoque_saida.php'>Voltar para o Estoque</a>
                </div>
            </div>
            ";
            exit;
        }

    }

    quantidade($os,$quantidade);

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados


    $slq = "insert into tbsaidaestoque (dataSaida, codigoPeca, nomePeca, quantidaPeca, numeroNf, numeroOs)
    values ('$data' ,'$codigo', '$nome', '$quantidade', '$nf', '$os')";
    

    $resultado = mysqli_query($conexao ,$slq);

    if ($resultado) {
        mysqli_close($conexao);
        // Se deu certo, redireciona IMEDIATAMENTE
        echo "<link rel ='stylesheet' href='../css/style.css'>";
        echo "
        <div class='success-container'>
            <div class='success-box'>
                <h2 class='success-title'>✅ Produto Lançado na Saida com Sucesso</h2>
                <p class='success-text'>Redirecionando em instantes...</p>
            </div>
        </div>
        ";
        
        header('Refresh: 2; url=estoque_saida.php');
        exit;
        
        
    }
    else {
        mysqli_close($conexao);
        echo "Deu algum problema";
        exit;
    }

   



?>
