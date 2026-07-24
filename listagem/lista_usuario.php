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
  
  <title>Relatório de Produtos</title>
  <style>
    :root {
      --primary-color: #2c3e50;
      --text-color: #333333;
      --bg-light: #f8f9fa;
      --border-color: #dddddd;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: var(--text-color);
      background-color: #ffffff;
      margin: 0;
      padding: 20px;
    }

    .fontemenu {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
      border-bottom: 2px solid var(--primary-color);
      padding-bottom: 10px;
    }

    .fontemenu h1 {
      text-transform: uppercase;
      color: var(--primary-color);
      font-size: 24px;
      margin: 0;
      letter-spacing: 1px;
    }

    main {
      max-width: 1000px;
      margin: 0 auto;
      overflow-x: auto; /* Garante que a tabela seja responsiva no celular */
    }

    .table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    .table thead tr {
      background-color: var(--primary-color);
      color: #ffffff;
      text-align: left;
      font-weight: bold;
    }

    .table th, .table td {
      padding: 12px 15px;
      border: 1px solid var(--border-color);
    }

    .table tbody tr:nth-of-type(even) {
      background-color: var(--bg-light); /* Linhas alternadas coloridas */
    }

    .table tbody tr:hover {
      background-color:#bebb4c65; /* Efeito visual ao passar o mouse */
    }
  </style>
</head>
<body>

  <div class="fontemenu">
    <h1>Relacao de Usuarios Cadastrados</h1>
  </div>

  <main>
    <table class="table">
      <thead>
        <tr>
          <th>Nome Completo</th>
          <th>Numero de Registro</th>
          <th>Nome de Usuario</th>
          <th>Nivel de Permissao</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
        
          if(!$conexao){
            die("<h1>Erro</h1>".mysqli_connect_error());
          }

          $sql = "select * from tbcadastronovousuario order by numeroRegistro ";
          $result = mysqli_query($conexao,$sql);


          while($linha = mysqli_fetch_array($result)){
            echo "<tr>";
             echo "<td>" . $linha['nomeCompleto'] . "</td>";
             echo "<td>" . $linha['numeroRegistro'] . "</td>"; 
             echo "<td>" . $linha['nomeUsuario'] . "</td>"; 
             echo "<td>" . $linha['nivelPermisao'] . "</td>";
              
             echo "</tr>";
          }


        ?>
        
      </tbody>
    </table>
  </main>
  <div style="height: 20px">

  </div>

  <div class =''style='display:flex;justify-content:center ; '>        
        <!-- Código correto para atualizar a página -->
        <button class=''  type="button" style='background-color:#0d6efd;color: #FFFFFF; ' onclick="window.location.reload();">
            Atualizar Página
        </button>
    </div>

</body>
</html>
