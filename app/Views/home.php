<?= $this->extend('default') ?>
<?= $this->section('content') ?>
<section>
    <?php
    $input = round($this->data['input'], 2);
    $output = round($this->data['output'], 2);
    $cash_balance = round($this->data['cash_balance'], 2);
    ?>
    <div class="wrap">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Mês', 'input', 'output'],
                    <?php
                    $values = $this->data['list'];
                    foreach ($values as $value) {
                    ?>['<?php echo $value['date']; ?>', parseFloat(<?php echo $value['input']; ?>), parseFloat(<?php echo $value['output']; ?>)],
                    <?php } ?>
                ]);


                var options = {
                    title: 'Frequencia de ações',
                    curveType: 'function',
                    legend: {
                        position: 'bottom'
                    }
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
        </script>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 m-5 bg-info text-center rounded pt-4 pb-4">
                        <p class="text-white fs-5">Saldo Atual</p>
                        <div class="mt-3">
                            <p class="text-white fs-2">R$:<?php echo $cash_balance; ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 m-5 bg-success text-center rounded pt-4 pb-4">
                        <p class="text-white fs-5">Entrada</p>
                        <div class="mt-3">
                            <p class="text-white fs-2">R$:<?php echo $input; ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 m-5 bg-danger text-center rounded pt-4 pb-4">
                        <p class="text-white fs-5">Saida</p>
                        <div class="mt-3">
                            <p class="text-white fs-2">R$:<?php echo $output; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="curve_chart" style="width: 80%; height: 500px; margin-left:10%;" class="col"></div>
                    </div>
                </div>
            </div>
        </body>
    </div>
</section>
<?= $this->endSection() ?>