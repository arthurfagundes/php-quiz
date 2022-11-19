<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz avaliativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" method="POST">
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <h1 class="display-1">Quiz avaliativo - Exercicio 04</h1>
            </header>
            <div class="p-5 mb-4 bg-light rounded-3">
                <label class="form-label">Insira uma palavra:</label>
                <div class="input-group mb-3 text-center">
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="word">
                </div>
                <div class="d-grid gap-2 d-md-block text-start">
                    <button class="btn btn-primary" type="submit" name="result">Resultado</button>
                </div>
                <div class="d-inline-flex">
                    <?php
                    if (isset($_POST['result'])) {
                        $word =  $_POST['word'];
                        echo "Palavra:  $word <br> ";
                        $word = strtoupper($word);
                        $tamanho = strlen($word);
                        $repeat = "";
                        for ($i = 0; $i < $tamanho; $i++) {
                            $repeat =  $repeat . ' ' . $word;
                            echo $repeat;
                            echo "<br>";
                        }
                    }
                    ?>
                </div>
            </div>

        </div>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>