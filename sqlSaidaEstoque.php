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
            
      echo "
            <style>
                .alert-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 40px 20px;
                    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
                }
                .alert-box {
                    background-color: #fdf2f2;
                    border: 1px solid #f8b4b4;
                    border-radius: 8px;
                    padding: 24px;
                    max-width: 500px;
                    width: 100%;
                    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                    text-align: center;
                }
                .alert-title {
                    color: #9b1c1c;
                    font-size: 1.25rem;
                    font-weight: 600;
                    margin-top: 0;
                    margin-bottom: 8px;
                }
                .alert-text {
                    color: #7f1d1d;
                    font-size: 0.95rem;
                    margin-top: 0;
                    margin-bottom: 20px;
                    line-height: 1.5;
                }
                .btn-back {
                    display: inline-block;
                    background-color: #ffffff;
                    color: #b83232;
                    border: 1px solid #f8b4b4;
                    border-radius: 6px;
                    padding: 8px 16px;
                    font-size: 0.875rem;
                    font-weight: 500;
                    text-decoration: none;
                    transition: all 0.2s ease;
                }
                .btn-back:hover {
                    background-color: #f8b4b4;
                    color: #7f1d1d;
                }
            </style>
            ";

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


   
    function fcos($os,$nome){
        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");

        if(!$conexao){
            die('<h1>ERRO</h1>'.mysqli_connect_error());
          
        }

        $Sql ="select * from tbordemservico where codigoOs ='$os' and nomeProduto ='$nome'";

        $r = mysqli_query($conexao,$Sql);

        if(!$r || mysqli_num_rows($r)<1){
            mysqli_close($conexao);
            echo "
            <style>
                .alert-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 40px 20px;
                    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
                }
                .alert-box {
                    background-color: #fdf2f2;
                    border: 1px solid #f8b4b4;
                    border-radius: 8px;
                    padding: 24px;
                    max-width: 500px;
                    width: 100%;
                    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                    text-align: center;
                }
                .alert-title {
                    color: #9b1c1c;
                    font-size: 1.25rem;
                    font-weight: 600;
                    margin-top: 0;
                    margin-bottom: 8px;
                }
                .alert-text {
                    color: #7f1d1d;
                    font-size: 0.95rem;
                    margin-top: 0;
                    margin-bottom: 20px;
                    line-height: 1.5;
                }
                .btn-back {
                    display: inline-block;
                    background-color: #ffffff;
                    color: #b83232;
                    border: 1px solid #f8b4b4;
                    border-radius: 6px;
                    padding: 8px 16px;
                    font-size: 0.875rem;
                    font-weight: 500;
                    text-decoration: none;
                    transition: all 0.2s ease;
                }
                .btn-back:hover {
                    background-color: #f8b4b4;
                    color: #7f1d1d;
                }
            </style>
            ";

            echo "
            <div class='alert-container'>
                <div class='alert-box'>
                    <h2 class='alert-title'>⚠️ Registro não lançado</h2>
                    <p class='alert-text'>O código informado não é compatível com o nome do produto.</p>
                    <a class='btn-back' href='estoque_saida.php'>Voltar para o Estoque</a>
                </div>
            </div>
            ";
      
            exit;

         
        }
    }
    fcos($os,$nome);
    


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
            echo "
            <style>
                .alert-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 40px 20px;
                    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
                }
                .alert-box {
                    background-color: #fdf2f2;
                    border: 1px solid #f8b4b4;
                    border-radius: 8px;
                    padding: 24px;
                    max-width: 500px;
                    width: 100%;
                    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                    text-align: center;
                }
                .alert-title {
                    color: #9b1c1c;
                    font-size: 1.25rem;
                    font-weight: 600;
                    margin-top: 0;
                    margin-bottom: 8px;
                }
                .alert-text {
                    color: #7f1d1d;
                    font-size: 0.95rem;
                    margin-top: 0;
                    margin-bottom: 20px;
                    line-height: 1.5;
                }
                .btn-back {
                    display: inline-block;
                    background-color: #ffffff;
                    color: #b83232;
                    border: 1px solid #f8b4b4;
                    border-radius: 6px;
                    padding: 8px 16px;
                    font-size: 0.875rem;
                    font-weight: 500;
                    text-decoration: none;
                    transition: all 0.2s ease;
                }
                .btn-back:hover {
                    background-color: #f8b4b4;
                    color: #7f1d1d;
                }
            </style>
            ";

            echo "
            <div class='alert-container'>
                <div class='alert-box'>
                    <h2 class='alert-title'>⚠️ Registro não lançado</h2>
                    <p class='alert-text'>O produto e a OS não são compativeis.</p>
                    <a class='btn-back' href='estoque_saida.php'>Voltar para o Estoque</a>
                </div>
            </div>
            ";
            exit;
        }
    }
    fccodigo($codigo,$nome);

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
        echo "
        <style>
            .success-container {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 40px 20px;
                font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            }
            .success-box {
                background-color: #f0fdf4;
                border: 1px solid #bbf7d0;
                border-radius: 8px;
                padding: 24px;
                max-width: 500px;
                width: 100%;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                text-align: center;
            }
            .success-title {
                color: #166534;
                font-size: 1.25rem;
                font-weight: 600;
                margin-top: 0;
                margin-bottom: 8px;
            }
            .success-text {
                color: #15803d;
                font-size: 0.9rem;
                margin: 0;
            }
        </style>";
        echo "
        <div class='success-container'>
            <div class='success-box'>
                <h2 class='success-title'>✅ Produto Lançado com Sucesso</h2>
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
