<?php
// index.php

// 1. Primeiro, puxamos o arquivo da classe para podermos usar aqui
require_once "class.php";

// 2. Criamos o objeto da classe na memória (instanciar)
$ordemServico = new listaProdutos();

// 3. Chamamos a função e guardamos o resultado na nossa variável
$codigosDoBanco = $ordemServico->listaSuspensa();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Tela de Ordem de Serviço</title>
</head>
<body>

    <h1>Selecionar Ordem de Serviço</h1>

    <!-- 4. Criamos a lista suspensa (ComboBox) no HTML -->
    <select name="combo_ordem">
        
        <!-- 5. O laço que passa item por item da lista para criar as opções -->
        <?php foreach ($codigosDoBanco as $codigo): ?>
            <option value="<?php echo $codigo; ?>">
                <?php echo $codigo; ?>
            </option>
        <?php endforeach; ?>

    </select>

</body>
</html>
