<!-- dados serao processados aqui e salvos no arquivo json-->
<?php
$file = "jogos.json";

$counter = 0;
$jogos;
$jogosJSON = file_get_contents($file);

foreach (json_decode($jogosJSON, true) as $jogo) {
    $jogos[$counter] = $jogo;
    $counter++;
}

var_dump($jogos);

// $nome = $_POST['nome'];
// $producer = $_POST['produtora'];
// $preco = $_POST['preco'];
// $gamertag = $_POST['gamertag'];
// $classific = $_POST["classificacao"];
// $categ = $_POST['categ'];
// $resenha = $_POST['comment'];

// $dados = Array(
//     '0' => Array('nome' => $nome,
//     'producer' => $producer,
//     'preco' => $preco,
//     'gamertag' => $gamertag,
//     'classificacao' => $classific,
//     'categoria' => $categ,
//     'resenha' => $resenha)
// );
// $dados_json = json_encode(array("jogo" => $dados));



// file_put_contents($file, $dados_json);

// header("Location: principal.php");
// exit;
?>