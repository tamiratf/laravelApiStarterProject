<!DOCTYPE html>

<html ng-app="fa.app">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    {!!Html::style('css/bootstrap.min.css')!!}
    <!-- bootstrap theme -->
    {!!Html::style('css/bootstrap-theme.css')!!}
    <!--external css-->
    <!-- font icon -->
    {!!Html::style('css/elegant-icons-style.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    <!-- full calendar css-->
    {!!Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
    {!!Html::style('assets/fullcalendar/fullcalendar/fullcalendar.css')!!}
    <!-- easy pie chart-->
    {!!Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}
    <!-- owl carousel -->
    {!!Html::style('css/owl.carousel.css')!!}
    {!!Html::style('css/jquery-jvectormap-1.2.2.css')!!}
    <!-- Custom styles -->
    {!!Html::style('css/fullcalendar.css')!!}
    {!!Html::style('css/widgets.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/style-responsive.css')!!}
    {!!Html::style('css/xcharts.min.css')!!}
    {!!Html::style('css/jquery-ui-1.10.4.min.css')!!}

    {!!Html::script('js/angular/angular.js')!!}
    {!!Html::script('js/angular/angular-ui-router.js')!!}
    {!!Html::script('js/angular/underscore.js')!!}
    {!!Html::script('js/angular/restangular.js')!!}
    {!!Html::script('js/angular/jquery.js')!!}
    {!!Html::script('js/angular/ngstorage.js')!!}
    {!!Html::script('js/angular/angular-jwt.js')!!}
    {!!Html::script('app/api/api.base.js')!!}
    {!!Html::script('app/api/api.users.js')!!}
    {!!Html::script('app/app.js')!!}
</head>

    <body ng-controller="appCtrl">

    <section id="container">
        <div class="row">
            @include('layouts.header.header')
        </div>

        <div class="row">
            <div class="col-lg-2 pull-left">
                @include('layouts.sidebars.sidebar')
            </div>
            <div class="col-lg-10 " style="margin-top: 60px; margin-right: 30px; margin-left: 300px;">
                <div class="panel">
                    <div class="panel-heading">
                    </div>
                </div>

                <ui-view></ui-view>

            </div>
        </div>



    </section>

    <!--@section('content')
        <h1> Hallo </h1>
    @endsection-->


    <!-- javascripts -->
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/jquery-ui-1.10.4.min.js')!!}
    {!!Html::script('js/jquery-1.8.3.min.js')!!}
    {!!Html::script('js/jquery-ui-1.9.2.custom.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/jquery.scrollTo.min.js')!!}
    {!!Html::script('js/jquery.nicescroll.js')!!}
    {!!Html::script('assets/jquery-knob/js/jquery.knob.js')!!}
    {!!Html::script('js/jquery.sparkline.js')!!}
    {!!Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')!!}
    {!!Html::script('js/owl.carousel.js')!!}
    {!!Html::script('js/fullcalendar.min.js')!!}
    {!!Html::script('assets/fullcalendar/fullcalendar/fullcalendar.js')!!}
    {!!Html::script('js/calendar-custom.js')!!}
    {!!Html::script('js/jquery.rateit.min.js')!!}
    {!!Html::script('js/jquery.customSelect.min.js')!!}
    {!!Html::script('assets/chart-master/Chart.js')!!}
    {!!Html::script('js/scripts.js')!!}
    {!!Html::script('js/sparkline-chart.js')!!}
    {!!Html::script('js/easy-pie-chart.js')!!}
    {!!Html::script('js/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('js/jquery-jvectormap-world-mill-en.js')!!}
    {!!Html::script('js/xcharts.min.js')!!}
    {!!Html::script('js/jquery.autosize.min.js')!!}
    {!!Html::script('js/jquery.placeholder.min.js')!!}
    {!!Html::script('js/gdp-data.js')!!}
    {!!Html::script('js/morris.min.js')!!}
    {!!Html::script('js/sparklines.js')!!}
    {!!Html::script('js/charts.js')!!}
    {!!Html::script('js/jquery.slimscroll.min.js')!!}
    <script>
        //knob
        $(function() {
            $(".knob").knob({
                'draw': function() {
                    $(this.i).val(this.cv + '%')
                }
            })
        });

        //carousel
        $(document).ready(function() {
            $("#owl-slider").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });
        });

        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });

        /* ---------- Map ---------- */
        $(function() {
            $('#map').vectorMap({
                map: 'world_mill_en',
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#000', '#000'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                backgroundColor: '#eef3f7',
                onLabelShow: function(e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
    </script>
    </body>
</html>

