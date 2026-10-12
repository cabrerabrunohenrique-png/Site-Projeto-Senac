<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:index.php');
    exit;

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    
    <link rel ="stylesheet" href="../css/style.css">
    <link rel ="stylesheet" href="../css/style_agenda.css">

    <title>Agenda</title>
</head>
<body class="container" style='background-color: #F7F7F7'>
    <nav class ="">
         <a class="letraPretoAzul caixa text-bg-info  fontemenu le link-alerta" href="/navegacao.php">
                Voltar
        </a>       
    
    </nav>
    <main class='mm' style="display:flex;justify-content:">
        <div class="mm" style="width:100vb; height:100vb">ttt
           
        </div>
        <div class="mm" style="width:100vb" >ttt
            <form action="">
                <div>
                    <label for="data">data do pagamento</label>
                    <input type="date" id="data" name="data">
                </div>
                <div>
                    <label for="nome">Nome do Fornecedor/Prestador de Servico</label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div>
                    <label for="">Valor do Boleto</label>
                    <input type="number">
                </div>
                <div>
                    <label for="">Numero da NF</label>
                    <input type="number">
                </div>
                <div>
                    <label for="">tipo</label>
                    <select name="" id="">
                        <option value=""></option>
                        <option value="a">a</option>
                    </select>
                </div>
                <div>
                    <button type="submit" >Enviar</button>
                </div>
            </form>
            
        </div>
    </main>


</body>
</html>