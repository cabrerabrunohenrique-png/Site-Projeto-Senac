<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel ="stylesheet" href="../css/style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    
    <title>Quantidade_saida</title>
</head>
<body class ="container ">
<header class='' > </header>
  
        <div class ="bg-body-secondary" style="display:flex;justify-content: center;">
            
            <div>
                
                    Quantidade de Entrada por Produto
               
            </div>
           
           
        </div>
       
        <div class=''style='height:20px'> </div>
      
        <main >
            <table class="fontemenu table ">
                <thead>
                    <tr class=' text-center le'>
                    
                        <td>codigo Produto</td>
                        <td>nome Produto</td>
                        <td>quantidade Produto</td>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
                        if(!$conexao){
                            die("<h3>Erro</h3>".mysqli_connect_error());
                        }
                    
                        $sql = " select codigopeca,nomepeca, sum(quantidapeca) as quantidadetotal from tbsaidaestoque  group by codigopeca,nomepeca ";

                        $resultado = mysqli_query($conexao,$sql);
                                    
            
                
                        if($resultado){
                                        

                            while($linha_resultado = mysqli_fetch_assoc($resultado)){
                        
                                echo"<tr class ='text-center'>";
                            
                                echo "<td> {$linha_resultado['codigopeca']} </td>";
                                echo "<td> {$linha_resultado['nomepeca']} </td>";

                                echo "<td> {$linha_resultado['quantidadetotal']} </td>";
                                
                                echo"</tr>";
                            
                            }
                            mysqli_close($conexao);
                        }   
                    ?>
                </tbody>
            </table>
        </main>

    
    <div class =''style='display:flex;justify-content:center'>        
        <!-- Código correto para atualizar a página -->
            <button class='text-bg-primary' type="button"  onclick="window.location.reload();">
                Atualizar Página
            </button>
        </div>

    
</body>
</html>