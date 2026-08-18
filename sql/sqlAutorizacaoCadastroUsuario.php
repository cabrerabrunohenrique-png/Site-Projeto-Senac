<?php
   session_start(); 

    $nomedeusuario =$_POST['NomedeUsuario']??'';
    $senhadeacesso =$_POST['SenhaAcesso']??'';
   
    
    
    
try {

        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        }catch (mysqli_sql_exception $e)
        {
            die ($e->getMessage()."<h1>Erro</h1> <a href='../index.php'>Voltar</a>" );
        
        }

        $slq = "select * from tbcadastronovousuario where nomeUsuario = '$nomedeusuario' and SenhaAcesso='$senhadeacesso' ";
        
        $resultado = mysqli_query($conexao ,$slq);

        if ($resultado && mysqli_num_rows($resultado) == 1 ) {
            
            $dados = mysqli_fetch_assoc($resultado);            

            $_SESSION['id_usuario'] = $dados['nomeCompleto'];
            $_SESSION['permissao'] = $dados['nivelPermisao'];
            mysqli_close($conexao);
        
            if ($_SESSION['permissao'] == 'adm') {
                header('Location: ../FormularioCadastroNovoUsuario.php'); 
                
            }
            else{$_SESSION['nao'] ="Você não tem autorização para fazer cadastro de novos usuarios";
            header('Location:../acesso_cadastro_novo_usuario.php');
            

            }
            exit;

        }      
        if (isset($conexao)) {
            mysqli_close($conexao); 
            $_SESSION['senha'] = "Usuário ou senha incorretos";
            header('Location:../acesso_cadastro_novo_usuario.php');
           
           /* echo "<h1 class='letraFundoAzul text-bg-info fontemenu le' >Usuário ou senha incorretos!</h1>"; 
            echo"<link rel ='stylesheet' href='../css/style.css'> <div style='display: flex; justify-content: center;' > 
            <div class=''>
            
                
                <a class='cp caixa  fontemenu'  href='../acesso_cadastro_novo_usuario.php ' >
                Voltar
                </a>
            </div>
            </div>"*/
            exit; 
         }
   

?>
