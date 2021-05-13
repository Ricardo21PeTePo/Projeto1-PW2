
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <script src="https://kit.fontawesome.com/7928671f8b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <style>
        
        .hero {
            text-align: center;
            margin-bottom: 10px;
            padding-top: 25px;
        }
        table {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <section class="hero is-info">
        <h1 class="title">Cadastre um novo jogo!</h1>
        <hr>
    </section>
    <section class="container">
        <div class="columns">
            <div class="column"></div>
            <div class="column">
                <form method="POST" action="processamento.php">
                    <div class="field">
                        <label class="label" for="nome">Nome</label>
                        <div class="control">
                            <input class="input" id="nome" type="text" name="nome" placeholder="Call of Duty" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="produtora">Produtora</label>
                        <div class="control">
                            <input class="input" id="produtora" type="text" name="produtora" placeholder="Treyarch" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="preco">Preço de lançamento</label>
                        <div class="control">
                            <input class="input" id="preco" type="number" min="0" max="400" name="preco" placeholder="250,00" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="gamertag">Sua gamertag</label>
                        <div class="control">
                            <input class="input" id="gamertag" type="text" name="gamertag" placeholder="UnknownSoldier" required>
                        </div>
                    </div>
                    
                    <div class="field">
                        <label class="label">Classificação:</label>
                        <div class="control">
                            <label class="radio">
                                <input type="radio" value="L" name="classificacao" required>
                                Livre
                            </label>
                            <label class="radio">
                                <input type="radio" value="14" name="classificacao" required>
                                14+
                            </label>
                            <label class="radio">
                                <input type="radio" value="16" name="classificacao" required>
                                16+
                            </label>
                            <label class="radio">
                                <input type="radio" value="18" name="classificacao" required>
                                18+
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <label for="categ" class="label">Categoria:</label>
                        <div class="select">
                            <select name="categ" id="i6">
                                <option value="RPG">RPG</option>
                                <option value="FPS" selected>FPS</option>
                                <option value="MOBA">MOBA</option>
                                <option value="Simulador">Simulador</option>
                                <option value="Plataforma">Plataforma</option>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="i7">Comentário</label>
                        <div class="control">
                            <textarea class="textarea" id="i7" name="comment" required placeholder="Jogo de tiro e guerra..."></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-danger" type="reset">Reset</button>
                            <button class="button is-primary" name="operacao" value="cadastrar" type="submit">Enviar</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="column"></div>
        </div>
    </section>
    <?php
        $data = file_get_contents("jogos.json");
        $dataArray = json_decode($data, true);
    ?>
    <table class="table is-fullwidth is-bordered is-striped is-hoverable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Produtora</th>
                <th>Preço</th>
                <th>Gamertag</th>
                <th>Classificação</th>
                <th>Categoria</th>
                <th>Resenha</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataArray as $indice => $jogo) {?>
                <tr>
                    <td><?php echo $jogo['nome']; ?></td>
                    <td><?php echo $jogo['producer']; ?></td>
                    <td><?php echo $jogo['preco']; ?></td>
                    <td><?php echo $jogo['gamertag']; ?></td>
                    <td><?php echo $jogo['classificacao']; ?></td>
                    <td><?php echo $jogo['categoria']; ?></td>
                    <td><?php echo $jogo['resenha']; ?></td>
                    <td>
                        <a href="alteração.php?Indice=<?php echo $indice; ?>" class='button is-small is-warning'>
                            <i class='fas fa-edit'></i>
                        </a>
                        <a href="exclusão.php?Indice=<?php echo $indice; ?>" class='button is-small is-danger'>
                            <i class='fas fa-trash-alt'></i>
                        </a>
                    </td>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>