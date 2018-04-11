<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('plugins/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</head>
<body style="background-color: #1B1939;">
    @include('admin.template.partials._nav')

    @include('admin.template.partials._topdiv')
    <section>
        @yield('content')
    </section>

    <div class="container-fluid">
        <div id="chartContainer" style="height: auto; width: 70%; "></div>
        <div id="chart" style="height: auto; width: 30%; margin-left: 67.5pc;"></div>
    </div>

    <div id="chartContainerdonut"></div>
    <script type="text/javascript">
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer",
            {
                backgroundColor: "#343a40",
                title:{
                    fontColor: "White",
                    fontFamily: "Arial",
                    text: "Status Island #1"
                },
                axisX:{
                    titleFontFamily: "Arial",
                    labelFontColor: "white"
                },
                axisY:{
                    titleFontFamily: "Arial",
                    labelFontColor: "white"
                },
                legend:{   //legend properties
                    fontColor: "white"
                },
                data: [
                {
                    showInLegend: true,
                    legendText: "Recipe #1" ,
                    type: "stackedArea",
                    color: "#76FF03",
                    dataPoints: [
                    { x: new Date(2012, 00, 1), y: 1100 },
                    { x: new Date(2012, 01, 1), y: 1200 },
                    { x: new Date(2012, 02, 1), y: 1000},
                    { x: new Date(2012, 03, 1), y: 1200 },
                    { x: new Date(2012, 04, 1), y: 1600 },
                    { x: new Date(2012, 05, 1), y: 1800 },
                    { x: new Date(2012, 06, 1), y: 1400 },
                    { x: new Date(2012, 07, 1), y: 1500 },
                    { x: new Date(2012, 08, 1), y: 1600 },
                    { x: new Date(2012, 09, 1), y: 1800 }

                    ]
                },
                {
                    type: "stackedArea",
                    color: "#B2FF59",
                    showInLegend: true,
                    legendText: "Recipe #2",
                    dataPoints: [
                    { x: new Date(2012, 00, 1), y: 150 },
                    { x: new Date(2012, 01, 1), y: 171 },
                    { x: new Date(2012, 02, 1), y: 155},
                    { x: new Date(2012, 03, 1), y: 150 },
                    { x: new Date(2012, 04, 1), y: 165 },
                    { x: new Date(2012, 05, 1), y: 195 },
                    { x: new Date(2012, 06, 1), y: 155 },
                    { x: new Date(2012, 07, 1), y: 145 },
                    { x: new Date(2012, 08, 1), y: 140 },
                    { x: new Date(2012, 09, 1), y: 151 }

                    ]
                },
                {
                    type: "stackedArea",
                    color: "#CCFF90",
                    showInLegend: true,
                    legendText: "Recipe #3",
                    dataPoints: [
                    { x: new Date(2012, 00, 1), y: 71 },
                    { x: new Date(2012, 01, 1), y: 41 },
                    { x: new Date(2012, 02, 1), y: 55},
                    { x: new Date(2012, 03, 1), y: 50 },
                    { x: new Date(2012, 04, 1), y: 65 },
                    { x: new Date(2012, 05, 1), y: 95 },
                    { x: new Date(2012, 06, 1), y: 45 },
                    { x: new Date(2012, 07, 1), y: 95 },
                    { x: new Date(2012, 08, 1), y: 60 },
                    { x: new Date(2012, 09, 1), y: 40 }

                    ]
                },

                {
                    type: "stackedArea",
                    color: "#CCFF90",
                    showInLegend: true,
                    legendText: "Recipe #4",
                    dataPoints: [
                    { x: new Date(2012, 00, 1), y: 861 },
                    { x: new Date(2012, 01, 1), y: 761 },
                    { x: new Date(2012, 02, 1), y: 775},
                    { x: new Date(2012, 03, 1), y: 680 },
                    { x: new Date(2012, 04, 1), y: 785 },
                    { x: new Date(2012, 05, 1), y: 374 },
                    { x: new Date(2012, 06, 1), y: 365 },
                    { x: new Date(2012, 07, 1), y: 455 },
                    { x: new Date(2012, 08, 1), y: 657 },
                    { x: new Date(2012, 09, 1), y: 659 }

                    ]
                }
                ]
            });

        chart.render();
    }
    var chart = new CanvasJS.Chart("chart",
            {
                backgroundColor: "#343a40",
                title: {
                    fontColor: "white",
                    fontFamily: "Arial",
                    text: "Container #1"
                },
                
                axisX: {
                    titleFontFamily: "Arial",
                    labelFontColor: "white"
                },
                axisY: {
                    titleFontFamily: "Arial",
                    labelFontColor: "white"
                },
                legend: {   //legend properties
                    fontColor: "white"
                },
                data: [
                    {
                        indexLabelFontSize: 20,
                        indexLabelFontFamily: "Garamond",
                        indexLabelFontColor: "white",
                        indexLabelLineColor: "white",
                        indexLabelPlacement: "outside",
                        color: "#FF6500",
                        type: "column",
                        showInLegend: true,
                        dataPoints: [
                            { x: 20, y: 200, indexLabel: "Arroz" }
                        ]
                    }
                ]
            });

        chart.render();
    </script>
    <script src ="{{ asset('plugins/jquery/js/jquery-3.3.1.slim.js') }}"></script>
    <script src ="{{ asset('plugins/js/bootstrap.js') }}"></script>    
</body>
</html>