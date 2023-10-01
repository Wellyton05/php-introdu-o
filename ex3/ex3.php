<?php

    if (isset($_GET['inferior']) && isset($_GET['superior'])) {
       
        $inferior = $_GET ['inferior'];
        $superior = $_GET ['superior'];
    
        if ($inferior >= $superior) {
            echo "Inferior maior ou igual ao superior! ";
            echo "<br><a href = \"index.html\"> VOLTAR </a>";
        } else {
            $cont = $inferior;
            echo 'Números entre o limite inferior e superior: ';
            do {
                echo $cont. ' ';
                $cont++;
            } while ($cont <= $superior);
        }
    }
?>