<!--dados serao enviados daqui para a pagina de processamento-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/7928671f8b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <style>
        
        .hero {
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <section class="hero">
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
                                <option value="rpg">RPG</option>
                                <option value="fps" selected>FPS</option>
                                <option value="moba">MOBA</option>
                                <option value="simulador">Simulador</option>
                                <option value="plataforma">Plataforma</option>
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
                            <button class="button is-primary" type="submit">Enviar</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="column"></div>
        </div>
    </section>
    
</body>
</html>