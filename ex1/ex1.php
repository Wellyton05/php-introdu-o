<?php
    if (isset($_GET['fahreinheit'])) {
       
        $fahreinheit = $_GET['fahreinheit'];
        $celsius = ($fahreinheit - 32) / 1.8;

        if ($celsius <= 0) {
            echo $celsius;
            echo "<br><br>FRIO ÁRTICO!";
        } elseif ($celsius <= 12 && $celsius >= 1){
            echo $celsius;
            echo "MUITO FRIO! ";
        } elseif ($celsius <= 23 && $celsius >= 13) {
            echo $celsius;
            echo "CLIMA AMENO! ";
        } elseif ($celsius <= 32 && $celsius >= 24) {
            echo $celsius;
            echo "CALOR! ";
        } elseif ($celsius <= 40 && $celsius >= 33) {
            echo $celsius;
            echo "CALOR TÓRRIDO! ";
        } else {
            echo "SEM REGISTRO! ";
        }
    }
?>