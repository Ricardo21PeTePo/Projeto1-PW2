<?php 
$ind = $_GET['Indice'];
$data = file_get_contents("jogos.json");
$dataArray = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
    <script src="https://kit.fontawesome.com/7928671f8b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <style>
        .hero {
            text-align: center;
            margin-bottom: 10px;
            padding-top: 25px;
        }
    </style>
</head>
<body>
    <section class="hero is-info">
        <h1 class="title">Edite seu jogo!</h1>
        <hr>
    </section>
    <section class="container">
        <div class="columns">
            <div class="column"></div>
            <div class="column">
                <?php foreach($dataArray as $indice => $jogo){
                        if ($indice == $ind){    
                ?>
                <form method="POST" action="processamento.php">
                    <div class="field">
                        <label class="label" for="nome">Nome</label>
                        <div class="control">
                            <input class="input" id="nome" type="text" value="<?php echo $jogo['nome'] ?>" name="nome" placeholder="Call of Duty" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="produtora">Produtora</label>
                        <div class="control">
                            <input class="input" id="produtora" type="text" value="<?php echo $jogo['producer'] ?>" name="produtora" placeholder="Treyarch" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="preco">Preço de lançamento</label>
                        <div class="control">
                            <input class="input" id="preco" type="number" value="<?php echo $jogo['preco'] ?>" min="0" max="400" name="preco" placeholder="250,00" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="gamertag">Sua gamertag</label>
                        <div class="control">
                            <input class="input" id="gamertag" type="text" value="<?php echo $jogo['gamertag'] ?>" name="gamertag" placeholder="UnknownSoldier" required>
                        </div>
                    </div>
                    
                    <div class="field">
                        <label class="label">Classificação:</label>
                        <div class="control">
                            <label class="radio">
                                <?php if($jogo["classificacao"] == "L"){ ?>
                                <input type="radio" value="L" name="classificacao" required checked>
                                <?php } else {?>
                                <input type="radio" value="L" name="classificacao" required>
                                <?php } ?>
                                Livre
                            </label>
                            <label class="radio">
                                <?php if($jogo["classificacao"] == "14"){ ?>
                                <input type="radio" value="14" name="classificacao" required checked>
                                <?php } else {?>
                                <input type="radio" value="14" name="classificacao" required>
                                <?php } ?>
                                14+
                            </label>
                            <label class="radio">
                                <?php if($jogo["classificacao"] == "16"){ ?>
                                <input type="radio" value="16" name="classificacao" required checked>
                                <?php } else {?>
                                <input type="radio" value="16" name="classificacao" required>
                                <?php } ?>
                                16+
                            </label>
                            <label class="radio">
                                <?php if($jogo["classificacao"] == "18"){ ?>
                                <input type="radio" value="18" name="classificacao" required checked>
                                <?php } else {?>
                                <input type="radio" value="18" name="classificacao" required>
                                <?php } ?>
                                18+
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <label for="categ" class="label">Categoria:</label>
                        <div class="select">
                            <select name="categ" id="i6">
                                <?php if($jogo['categoria'] == "RPG"){ ?>
                                <option value="RPG" selected>RPG</option>
                                <option value="FPS">FPS</option>
                                <option value="MOBA">MOBA</option>
                                <option value="Simulador">Simulador</option>
                                <option value="Plataforma">Plataforma</option>
                                <?php }elseif($jogo['categoria'] == "FPS"){ ?>
                                <option value="RPG">RPG</option>
                                <option value="FPS" selected>FPS</option>
                                <option value="MOBA">MOBA</option>
                                <option value="Simulador">Simulador</option>
                                <option value="Plataforma">Plataforma</option>
                                <?php }elseif($jogo['categoria'] == "MOBA"){ ?>
                                <option value="RPG">RPG</option>
                                <option value="FPS">FPS</option>
                                <option value="MOBA" selected>MOBA</option>
                                <option value="Simulador">Simulador</option>
                                <option value="Plataforma">Plataforma</option>
                                <?php }elseif($jogo['categoria'] == "Simulador"){ ?>
                                <option value="RPG">RPG</option>
                                <option value="FPS">FPS</option>
                                <option value="MOBA">MOBA</option>
                                <option value="Simulador" selected>Simulador</option>
                                <option value="Plataforma">Plataforma</option>
                                <?php }elseif($jogo['categoria'] == "Plataforma"){ ?>
                                <option value="RPG">RPG</option>
                                <option value="FPS">FPS</option>
                                <option value="MOBA">MOBA</option>
                                <option value="Simulador">Simulador</option>
                                <option value="Plataforma" selected>Plataforma</option>
                                <?php } else { ?>
                                <option value="RPG">RPG</option>
                                <option value="FPS">FPS</option>
                                <option value="MOBA">MOBA</option>
                                <option value="Simulador">Simulador</option>
                                <option value="Plataforma">Plataforma</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="i7">Comentário</label>
                        <div class="control">
                            <textarea class="textarea" id="i7" name="comment" required><?php echo $jogo['resenha']; ?></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <a href="principal.php"><button class="button is-danger">Cancelar</button></a> 
                            <button class="button is-primary" name="operacao" value="alterar" type="submit">Editar</button>
                        </div>
                    </div>
                    
                </form>
                <?php 
                    }
                } 
                ?>
            </div>
            <div class="column"></div>
        </div>
    </section>
</body>
</html>