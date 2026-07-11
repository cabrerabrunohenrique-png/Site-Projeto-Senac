<?php
   session_start(); 

    $nomedeusuario =$_POST['NomedeUsuario']??'';
    $senhadeacesso =$_POST['SenhaAcesso']??'';
   
    
    /*abri conexao*/ 
    

        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        if (!$conexao) {
            die ("<h1>erro<h1>". mysqli_connect_error());
        }

          #inserir os dados


        $slq = "select numeroRegistro,nomeUsuario, senhaAcesso from tbcadastronovousuario where nomeUsuario = '$nomedeusuario' and SenhaAcesso='$senhadeacesso'";
        
        $resultado = mysqli_query($conexao ,$slq);

        if ($resultado && mysqli_num_rows($resultado) == 1 ) {
            
            $resultado = mysqli_fetch_assoc($resultado);

            

            $_SESSION['id_usuario'] = $resultado['numeroRegistro'];
            mysqli_close($conexao);
            


            // Se deu certo, redireciona IMEDIATAMENTE
            header('Location: ../FormularioCadastroNovoUsuario.php');
            exit; // Esse 'exit' é obrigatório para a página parar aqui e o redirecionamento funcionar
            
        }
        else {
            mysqli_close($conexao);
        
            echo"<link rel ='stylesheet' href='css/style.css'> <div style='display: flex; justify-content: center;' > 
            <div class=''>
            
                
                <a class='cp caixa  fontemenu' href='../acesso_cadastro_novo_usuario.php'>
                Voltar
                </a>
            </div>
            </div>";
            echo "<h1 class='letraFundoAzul  text-bg-info fontemenu le' >Usuário ou senha incorretos!</h1>";
            exit;
        }
   

?>
