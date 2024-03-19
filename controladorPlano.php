<?php
    require_once 'vendor/autoload.php';

    require_once 'modeloPlano.php';

    require_once 'vistaForm.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $credito = $_POST['fcredito'];
        $numPrest = $_POST['fprest'];

        $planoPagamentos = calculaPlano($credito, $numPrest);
        require_once 'vistaPlano.php';
    }
    elseif ($_SERVER["REQUEST_METHOD"] == "GET")
        {
            require_once 'vistaForm.php';
        }

    ?>

