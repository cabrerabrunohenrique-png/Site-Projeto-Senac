<?php

    $codigo =$_POST['codigo_ordem_de_servico']??'';
    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoprodutoos=mb_strtolower( $_POST['nome_do_produto']??'','utf-8');
    $quantidade =$_POST['quantidade_entrada']??'';
    $data = $_POST['data']??'';

    function os($codigo){
        $conn = mysqli_connect("localhost","root","","bdprojetosenac");
        if(!$conn){
            die("<h1>Erro</h1>".mysqli_connect_error());
        exit;
        }

        $sql = "select * from tbordemservico where codigoOS ='$codigo'";

        $r = mysqli_query($conn,$sql);   

        if(mysqli_num_rows($r)>0){
            mysqli_close($conn);
            return true;
        }
        else{
            mysqli_close($conn);
            return false;
        }
    }

    if(empty($codigo)){
        die("Erro: Por favor informe a OS");

    
    }


    if(os($codigo)){
        $conn = mysqli_connect("localhost", "root", "", "bdprojetosenac"); 
    
       $sql = "UPDATE tbordemservico SET 
            codigoProduto = '$codigodoproduto', 
            nomeProduto = '$nomedoprodutoos',
            quantidadeProduzida = '$quantidade' 
            WHERE codigoOS = '$codigo'"; 

        $r = mysqli_query($conn, $sql); 
    
        if($r){ 
            mysqli_close($conn); 
            echo 'Atualizado com Sucesso'; 
            exit; 
        } 
        mysqli_close($conn);

    } else {
    echo "Erro: Esta Ordem de Serviço não existe no sistema.";
    }



    

?>