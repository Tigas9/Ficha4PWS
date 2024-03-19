<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
            <tr>
                <th>Data de Vencimento</th>
                <th>Valor da Prestação Mensal</th>
                <th>Valor em Dívida</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($planoPagamentos as $pagamento)
            {
                echo '<tr>';
                echo '<td>', $pagamento[0], '</td>';
                echo '<td>', $pagamento[1], '</td>';
                echo '<td>', $pagamento[2], '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </body>
</html>