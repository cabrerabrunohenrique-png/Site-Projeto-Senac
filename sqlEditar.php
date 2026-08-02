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

    $slq = "update tbcadastronovousuario set nomeCompleto ='$nomecompleto', nivelPermisao ='$niveldepermissao', nomeUsuario ='$nomedeusuario', senhaAcesso='$senhadeacesso' where nomeCompleto ='$nomecompleto'";
    
    $resultado = mysqli_query($conexao ,$slq);

    $linha = mysqli_affected_rows($conexao);
   
   
    if ($linha >0) {
        mysqli_close($conexao);
       
        echo"<link rel ='stylesheet' href='../css/style.css'>";
       
        echo "<div style='display: flex; justify-content: center;'>"; 
        echo "<div class='box_cinza_claro'>"; 
        
        echo"<h1 class ='ar caixa '> Alterado com SUCESSO</h1>";
        
        
       header('Refresh: 2; url=FormularioCadastroNovousuario.php');
        exit;
    }
    elseif($linha=== 0) {
        mysqli_close($conexao);
        echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>";
       
        echo"<link rel ='stylesheet' href='../css/style.css'>
            <div style='display: flex; justify-content: space-around;' > 
                <div class=''>
                    <a class='ar caixa  fontemenu' href='index'.php'>
                      Voltar para Pagina de Login
                    </a>
                </div>
                <div class=''>
                    <a class='cp caixa  fontemenu text-bg-warning' href='atualizar.php'>
                        Voltar para Pagina de Alteração de Usuário
                    </a>
                </div>
            </div>";
        echo"<div style ='height: 20px'> </div>" ;   
        echo "<h1 class='letraFundoAzul  text-bg-danger fontemenu ' >Nenhuma alteração foi feita </h1>";
        exit;
    }




?>