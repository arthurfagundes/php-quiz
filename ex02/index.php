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
                <h1 class="display-1">Quiz avaliativo - Exercicio 02</h1>
            </header>
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Número 01:</span>
                    <input type="number" class="form-control" placeholder="Insira o primeiro número" aria-label="Username" aria-describedby="basic-addon1" name="number01">
                </div>
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Número 02:</span>
                    <input type="number" class="form-control" placeholder="Insira o segundo número" aria-label="Username" aria-describedby="basic-addon1" name="number02">
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="add">
                    <label class="form-check-label" for="inlineRadio1">Somar</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="subtract">
                    <label class="form-check-label" for="inlineRadio2">Subtrair</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="multiply">
                    <label class="form-check-label" for="inlineRadio2">Multiplicar</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="divide">
                    <label class="form-check-label" for="inlineRadio2">Dividir</label>
                </div>
                <div class="d-grid gap-2 d-md-block text-start">
                    <button class="btn btn-primary" type="submit" name="result">Resultado</button>
                </div>
                <?php
                $number01 = $_POST["number01"];
                $number02 = $_POST["number02"];

                if (isset($_POST["result"])) {
                    $option = $_POST["inlineRadioOptions"];
                    if ($option == "add") {
                        $result = $number01 + $number02;
                    } else if ($option == "subtract") {
                        $result = $number01 - $number02;
                    } else if ($option == "multiply") {
                        $result = $number01 * $number02;
                    } else if ($option == "divide") {
                        $result = $number01 / $number02;
                    }
                }
                echo "<h1 class='display-1'>Resultado da operação: $result</h1>";
                ?>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>