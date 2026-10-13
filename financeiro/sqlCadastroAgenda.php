<?php

    $data = $_POST['Data'] ??'';
    $nome = $_POST['Nome'] ??'';
    $valor = $_POST['Valor'] ??'';
    $nf = $_POST['Nf'] ??'';
    $tipo = $_POST['Tipo'] ??'';

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if(!$conexao){
        die("erro".mysqli_connect_error());
    }

    $sql = "insert into agenda (data, nome, valor, nf,tipo) values ('$data','$nome','$valor','$nf','$tipo')";

    $resultado = mysqli_query($conexao,$sql);

    if($resultado){
        mysqli_close($conexao);
        echo "Certo";
        exit;
        
    }

        else{
        mysqli_close($conexao);
         echo "
        <link rel='stylesheet' href='../css/style.css'>

        <style>
            .container-erro {
                display: flex; 
                justify-content: center; 
                align-items: center; 
                min-height: 80vh;
                font-family: 'Segoe UI', Roboto, sans-serif;
            }
            .card-erro {
                background-color: #ffffff;
                padding: 40px;
                border-radius: 12px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                text-align: center;
                max-width: 450px;
                border-top: 5px solid #dc3545;
            }
            .card-erro h1 {
                color: #2c3e50;
                font-size: 22px;
                margin-bottom: 15px;
                line-height: 1.4;
            }
            .card-erro p {
                color: #7f8c8d;
                font-size: 15px;
                margin-bottom: 25px;
            }
            .btn-voltar {
                display: inline-block;
                background-color: #dc3545;
                color: white;
                text-decoration: none;
                padding: 12px 30px;
                border-radius: 6px;
                font-weight: bold;
                transition: background 0.2s;
            }
            .btn-voltar:hover {
                background-color: #2331c8;
            }
        </style>

        <div class='container-erro'>
            <div class='card-erro'>
                <h1>Registro não lançado</h1>
                <a class='btn-voltar cp caixa fontemenu' href='ordem_de_servico.php'>Voltar</a>
            </div>
        </div>
        ";

        exit;
    }

    



?>