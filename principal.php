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
        form {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<section class="container">
    <div class="columns">
        <div class="column"></div>
        <div class="column">
            <form>
                <div class="field">
                    <label class="label" for="i1">I1</label>
                    <div class="control">
                        <input class="input" type="text" name="i1">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="i2">I2</label>
                    <div class="control">
                        <input class="input" type="text" name="i2">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="i3">I3</label>
                    <div class="control">
                        <input class="input" type="text" name="i3">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="i4">I4</label>
                    <div class="control">
                        <input class="input" type="text" name="i4">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="i5">
                            i5
                        </label>
                        <label class="radio">
                            <input type="radio" name="i5">
                            i6
                        </label>
                    </div>
                </div>
                <div class="field">
                    <label for="i7">i7</label>
                    <div class="control">
                        <textarea class="textarea" name="i7" placeholder="Text area i7"></textarea>
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