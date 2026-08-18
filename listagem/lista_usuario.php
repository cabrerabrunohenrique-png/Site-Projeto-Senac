<?php 
 //para ler o aviso criado na validacao de usuario em bando de dados
session_start(); 


if(!isset($_SESSION['id_usuario'])){
    header('Location:index.php');
    exit;

}

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel ="stylesheet" href="../css/style_lista.css">
  <title>Relatório de Produtos</title>
  
</head>
<body>

  <div class=''>
    <h1 class='texto_titulo'>Relacao de Usuarios Cadastrados</h1>
  </div>

  <main class=" texto_centro borda " >
    <table style="width:100%">
      <thead>
        <tr>
          <td class="borda">Nome Completo</td>
          <td class="borda">Numero de Registro</td>
          <td class="borda">Nome de Usuario</td>
          <td class="borda">Nivel de Permissao</td>
        </tr>
      </thead>
      <tbody>
        <?php
            try{
          $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
          }
          catch(mysqli_sql_exception $e){
              die ("Erro com o banco de dados"."<h1>Erro</h1> <a href='../index.php'>Voltar</a>" );
          }


          $sql = "select * from tbcadastronovousuario order by numeroRegistro ";
          $result = mysqli_query($conexao,$sql);


          while($linha = mysqli_fetch_array($result)){
             echo"<tr class ='texto_centro mouse '>";
            
             echo "<td class='borda'>" . $linha['nomeCompleto'] . "</td>";
             echo "<td class='borda'>" . $linha['numeroRegistro'] . "</td>"; 
             echo "<td class='borda'>" . $linha['nomeUsuario'] . "</td>"; 
             echo "<td class='borda'>" . $linha['nivelPermisao'] . "</td>";
              
             echo "</tr>";
          }


        ?>
        
      </tbody>
    </table>
  </main>
  <div style="height: 20px"></div>

  <div class =''style='display:flex;justify-content:center ; '>        
      <button class='btn-success'  type="button" onclick="window.location.reload();">
        Atualizar Página
      </button>
  </div>

</body>
</html>
