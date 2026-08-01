<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>

<?php

    $nomecompleto =$_POST['nome_completo']??''; 
    $niveldepermissao= $_POST['nivel_de_permissao']??'';
    $nomedeusuario = mb_strtolower(trim(preg_replace('/\s+/',' ',$_POST['nome_de_usuario']??'')),'utf-8');
    $senhadeacesso =$_POST['senha_de_acesso']??'';
   
    
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
        echo "    <div style='display: flex; justify-content: center;'>"; 
        echo "        <div class='box_cinza_claro' style='background: #0bfd64; border: 1px solid #ccc; border-radius: 4px; padding: 10px 20px;'>"; 
        
        echo"<h1> Alterado com SUCESSO</h1>";
        echo "        </div>";
        
        header('Refresh: 2; url=FormularioCadastroNovousuario.php');
        exit;
    }
    elseif($linha=== 0) {
        mysqli_close($conexao);
        echo"<link rel ='stylesheet' href='css/style.css'>
            <div style='display: flex; justify-content: center;' > 
                <div class=''>
                    <a class='cp caixa  fontemenu' href='index'.php'>
                    Login
                </a>
                </div>
            </div>";
        echo "<h1 class='letraFundoAzul  text-bg-info fontemenu le' >Nenhuma alteração foi feita </h1>";
        exit;
    }




?>