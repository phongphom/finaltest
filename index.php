<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/item-series.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <style>
        .highcharts-figure, .highcharts-data-table table {
            min-width: 320px; 
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }
        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }
        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
            padding: 0.5em;
        }
        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }
        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

        input[type="number"] {
            min-width: 50px;
        }
    </style>
    
    <title>BUU Final Test 2/63</title>
</head>

<body>
    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
           หลังจากได้เรียนวิชานี้ ผมรู้สึกว่า เป็นวิชาที่ค่อนข้าง จะมีประโยชน์ เพราะได้รู้จักโปรแกรมหลายตัวมากครับ
        </p>
    </figure>

    <script>
        Highcharts.chart('container', {

        chart: {
            type: 'item'
        },

        title: {
            text: 'นาย นันทวัฒน์ จันทร์ลอย'
        },

        subtitle: {
            text: 'สาขา it รหัส 63310224'
        },

        legend: {
            labelFormat: '{name} <span style="opacity: 0.4">{y}</span>'
        },

        series: [{
            name: 'Representatives',
            keys: ['name', 'y', 'color', 'label'],
            data: [
                ['นิสิตม.บูรพา', 69, '#BE3075', 'อิอิ'],
                ['ชาลาเฮดชาลา', 153, '#EB001F', 'สปุ้กนิ้ก'],
                ['thebest', 67, '#64A12D', 'wifu'],
                ['fubuki', 80, '#FFED00', 'elite miko'],
                ['Christian Democratic Union', 200, '#000000', 'CDU'],
                ['Christian Social Union in Bavaria', 46, '#008AC5', 'CSU'],
                ['Alternative for Germany', 94, '#009EE0', 'AfD']
            ],
            dataLabels: {
                enabled: true,
                format: '{point.label}'
            },

            // Circular options
            center: ['50%', '88%'],
            size: '170%',
            startAngle: -100,
            endAngle: 100
        }]
        });

    </script>
</body>
</html>