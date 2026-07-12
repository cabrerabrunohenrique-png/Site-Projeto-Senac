<?php
   session_start(); 

    $nomedeusuario =$_POST['NomedeUsuario']??'';
    $senhadeacesso =$_POST['SenhaAcesso']??'';
   
    
    
    

        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        if (!$conexao) {
            die ("<h1>erro<h1>". mysqli_connect_error());
        }

        $slq = "select * from tbcadastronovousuario where nomeUsuario = '$nomedeusuario' and SenhaAcesso='$senhadeacesso' ";
        
        $resultado = mysqli_query($conexao ,$slq);

        if ($resultado && mysqli_num_rows($resultado) == 1 ) {
            
            $dados = mysqli_fetch_assoc($resultado);            

            $_SESSION['id_usuario'] = $dados['numeroRegistro'];
            $_SESSION['permissao'] = $dados['nivelPermisao'];
            mysqli_close($conexao);
        
            if ($_SESSION['permissao'] == 'adm') {
                header('Location: ../FormularioCadastroNovoUsuario.php'); 
                exit; 
            }

        }
            
        
        if( isset($_SESSION['permissao']) && $_SESSION['permissao']!='adm'){
            // Limpa a sessão para não bugar nos próximos acessos
            session_destroy();
            echo "<h1 class='letraFundoAzul text-bg-info fontemenu le' >Usuário Sem permissão!</h1>";
            echo"<link rel ='stylesheet' href='../css/style.css'> <div style='display: flex; justify-content: center;' > 
            <div class=''>
            
                
                <a class='cp caixa  fontemenu'  href='../acesso_cadastro_novo_usuario.php ' >
                Voltar
                </a>
            </div>
            </div>";
            
         exit; 
            
        }
        else { 
            if (isset($conexao)) {
                mysqli_close($conexao); 
            }
            echo "<h1 class='letraFundoAzul text-bg-info fontemenu le' >Usuário ou senha incorretos!</h1>"; 
            echo"<link rel ='stylesheet' href='../css/style.css'> <div style='display: flex; justify-content: center;' > 
            <div class=''>
            
                
                <a class='cp caixa  fontemenu'  href='../acesso_cadastro_novo_usuario.php ' >
                Voltar
                </a>
            </div>
            </div>";
            exit; 
        }
   

?>
