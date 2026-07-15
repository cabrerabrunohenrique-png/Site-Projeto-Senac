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
    $quantidade =$_POST['quantidade_entrada']??'';
    $nf =$_POST['numero_nf']??'';

    
    
   
    function fcos($os){
        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");

        if(!$conexao){
            die('<h1>ERRO</h1>'.mysqli_connect_error());
          
        }

        $Sql ="select * from tbordemservico where codigoOs ='$os'";

        $r = mysqli_query($conexao,$Sql);

        if(!$r || mysqli_num_rows($r)<1){
            mysqli_close($conexao);
            echo"<link rel ='stylesheet' href='css/style.css'> <div style='display: flex; justify-content: center;' > 
                <div class=''>
                
                    <h1>Esse registro não foi lançado <br>Nao existe esse OS</h1>
                    <a class='cp caixa  fontemenu' href='estoque_saida.php'>
                    Voltar
                    </a>
                </div>
                </div>";
            exit;

         
        }
    }
    fcos($os);
    


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
            echo"<link rel ='stylesheet' href='css/style.css'> <div style='display: flex; justify-content: center;' > 
                <div class=''>
                
                    <h1>Esse registro não foi lançado <br>Codigo nao compativel com o nome</h1>
                    <a class='cp caixa  fontemenu' href='estoque_saida.php'>
                    Voltar
                    </a>
                </div>
                </div>";
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
        echo 'Cadastrado com sucesso';
        header('Refresh: 2; url=estoque_saida.php');
        exit;
        
        
    }
    else {
        mysqli_close($conexao);
        echo "Deu algum problema";
        exit;
    }

   
    #fechar conexao

    



?>
