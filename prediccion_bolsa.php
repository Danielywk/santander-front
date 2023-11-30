<!DOCTYPE html>
<html>
<head>
    <title>VALUES PREDICTION</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .title {
            text-align: center;
            margin-top: 50px;
            color: #3366ff;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
    </style>
</head>
<body>
    <h1 class="title">VALUES PREDICTION</h1>
</body>
</html>




<!--  prediccion 1 *************************************************************************************-->
<?php
// Reemplaza "tu_api_key" con tu propia clave API de Alpha Vantage
$api_key = "V3G1KRQZTIMGM00Z";
$symbol = "AMX";

$url = "https://www.alphavantage.co/query?function=TIME_SERIES_MONTHLY_ADJUSTED&symbol=$symbol&apikey=$api_key";

$json = file_get_contents($url);

$amxdata = json_decode($json, true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>AMX</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .title {
            text-align: center;
            margin-top: 50px;
            color: #3366ff;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
    </style>
</head>
<body>
    <h2 class="title">AMX AMERICAN MOBILE</h2>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Datos de Bolsa</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        iframe {
            width: 100%;
            max-width: 420px;
            height: 310px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 420px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        @media (max-width: 600px) {
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <iframe src="https://ssltvc.investing.com/?pair_ID=8183&height=480&width=650&interval=300&plotStyle=area&domain_ID=1&lang_ID=1&timezone_ID=7"></iframe>

    <?php
    // Tu código PHP para mostrar la tabla
    if(isset($amxdata['Monthly Adjusted Time Series'])) {
        $timeSeries = $amxdata['Monthly Adjusted Time Series'];
    ?>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Precio de Cierre Ajustado</th>
                <th>Volumen</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $counter = 0;
            foreach($timeSeries as $date => $values) {
                echo "<tr>";
                echo "<td>$date</td>";
                echo "<td>" . $values['5. adjusted close'] . "</td>";
                echo "<td>" . $values['6. volume'] . "</td>";
                echo "</tr>";

                $counter++;
                if ($counter >= 5) {
                    break;
                }
            }
        ?>
        </tbody>
    </table>
    <?php
    } else {
        echo "No se encontraron datos para este símbolo.";
    }
    ?>
</div>

</body>
</html>


<!--  prediccion 1 FIN*************************************************************************************-->
<!--  prediccion 2 *************************************************************************************-->
<?php
// Reemplaza "tu_api_key" con tu propia clave API de Alpha Vantage
$api_key = "V3G1KRQZTIMGM00Z";
$symbol = "T";

$url = "https://www.alphavantage.co/query?function=TIME_SERIES_MONTHLY_ADJUSTED&symbol=$symbol&apikey=$api_key";

$json = file_get_contents($url);

$tdata = json_decode($json, true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>AMX</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .title {
            text-align: center;
            margin-top: 50px;
            color: #3366ff;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
    </style>
</head>
<body>
    <h2 class="title">T AT&T</h2>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Datos de Bolsa</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        iframe {
            width: 100%;
            max-width: 420px;
            height: 310px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 420px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        @media (max-width: 600px) {
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="container">
<iframe src="https://ssltvc.investing.com/?pair_ID=244&height=480&width=650&interval=300&plotStyle=area&domain_ID=1&lang_ID=1&timezone_ID=7"></iframe>
    <?php
    // Tu código PHP para mostrar la tabla
    if(isset($tdata['Monthly Adjusted Time Series'])) {
        $timeSeries = $tdata['Monthly Adjusted Time Series'];
    ?>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Precio de Cierre Ajustado</th>
                <th>Volumen</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $counter = 0;
            foreach($timeSeries as $date => $values) {
                echo "<tr>";
                echo "<td>$date</td>";
                echo "<td>" . $values['5. adjusted close'] . "</td>";
                echo "<td>" . $values['6. volume'] . "</td>";
                echo "</tr>";

                $counter++;
                if ($counter >= 5) {
                    break;
                }
            }
        ?>
        </tbody>
    </table>
    <?php
    } else {
        echo "No se encontraron datos para este símbolo.";
    }
    ?>
</div>

</body>
</html>


<!--  prediccion 2 FIN*************************************************************************************-->
<!--  prediccion 3 *************************************************************************************-->
<?php
// Reemplaza "tu_api_key" con tu propia clave API de Alpha Vantage
$api_key = "V3G1KRQZTIMGM00Z";
$symbol = "VZ";

$url = "https://www.alphavantage.co/query?function=TIME_SERIES_MONTHLY_ADJUSTED&symbol=$symbol&apikey=$api_key";

$json = file_get_contents($url);

$vzdata = json_decode($json, true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>AMX</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .title {
            text-align: center;
            margin-top: 50px;
            color: #3366ff;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
    </style>
</head>
<body>
    <h2 class="title">VZ VERIZON</h2>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Datos de Bolsa</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        iframe {
            width: 100%;
            max-width: 420px;
            height: 310px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 420px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        @media (max-width: 600px) {
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="container">

<iframe src="https://ssltvc.investing.com/?pair_ID=8127&height=480&width=650&interval=300&plotStyle=area&domain_ID=1&lang_ID=1&timezone_ID=7"></iframe>
    <?php
    // Tu código PHP para mostrar la tabla
    if(isset($vzdata['Monthly Adjusted Time Series'])) {
        $timeSeries = $vzdata['Monthly Adjusted Time Series'];
    ?>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Precio de Cierre Ajustado</th>
                <th>Volumen</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $counter = 0;
            foreach($timeSeries as $date => $values) {
                echo "<tr>";
                echo "<td>$date</td>";
                echo "<td>" . $values['5. adjusted close'] . "</td>";
                echo "<td>" . $values['6. volume'] . "</td>";
                echo "</tr>";

                $counter++;
                if ($counter >= 5) {
                    break;
                }
            }
        ?>
        </tbody>
    </table>
    <?php
    } else {
        echo "No se encontraron datos para este símbolo.";
    }
    ?>
</div>

</body>
</html>

<!--  prediccion 3 FIN*************************************************************************************-->
<!--  prediccion 4 *************************************************************************************-->
<?php
// Reemplaza "tu_api_key" con tu propia clave API de Alpha Vantage
$api_key = "V3G1KRQZTIMGM00Z";
$symbol = "VOD";

$url = "https://www.alphavantage.co/query?function=TIME_SERIES_MONTHLY_ADJUSTED&symbol=$symbol&apikey=$api_key";

$json = file_get_contents($url);

$voddata = json_decode($json, true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>AMX</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .title {
            text-align: center;
            margin-top: 50px;
            color: #3366ff;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
    </style>
</head>
<body>
    <h2 class="title">VOD VODAFONE</h2>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Datos de Bolsa</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        iframe {
            width: 100%;
            max-width: 420px;
            height: 310px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 420px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        @media (max-width: 600px) {
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="container">
<iframe src="https://ssltvc.investing.com/?pair_ID=22196&height=480&width=650&interval=300&plotStyle=area&domain_ID=1&lang_ID=1&timezone_ID=7"></iframe>

    <?php
    // Tu código PHP para mostrar la tabla
    if(isset($voddata['Monthly Adjusted Time Series'])) {
        $timeSeries = $voddata['Monthly Adjusted Time Series'];
    ?>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Precio de Cierre Ajustado</th>
                <th>Volumen</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $counter = 0;
            foreach($timeSeries as $date => $values) {
                echo "<tr>";
                echo "<td>$date</td>";
                echo "<td>" . $values['5. adjusted close'] . "</td>";
                echo "<td>" . $values['6. volume'] . "</td>";
                echo "</tr>";

                $counter++;
                if ($counter >= 5) {
                    break;
                }
            }
        ?>
        </tbody>
    </table>
    <?php
    } else {
        echo "No se encontraron datos para este símbolo.";
    }
    ?>
</div>

</body>
</html>

<!--  prediccion 4 FIN*************************************************************************************-->
// Verificando si los datos están disponibles
<?php
if ($tdata && $voddata && $vzdata && $amxdata) {
    // Crear un array con los valores de cierre de cada activo
    $att_closes = array_column($tdata, '5. adjusted close');
    $vod_closes = array_column($voddata, '5. adjusted close');
    $verizon_closes = array_column($vzdata, '5. adjusted close');
    $amx_closes = array_column($amxdata, '5. adjusted close');

    // Verificar si los arrays tienen datos antes de calcular el promedio
    $average_att = (!empty($att_closes)) ? array_sum($att_closes) / count($att_closes) : 0;
    $average_vod = (!empty($vod_closes)) ? array_sum($vod_closes) / count($vod_closes) : 0;
    $average_verizon = (!empty($verizon_closes)) ? array_sum($verizon_closes) / count($verizon_closes) : 0;
    $average_amx = (!empty($amx_closes)) ? array_sum($amx_closes) / count($amx_closes) : 0;

    // Crear un array con los promedios de cada activo
    $averages = [$average_att, $average_vod, $average_verizon, $average_amx];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Portafolio</title>
    <!-- Agregar enlaces a las bibliotecas de Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<!-- Contenedor del gráfico -->
<div style="width: 80%;">
    <canvas id="portfolioChart"></canvas>
</div>

<script>
    // Datos para el gráfico
    var ctx = document.getElementById('portfolioChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['ATT', 'Vodafone', 'Verizon', 'AMX'],
            datasets: [{
                label: 'Porcentaje de Inversión',
                data: <?php echo json_encode($averages); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>

<?php
} else {
    echo "Los datos necesarios no están disponibles.";
}
?>


<!-- portafolio-->
<!DOCTYPE html>
<html>
<head>
    <title>Regresar a Página Anterior</title>
    <style>
        button {
            padding: 10px 20px;
            background-color: #3366ff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #214fdb;
        }
    </style>
</head>
<body>
    <button onclick="window.location.href='http://localhost/payroll/index.php'">RETURN TO HOME PAGE</button>
</body>
</html>
