<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>



<?php

// fazer o download do DomPDF e colocar na pasta do seu projeto
//Extrair o arquvio e deixar tudo dentro da pasta dompdf/ (cuidado com a subpastas)

//incluir o autoloader
require_once '../dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

$conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
        if(!$conexao){
            die("<h3>Erro</h3>".mysqli_connect_error());
        }
        $sql = "select * from tbcadastropeca order by codigoproduto";
        $result = mysqli_query($conexao, $sql);

   

$relatorio = "
<style>
    body { font-family: sans-serif; }
    table { width: 100%; border-collapse: collapse; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background-color: #f2f2f2; }
</style>

<h1>Relatório de Produtos</h1>
<table>
    <thead>
        <tr>
            <th>Codigo do Produto</th>
            <th>Nome do Produto</th>
            <th>Fabricante  do Produto</th>
            <th>Peso do Produto em grama</th>
            <th>Alturo do Produto em cm</th>

            <th>Comprimento do Produto em cm</th>
            
        </tr>
    </thead>
    <tbody>
";  

 while($linha_resultado = mysqli_fetch_array($result))
            {
               
                $relatorio.="<tr class =''>";
                $relatorio.="<td class =''> {$linha_resultado['codigoproduto']} </td>";
                $relatorio.="<td> {$linha_resultado['nomeProduto']} </td>";
                $relatorio.="<td> {$linha_resultado['fabricanteProduto']} </td>";

                $relatorio.="<td> {$linha_resultado['pesoProduto']} </td>";
                $relatorio.="<td> {$linha_resultado['alturaProduto']} </td>";
                $relatorio.="<td> {$linha_resultado['comprimentoProduto']} </td>";
                
                $relatorio.="</tr>";
            } ;

$relatorio .= "
    </tbody>
</table>
";



// Inicializa e usa a classe Dompdf
$dompdf = new Dompdf();
//Passa a variável com TODO o HTML acumulado
$dompdf->loadHtml($relatorio);

// Configura o tamanho e orientação da página
$dompdf->setPaper('A4', 'landscape');//portrait = folha de pé, 

// Renderiza o PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream('mudaraqui.pdf');
$dompdf->stream("relacaoproduto.pdf",array("Attachment" => false));//true= download, false = navegador



?>