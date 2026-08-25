<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">           
    <link rel ="stylesheet" href="../css/style_lista.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Cart</title>
</head>

<body >
    <nav class ="container ">
        <div class ="bg-body-secondary" style="display:flex;justify-content: space-between;">
            <div>
                <a class="letraPretoAzul caixa text-bg-info  fontemenu le link-alerta" href="../navegacao.php">
                    Menu
                </a>
            </div>
            <div>
                <a class='letraFundoAzul caixa fontemenu cp  le link-alerta' href='../produtos/cadastro_de_produtos.php'> PAGINA - PRODUTOS</a>
            </div>           
                  
            <div class="">                               
                <a class="cp caixa  fontemenu  text-bg-success" href='../card/cart_produto.php ' onclick="window.open(this.href, 'popup', 'width=600,height=400'); return false;" >Lista de Produtos </a>
            </div>
        </div>
    </nav>
    <div style='height: 15px  ' ></div>     
    <main class=" texto_centro borda ">
        <table style="width:100%">
            <thead>
                <h1>Dados do  Produto</h1>
                <tr class=''>
                    <td class="borda">Data de Cadastro </td>
                    <td class="borda">Codigo do Produto</td>
                    <td class="borda">Nome do Produto</td>
                    <td class="borda">Variavel do Produto</td>
                    <td class="borda">Fabricante</td>
                    <td class="borda">Familia do Produto</td>
                    
                    <td class="borda">Categoria do Produto</td>
                    <td class="borda">Preço do Produto R$</td>
                    <td class="borda">Data da ultima Alteração</td>
                </tr>
            </thead>
            <tbody>
  
            <?php

                $codigoproduto = $_GET ['id'];
                    
                try{$conexao = mysqli_connect("localhost","root","","bdprojetosenac");}
                catch(mysqli_sql_exception $e){
                    die ("Erro com o banco de dados"."<h1>Erro</h1> <a href='../index.php'>Voltar</a>" );
                }

                $sql = "select * from tbcadastropeca where codigoproduto = {$codigoproduto}";
                
                $result = mysqli_query($conexao, $sql);

                if ($linha = mysqli_fetch_assoc($result)){
                        echo"<link rel ='stylesheet' href='../css/style.css'>";
                        echo"<tr class ='texto_centro mouse'>";
                        echo " <td class='borda'>{$linha['datacriacao']}</td>";
                        echo " <td class='borda'>{$linha['codigoproduto']}</td>";
                        echo " <td class='borda'>{$linha['nomeProduto']}</td>";
                        echo " <td class='borda'>{$linha['variavelproduto']}</td>";
                        echo " <td class='borda'>{$linha['fabricanteProduto']}</td>";
                        echo " <td class='borda'>{$linha['familiaproduto']}</td>";
                        echo " <td class='borda'> {$linha['categoriaproduto']}</td>";
                        echo " <td class='borda'>{$linha['preco']}</td>";
                        echo " <td class='borda'> {$linha['dataalteracao']}</td>";        
                }
                    
            ?>   
            
            
        </table>
    </main>
    <div class=''style='height:95px'> </div>
    <div class =''style='display:flex;justify-content:center'>        
    <button class='btn-success' type='button'  onclick='window.location.reload();'>
        Atualizar Página
    </button>
    </div>
    
</body>
        
        
        

        


