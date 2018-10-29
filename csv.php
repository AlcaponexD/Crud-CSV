<?php   
//conexao
include_once "conect/conexao.php";

// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=relatorio.csv');


// fetch the data
$smtm = $cnn->prepare("SELECT clients.name, clients.cellphone , clients.birthday , clients.gender, clients.blouse , clients.pants, clients.top, clients.biquinitop, clients.shoes, clients.obs , users.name AS Usuario_ADM FROM clients INNER JOIN users ON users.id = clients.user_adm");
//Executa uma consulta do banco de dados
//Executa a consulta acima e grava na variavel os dados
$smtm->execute();

$results_name = $smtm->fetchALL(PDO::FETCH_ASSOC);
//Cabeçalho da planilha na posição [0]
$linha[0] = "Nome;Telefone;Nascimento;Genero;Blusa;Calca;Top;Biquini Bottom;Calcado;Obs; Usuario_ADM";
//Variavel para incremento (loop)
$i = 1;
//Transformar os arrays em strings)

foreach($results_name as $k => $v){

    //Transforma o restante do array em string separadas por ;
    $colunas = implode($v,";");

    //Variavel cabecalho + strings tratadas + incremento e transforma novamente em array com as posiçoes vinda do incremento.
    $linha[$i] = $colunas;
    //Variavel de incremento , enquanto tiver dados +1
    $i++;

    
}
//Transforma o resultado em string novamente concatenado com quebras de linha
$content = implode($linha,"\n");
//Exibe conteudo
echo $content;

?>