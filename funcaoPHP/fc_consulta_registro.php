<?php

$nomedeusuario = $_POST['nome_de_usuario']??'';

$conexao = mysli_connect("localhost","root","","bdprojetosenac");

if(!$conexao){
    die("<h1>erro".mysqli_connect_error());
}


$sql=  "SELECT nomeUsuario FROM tbcadastronovousuario WHERE nomeUsuario ='$nomedeusuario'";

$resulto = mysqli_query($conexao,$sql);

if($resulto && mysqli_num_rows($resulto)==1){

mysqli_close($conexao);
echo"<link rel ='stylesheet' href='css/style.css'> <div style='display: flex; justify-content: center;' > 
        <div class=''>
        
             
            <a class='cp caixa  fontemenu' href='index.php'>
            Voltar
            </a>
        </div>
        </div>";
        echo "<h1 class='letraFundoAzul  text-bg-info fontemenu le' >Usuário ja existe!</h1>";
exit;
} 


?>