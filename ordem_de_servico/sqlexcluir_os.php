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
        
       
        die("<link rel ='stylesheet' href='../css/style.css'>
            <div class='alert-container'>
                <div class='alert-box'>
                    <h1 class='alert-title' >Informe o numero da OS.</h1>           
                    <a class='btn-back alert-text 'href='excluir_os.php'>Voltar Pagina</a>
                </div>
            </div>"           
        );   

    
    }


    if(os($codigo)){
        $conn = mysqli_connect("localhost", "root", "", "bdprojetosenac"); 
    
       $sql = "delete from tbordemservico  WHERE codigoOS = '$codigo'"; 

        $r = mysqli_query($conn, $sql); 
    
        if($r){ 
            mysqli_close($conn);
            echo "<link rel ='stylesheet' href='../css/style.css'>";
            echo "
            <div class='success-container'>
                <div class='success-box'>
                    <h1 class='success-title' >OS excluido com Sucesso</h1>                  
                    <a class='btn-success success-text 'href='excluir_os.php'>Voltar Pagina</a>
                </div>
            </div>";
            exit; 
            } 
        mysqli_close($conn);

    }
    else{

    echo "<link rel ='stylesheet' href='../css/style.css'>
            <div class='alert-container'>
                <div class='alert-box'>
                    <h1 class='alert-title' >Atenção: Essa OS não existe no sistema.</h1>           
                    <a class='btn-back alert-text 'href='excluir_os.php'>Voltar Pagina</a>
                </div>
            </div>"  ;
            
        exit; 
    }



    

?>