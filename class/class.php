<?php
// OrdemServico.php

class listaProdutos {
    
    // Função pública que vai retornar a nossa lista de códigos
    public function listaSuspensa() {
        // Criamos uma lista (array) simples com os códigos
       $conexao = mysqli_connect("localhost","root", "","bdprojetosenac");
       if(!$conexao){
        die("<h1>ERRO</h1>".mysqli_connect_error());
       }
       $sql ="select codigoproduto from tbcadastropeca";
       $resultado = mysqli_query($conexao,$sql);

       $lista_de_Produtos =[];

       while ($linha_resultado = mysqli_fetch_assoc($resultado)){
        $lista_de_Produtos[] =$linha_resultado['codigoproduto'];

       }
        mysqli_close($conexao);
        // Devolvemos essa lista para quem chamar a função
        return $lista_de_Produtos;
    }
}




?>