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
<body class="" style='background-color: #F7F7F7'>
    <nav class ="">
         <a class="letraPretoAzul caixa text-bg-info  fontemenu le link-alerta" href="/navegacao.php">
                Voltar
        </a>       
    
    </nav>
    <main class='mm' style="display:flex;justify-content:">
        <div class="mm" style="width:120vb; height:100vb">
            <iframe name="janela-do-lado" width="800" height="400" src="about:blank"></iframe>
        </div>

        <div class="mm" style="width:100vb" >
            <div class="mb-3 " style="display:flex;justify-content:center">
                <h2 class ="fontemenu">Lançamento de boletos</h2>
                

            </div>
            <form action="sqlCadastroAgenda.php" method="post" target="janela-do-lado">
                <div class="mb-3  " >
                <label class="" style="width:45vb" for="data">Data do Pagamento</label>
                    <input class="" type="date" id="data" name="Data">
                </div>
                <div class="mb-3" >
                    <label for="nome" style="width:45vb">Nome do Fornecedor/Prestador de Servico</label>
                    <input type="text" id="nome" name="Nome" style="width:40vb" class=''>
                </div>
                <div class="mb-3">
                    <label style="width:45vb" for="valor">Valor do Boleto</label>
                    <input type="number" id="valor" name='Valor'>
                </div>
                <div class="mb-3">
                    <label style="width:45vb" for="nf">Numero da NF</label>
                    <input type="number" id='nf' name='Nf'>
                </div>
                <div>
                    <label class="mb-3" style="width:45vb" for="tipo">Tipo</label>
                    <select id="tipo" name='Tipo'>
                        <option value=""></option>
                        <option value="fornecedor">Fornecedor</option>
                        <option value="administrativo">Administrativo</option>
                        <option value="pessoal">Pessoal</option>
                    </select>
                </div>
                <div class="" style="display:flex; justify-content:center">
                    <button type="submit" >Enviar</button>
                </div>
            </form>
            
        </div>
    </main>


</body>
</html> 

