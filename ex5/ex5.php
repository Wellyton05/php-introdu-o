<?php
    
    if (isset($_GET['isbn'])){ //verificar se o formulário foi submetido...
        $isbn = $_GET['isbn'];

        if (strlen(trim($isbn)) === 10) {
            $soma = 0;

            for($i = 0; $i < 10; $i++) {
                $soma += $isbn[$i] * (10 - $i);
            }

            if ($soma % 11 === 0) {
                echo "O ISBN É VÁLIDO! ";
            } else {
                echo "O ISBN É INVÁLIDO! ";
            }
        } else {
            echo "DIGITE UM ISBN COM 10 DIGITOS! ";
        }
    } 
?>