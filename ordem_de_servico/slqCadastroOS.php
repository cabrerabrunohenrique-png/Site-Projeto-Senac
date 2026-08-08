<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>


<?php

    $codiordemdeservico =$_POST['codigo_ordem_de_servico']??'';
    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoprodutoos=mb_strtolower( $_POST['nome_do_produto']??'','utf-8');
    $quantidade =$_POST['quantidade_entrada']??'';
    $data = $_POST['data']??'';
    
    $responsavel= $_POST['Responsavel']?? '';
        
     
     if($responsavel != $_SESSION['nome']){

echo "<link rel='stylesheet' href='../css/style.css'>

    <style>
        .container-erro {
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: 80vh;
            font-family: 'Segoe UI', Roboto, sans-serif;
        }
        .card-erro {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 450px;
            border-top: 5px solid #dc3545;
        }
        .card-erro h1 {
            color: #2c3e50;
            font-size: 22px;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        .card-erro p {
            color: #7f8c8d;
            font-size: 15px;
            margin-bottom: 25px;
        }
        .btn-voltar {
            display: inline-block;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: bold;
            transition: background 0.2s;
        }
        .btn-voltar:hover {
            background-color: #0813f0;
        }
    </style>

    <div class='container-erro'>
        <div class='card-erro'>
             <h1>Acesso Negado</h1>
        <p>O Responsável tem que estar logado.<br>Não é permitido lançar Responsável diferente do usuário que está logado.</p>
        <a class='btn-voltar cp caixa fontemenu' href='ordem_de_servico.php'>Voltar</a>
        </div>
    </div>
    ";

     
     
       
        exit;
    }
    
    function fccodigo($codigodoproduto,$nomedoprodutoos){

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if(!$conexao){
        die("<h1>Erro</h1>".mysqli_connect_error());
    }

    $sql = "select codigoproduto, nomeproduto from tbcadastropeca where codigoproduto='$codigodoproduto' and nomeproduto ='$nomedoprodutoos'";

    $resultado = mysqli_query($conexao,$sql);

    if($resultado && mysqli_num_rows($resultado)>0){
        mysqli_close($conexao);
        return true;
        
    } 
    
   
    
    else{
        mysqli_close($conexao);
         echo "
<link rel='stylesheet' href='../css/style.css'>

<style>
    .container-erro {
        display: flex; 
        justify-content: center; 
        align-items: center; 
        min-height: 80vh;
        font-family: 'Segoe UI', Roboto, sans-serif;
    }
    .card-erro {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 450px;
        border-top: 5px solid #dc3545;
    }
    .card-erro h1 {
        color: #2c3e50;
        font-size: 22px;
        margin-bottom: 15px;
        line-height: 1.4;
    }
    .card-erro p {
        color: #7f8c8d;
        font-size: 15px;
        margin-bottom: 25px;
    }
    .btn-voltar {
        display: inline-block;
        background-color: #dc3545;
        color: white;
        text-decoration: none;
        padding: 12px 30px;
        border-radius: 6px;
        font-weight: bold;
        transition: background 0.2s;
    }
    .btn-voltar:hover {
        background-color: #2331c8;
    }
</style>

<div class='container-erro'>
    <div class='card-erro'>
        <h1>Registro não lançado</h1>
        <p>O código digitado não é compatível com o nome informado.</p>
        <a class='btn-voltar cp caixa fontemenu' href='ordem_de_servico.php'>Voltar</a>
    </div>
</div>
";

        exit;
    }

    }
    fccodigo($codigodoproduto,$nomedoprodutoos);


   



    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados

    $slq = "insert into tbordemservico (codigoOS, codigoProduto, nomeProduto,quantidadeProduzida, data, responsavel)
    values ('$codiordemdeservico','$codigodoproduto' ,'$nomedoprodutoos', '$quantidade', '$data' ,'$responsavel')";
    
    

    
    
    $resultado = mysqli_query($conexao ,$slq);

    if ($resultado) {
        mysqli_close($conexao);


       echo "
        <link rel='stylesheet' href='../css/style.css'>

        <style>
            .container-erro {
                display: flex; 
                justify-content: center; 
                align-items: center; 
                min-height: 80vh;
                font-family: 'Segoe UI', Roboto, sans-serif;
            }
            .card-erro {
                background-color: #ffffff;
                padding: 40px;
                border-radius: 12px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                text-align: center;
                max-width: 450px;
                border-top: 5px solid #19f261;
            }
            .card-erro h1 {
                color: #2c3e50;
                font-size: 22px;
                margin-bottom: 15px;
                line-height: 1.4;
            }
            .card-erro p {
                color: #7f8c8d;
                font-size: 15px;
                margin-bottom: 25px;
            }
            .btn-voltar {
                display: inline-block;
                background-color: #19f261;
                color: white;
                text-decoration: none;
                padding: 12px 30px;
                border-radius: 6px;
                font-weight: bold;
                transition: background 0.2s;
            }
            .btn-voltar:hover {
                background-color: #1d19f2;
            }
        </style>

        <div class='container-erro'>
            <div class='card-erro'>
                <h1>Registro lançado</h1>
                <p>Ordem de Serviço Cadastrado com Sucesso.</p>
                <a class='btn-voltar cp caixa fontemenu' href='ordem_de_servico.php'>Voltar</a>
            </div>
        </div>
        ";
        exit;
        
        
    }
    else {
        mysqli_close($conexao);
        echo "Deu algum problema";
        exit;
    }

   
    #fechar conexao

    



?>