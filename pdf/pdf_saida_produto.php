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
        $sql = "select * from tbsaidaestoque order by dataSaida";
        $result = mysqli_query($conexao, $sql);

   

$relatorio = "
<style>
    body { font-family: sans-serif; }
    table { width: 100%; border-collapse: collapse; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background-color: #f2f2f2; }
</style>

<h1>Relatório de Saida de Estoque</h1>
<table>
    <thead>
        <tr>
            <th>Data Saida</th>
            <th>Código</th>
            <th>Nome do Produto</th>
            <th>Quantidade</th>
            <th>NF</th>

            <th>Cpf do Produto</th>
            <th>Numero da OS</th>
            <th>Situacao do Produto</th>
            
        </tr>
    </thead>
    <tbody>
";  

 while($linha_resultado = mysqli_fetch_array($result))
            {
               
                $relatorio.="<tr class =''>";
                $relatorio.="<td class =''> {$linha_resultado['dataSaida']} </td>";
                $relatorio.="<td> {$linha_resultado['codigoPeca']} </td>";
                $relatorio.="<td> {$linha_resultado['nomePeca']} </td>";

                $relatorio.="<td> {$linha_resultado['numeroNf']} </td>";
                $relatorio.="<td> {$linha_resultado['cpfPeca']} </td>";
                $relatorio.="<td> {$linha_resultado['numeroOs']} </td>";
                $relatorio.="<td> {$linha_resultado['situacaoPeca']} </td>";
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
$dompdf->stream("relacaodesaida.pdf",array("Attachment" => false));//true= download, false = navegador



?>