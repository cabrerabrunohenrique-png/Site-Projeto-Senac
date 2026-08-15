<?php


    session_start();

    if(!isset($_SESSION['id_usuario'])){
        header('Location:../index.php');
        exit;

    }

    $codigo =$_POST['codigo_ordem_de_servico']??'';
    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoprodutoos=mb_strtolower( $_POST['nome_do_produto']??'','utf-8');
    $quantidade =$_POST['quantidade_entrada']??'';
    $data = $_POST['data']??'';
    $responsavelb = $_POST['responsavelb'] ??'';



    if($_SESSION['nome'] !== $responsavelb){
        echo "<link rel ='stylesheet' href='../css/style.css'>";

            echo "
            <div class='alert-container'>
                <div class='alert-box'>
                    <h1> Erro. Alteração NÃO CONCLUIDA</h1>
                    <h2 class='alert-title' >Atenção: Responsavel e logim são divirgente.</h2>
                    <p> Faça o Login novamente</p>
                    <a class='btn-back alert-text ' href='atualizar_os.php'>Voltar Pagina</a>
                </div>
            </div>";

        exit;
    }

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

    function codigo_nome_produto($codigodoproduto,$nomedoprodutoos){
        $conn = mysqli_connect("localhost","root","","bdprojetosenac");
        if(!$conn){
            die("</h1>Erro_2</h1>".mysqli_connect_error());
            exit;
        }

        $sql ="select codigoproduto, nomeProduto from tbcadastropeca where codigoproduto = '$codigodoproduto' and nomeProduto ='$nomedoprodutoos'";

        $resultado1 = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($resultado1)>0){
            mysqli_close($conn);
            return true;
        }
        else{
            mysqli_close($conn);
            return false;

        }


    }

    codigo_nome_produto($codigodoproduto,$nomedoprodutoos);

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
    if (!os($codigo)){
        echo "<link rel ='stylesheet' href='../css/style.css'>";

            echo "
            <div class='alert-container'>
                <div class='alert-box'>
                    <h1 class='alert-title' >Erro: Esta Ordem de Serviço não existe no sistema.</h1>
                    
                  
                    <a class='btn-back alert-text ' href='atualizar_os.php'>Voltar Pagina</a>
                </div>
            </div>";

        exit;



    }

    if(codigo_nome_produto($codigodoproduto,$nomedoprodutoos)){
        $conn = mysqli_connect("localhost", "root", "", "bdprojetosenac"); 
    
       $sql = "UPDATE tbordemservico SET data_alteracao ='$data', codigoProduto = '$codigodoproduto', nomeProduto = '$nomedoprodutoos', quantidadeProduzida = '$quantidade', responsavel_alteracao = '$responsavelb' WHERE codigoOS = '$codigo'"; 

        $r = mysqli_query($conn, $sql); 
    
        if($r){ 
            mysqli_close($conn);
            echo "<link rel ='stylesheet' href='../css/style.css'>";

            echo "
            <div class='success-container'>
                <div class='success-box'>
                    <h1 class='success-title' >Atualizado com Sucesso</h1>
                    
                  
                    <a class='btn-success success-text ' href='atualizar_os.php'>Voltar Pagina</a>
                </div>
            </div>";


          
                exit; 
        } 
        mysqli_close($conn);

    }  else {

     echo "<link rel ='stylesheet' href='../css/style.css'>";

            echo "
            <div class='alert-container'>
                <div class='alert-box'>
                    <h1 class='alert-title' >Erro: Codigo do Produto x Nome Produto.</h1>
                    
                  
                    <a class='btn-back alert-text ' href='atualizar_os.php'>Voltar Pagina</a>
                </div>
            </div>";

        exit;
    }





    

?>