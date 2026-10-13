<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela Dividida</title>
    <style>
        /* Cria o layout lado a lado (50% para cada tela) */
        .container {
            display: flex;
            height: 100vh; /* Ocupa a altura inteira da tela */
            overflow: hidden;
        }

        /* Lado Esquerdo (Menu/Links) */
        .lado-esquerdo {
            flex: 1;
            background-color: #f0f0f0;
            padding: 20px;
            border-right: 2px solid #ccc;
        }

        /* Lado Direito (Conteúdo Espelhado) */
        .lado-direito {
            flex: 1;
            padding: 20px;
            overflow-y: scroll; /* Permite rolar apenas este lado */
            scroll-behavior: smooth; /* Efeito de rolagem suave */
        }

        /* Espaçamento apenas para demonstração do exemplo */
        .espaco {
            height: 600px;
            margin-bottom: 20px;
            background-color: #ddd;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <!-- LADO ESQUERDO: Onde ficam os links -->
        <div class="lado-esquerdo">
            <h3>Menu de Navegação</h3>
            <p>Clique abaixo para mover o lado direito:</p>
            <ul>
                <li><a href="#secao1">Ir para Seção 1</a></li>
                <li><a href="#secao2">Ir para Seção 2</a></li>
                <li><a href="#secao3">Ir para Seção 3</a></li>
            </ul>
        </div>

        <!-- LADO DIREITO: Onde o conteúdo se move -->
        <div class="lado-direito">
            
            <div id="secao1" class="espaco">
                <h2>Conteúdo da Seção 1</h2>
                <p>Este texto apareceu porque você clicou no link correspondente.</p>
            </div>

            <div id="secao2" class="espaco">
                <h2>Conteúdo da Seção 2</h2>
                <p>O lado direito rolou até aqui automaticamente.</p>
            </div>

            <div id="secao3" class="espaco">
                <h2>Conteúdo da Seção 3</h2>
                <p>Fim do conteúdo espelhado.</p>
            </div>

        </div>

    </div>

</body>
</html>
