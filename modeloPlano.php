<?php
    require 'vendor/autoload.php';
    use Carbon\Carbon;
    function calculaPlano($credito, $numPrest)
    {
        $valorPrestacao = $credito / $numPrest;
        $data = Carbon::now();

        for ($i = 0; $i < $numPrest; $i++) {
            $planoPagamentos[$i][0]=$data->addMonth()->copy()->toDateString();
            $planoPagamentos[$i][1]=$valorPrestacao;
            $planoPagamentos[$i][2]=$credito-(($i+1)*$valorPrestacao);
        }
        return $planoPagamentos;
    }
?>