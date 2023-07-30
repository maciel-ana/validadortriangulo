<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
    if (isset($_POST['lado1']) && isset ($_POST['lado2']) && isset ($_POST['lado3'])) {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];

        function validarTriangulo($lado1, $lado2, $lado3) {
            if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
                if ($lado1 == $lado2 && $lado2 == $lado3) {
                    return 'Triângulo Equilátero';
                } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                    return 'Triângulo Isóceles';
            } else {
                return 'Triângulo Escaleno';
            }
        } else {
            return 'Não é possível formar um triângulo com esses lados.';
        }
     }

     echo '<p>Lado 1:' . $lado1 . '</p>';
     echo '<p>Lado 2:' . $lado2 . '</p>';
     echo '<p>Lado 3:' . $lado3 . '</p>';
     echo '<p>' . validarTriangulo($lado1, $lado2, $lado3) . '</p>';
    } else {
        echo '<p> Inform os três lados do triângulo para verificar. </p>';
    }
?>
<br>
<a href="index.html">Verificar novamente</a>
</body>
</html>