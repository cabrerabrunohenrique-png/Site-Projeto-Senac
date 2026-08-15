<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>

<?php

    $nomecompleto =mb_strtolower(trim(preg_replace('/\s+/',' ',$_POST['nome_completo']??'')),'utf-8'); 
    $niveldepermissao= $_POST['nivel_de_permissao']??'';
    $nomedeusuario = mb_strtolower(trim(preg_replace('/\s+/',' ',$_POST['nome_de_usuario']??'')),'utf-8');
    $senhadeacesso =$_POST['senha_de_acesso']??'';
    $data = $_POST['data']??'';

    usuario($nomedeusuario);

    function usuario($nomedeusuario){
        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        if(!$conexao){
            die("<h>Erro</h>".mysqli_connect_error());
        }

        $sql = "select nomeUsuario from tbcadastronovousuario where nomeUsuario ='$nomedeusuario'";
        $resultado = mysqli_query($conexao,$sql);
        if($resultado && mysqli_num_rows($resultado)>0){
            mysqli_close($conexao);
            $_SESSION['usuario']="Escolha outro nome de Usuário";
            header('Location:atualizar.php');
            
            exit;
        }
    }
   
    
    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    $slq = "update tbcadastronovousuario set usuarioAlteracao='$data', nomeCompleto ='$nomecompleto', nivelPermisao ='$niveldepermissao', nomeUsuario ='$nomedeusuario', senhaAcesso='$senhadeacesso' where nomeCompleto ='$nomecompleto'";
    
    $resultado = mysqli_query($conexao ,$slq);

    $linha = mysqli_affected_rows($conexao);
   
   
    if ($linha >0) {
        mysqli_close($conexao);

        echo "<link rel ='stylesheet' href='../css/style.css'>";
            echo "
            <div class='success-container'>
                <div class='success-box'>
                    <h1 class='success-title' >Alterado com Sucesso</h1>                  
                    <a class='btn-success success-text 'href='FormularioCadastroNovousuario.php'>Voltar Pagina</a>
                </div>
            </div>";        
        //header('Refresh: 2; url=FormularioCadastroNovousuario.php');
        exit;
    }
    elseif($linha=== 0) {
        mysqli_close($conexao);

         echo "<link rel ='stylesheet' href='../css/style.css'>
            <div class='alert-container'>
                <div class='alert-box'>
                    <h1 class='alert-title' >Atenção: Nenhuma alteração foi feita.</h1>           
                    <a class='btn-back alert-text 'href='atualizar.php'>Voltar Pagina</a>
                </div>
            </div>"  ;
        echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>";
       
       
        exit;
    }




?>