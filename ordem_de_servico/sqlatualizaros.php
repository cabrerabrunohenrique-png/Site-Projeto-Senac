<?php

    $codigo =$_POST['codigo_ordem_de_servico']??'';
    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoprodutoos=mb_strtolower( $_POST['nome_do_produto']??'','utf-8');
    $quantidade =$_POST['quantidade_entrada']??'';
    $data = $_POST['data']??'';
    $responsavelb = $_POST['responsavelb'] ??'';

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
         die("<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>;
            <link rel ='stylesheet' href='../css/style.css'>
            <div style='display: flex; justify-content: space-around;' > 
                <div class=''>
                    <a class='cp caixa  fontemenu text-bg-warning' href='atualizar_os.php'>
                        Voltar para Pagina de Atualizar OS
                    </a>
                </div>
            </div>
            <div style ='height: 20px '> </div>
            <div class ='container'> 
                <h1 class= ' letraFundoAzul  text-bg-danger fontemenu ' >Atenção: Informe o numero da OS. </h1>
            </div>"
        );

    
    }


    if(os($codigo)){
        $conn = mysqli_connect("localhost", "root", "", "bdprojetosenac"); 
    
       $sql = "UPDATE tbordemservico SET data_alteracao ='$data', codigoProduto = '$codigodoproduto', nomeProduto = '$nomedoprodutoos', quantidadeProduzida = '$quantidade', responsavel_alteracao = '$responsavelb' WHERE codigoOS = '$codigo'"; 

        $r = mysqli_query($conn, $sql); 
    
        if($r){ 
            mysqli_close($conn); 
            echo 'Atualizado com Sucesso'; 
             echo"<link rel ='stylesheet' href='css/style.css'> 
                <div style='display: flex; justify-content: center;' >
                    <div class=''>
                        <a class='cp caixa  fontemenu' href='atualizar_os.php'>Voltar</a>
                    </div>
                </div>";
                exit; 
        } 
        mysqli_close($conn);

    } else {
    echo "Erro: Esta Ordem de Serviço não existe no sistema.";
    echo"<link rel ='stylesheet' href='css/style.css'> 
    <div style='display: flex; justify-content: center;' >
        <div class=''>
            <a class='cp caixa  fontemenu' href='atualizar_os.php'>Voltar</a>
        </div>
    </div>";
    }



    

?>