<?php
//
//
//
//
//
//
//

$canadian_rate = .80;
$canadian_dollars = 2000*$canadian_rate;

$ruble_rate = .013;
$ruble_dollars = 2000*$ruble_rate;

$pounds_rate = 1.37;
$pounds_dollars = 2000*$pounds_rate;

$euros_rate = 1.37;
$euros_dollars = 2000*$euros_rate;

$yen_rate = 0.0087;
$yen_dollars = 2000*$yen_rate;

$total = $canadian + $ruble + $pounds + $euros + $yen;

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width,initial-scale-1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <title>Currency Logic</title>
        <style>
            table {
                width:500px;
                margin:0 auto;
                border:1px solid red;
                border-collapse:collapse;
            }

            th {
                font-size:2em;
                padding:10px;
            }

            td {
                border:1px solid red;
                padding:10px;
                font-size:1.2em;
            }

            h1, h2 {
                text-align:center;
            }
        </style>
    </head>

        <body>
        <table>
        <tr>
            <th>Currency</th>
            <th>US Dollars</th>
        </tr>

        <tr>
            <td>Canadian</td>
            <td><?php echo number_format($canadian, 2) ;      ?></td>
        </tr>

        <tr>
            <td>Rubles</td>
            <td><?php echo number_format($ruble, 2) ;      ?></td>
        </tr>

        <tr>
            <td>Pounds</td>
            <td><?php echo number_format($pounds, 2) ;      ?></td>
        </tr>

        <tr>
            <td>Euros</td>
            <td><?php echo number_format($euros, 2) ;      ?></td>
        </tr>

        <tr>
            <td>Yen</td>
            <td><?php echo number_format($yen, 2) ;      ?></td>
        </tr>

        <tr>
            <td><b>Total</b></td>
            <td><?php echo '<b>$'.number_format($total, 2). 'US Dollars';?> </b></td>
        </tr>
        </table>

</body>

        </body>

</html>



