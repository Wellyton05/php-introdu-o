<?php

    if (isset($_GET['pais'])) {
        $pais = $_GET['pais'];

        if ($pais === 'brasil') {
            echo "testebrasil";
        } elseif ($pais === 'peru') {
            echo "testeperu";
        } elseif ($pais === 'eua') {
            echo "testeeua";
        }
    } 
    
?>