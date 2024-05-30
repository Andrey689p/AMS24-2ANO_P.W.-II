<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Repetição For</title>
</head>
<style>
    /* Aqui eu estou REMOVENDO os botoes de incremento e decremento dos INPUTS*/
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<body class="text-light bg-dark container">
    <div class="col-md-6 offset-md-3">
        <form action=" exemplo3.php" method="POST">
            <h2 class="text-center">Digite o Primeiro Número</h1><br><input class="form-control" type="number" name="txt_1"><br>
                <h2 class="text-center">Digite o Segundo Número</h1><br><input class="form-control text-color-nome" type="text" name="txt_2"><br>
                    <input class="btn btn-success form-control" type="submit">


        </form>
    </div>
    <?php

    if ($_POST <> null) {
        $inicio = $_POST['txt_1'];
        $fim = $_POST['txt_2'];

        echo "<p class='text-center'>Números pares no intervalo de $inicio a $fim: </p><br>";
        
        $num = $inicio;
        do {
            if ($num % 2 == 0) {
                echo "<p class='text-center'>$num é par. </p><br>";
            }
            $num++;
        } while ($num <= $fim);
    }
    ?>
</body>
</html>