 <?php
    $integrantes = $_GET['integrantes'];
    $nome = $_GET['nome'];

    switch ($integrantes):
        case 0:
            echo "IMPOSSÍVEL CRIAR EQUIPE COM 0 INTEGRANTES! ";
            break;
        case 1:
            echo "IMPOSSÍVEL SER INDIVIDUAL! ";
            break;
        case 2:
            echo "EQUIPE FORMADA COM SUCESSO! ";
            echo "<br>LÍDER DO GRUPO: $nome";
            break;
        case 3:
            echo "EQUIPE FORMADA COM SUCESSO! ";
            echo "<br>LÍDER DO GRUPO: $nome";
            break;
        case 4:
            echo "EQUIPE FORMADA COM SUCESSO! ";
            echo "<br>LÍDER DO GRUPO: $nome";
            break;
        default:
            echo "DIGITE UM NÚMERO DE INTEGRANTES VÁLIDO! (1-4)";
            break;
        endswitch;
?>