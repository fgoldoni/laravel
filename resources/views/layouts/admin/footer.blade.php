

<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src='https://code.jquery.com/jquery-1.12.4.js'></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src={{ asset('admin/js/bootstrap/bootstrap.min.js') }}></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src={{ asset('admin/js/plugins.js') }}></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src={{ asset('admin/js/bootstrap-select/bootstrap-select.js') }}></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src={{ asset('admin/js/bootstrap-toggle/bootstrap-toggle.min.js') }}></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script type="text/javascript" src={{ asset('admin/js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js') }}></script>
<!-- bootstrap file -->
<script type="text/javascript" src={{ asset('admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}></script>

<!-- ================================================
Summernote
================================================ -->
<script type="text/javascript" src={{ asset('admin/js/summernote/summernote.min.js') }}></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file
<script type="text/javascript" src="js/flot-chart/flot-chart.js"></script>
<script type="text/javascript" src="js/flot-chart/flot-chart-time.js"></script>
<script type="text/javascript" src="js/flot-chart/flot-chart-stack.js"></script>
<script type="text/javascript" src="js/flot-chart/flot-chart-pie.js"></script>
<script type="text/javascript" src="js/flot-chart/flot-chart-plugin.js"></script>-->

<!-- ================================================
Chartist
================================================ -->
<!-- main file
<script type="text/javascript" src="js/chartist/chartist.js"></script>
<script type="text/javascript" src="js/chartist/chartist-plugin.js"></script>-->

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src={{ asset('admin/js/easypiechart/easypiechart.js') }}></script>
<!-- demo codes -->
<script type="text/javascript" src={{ asset('admin/js/easypiechart/easypiechart-plugin.js') }}></script>

<!-- ================================================
Sparkline
================================================ -->
<!-- main file -->
<script type="text/javascript" src={{ asset('admin/js/sparkline/sparkline.js') }}></script>
<!-- demo codes -->
<script type="text/javascript" src={{ asset('admin/js/sparkline/sparkline-plugin.js') }}></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3
<script src="js/rickshaw/d3.v3.js"></script>-->
<!-- main file
<script src="js/rickshaw/rickshaw.js"></script>
<!-- demo codes -->
<!--<script src="js/rickshaw/rickshaw-plugin.js"></script>-->

<!-- ================================================
Data Tables
================================================ -->

<!-- ================================================
Sweet Alert
================================================ -->
<script src='https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js'></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src={{ asset('admin/js/kode-alert/main.js') }}></script>

<!-- ================================================
Gmaps
================================================ -->
<!-- google maps api
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps/gmaps.js') }}></script>
<script src="js/gmaps/gmaps-plugin.js') }}></script>-->

<!-- ================================================
jQuery UI
================================================ -->
<script type="text/javascript" src={{ asset('admin/js/jquery-ui/jquery-ui.min.js') }}></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src={{ asset('admin/js/moment/moment.min.js') }}></script>

<!-- ================================================
Full Calendar
================================================ -->
<script type="text/javascript" src={{ asset('admin/js/full-calendar/fullcalendar.js') }}></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src={{ asset('admin/js/date-range-picker/daterangepicker.js') }}></script>

<script type="text/javascript" src={{ asset('admin/js/main.js') }}></script>

<!-- ================================================
Below codes are only for index widgets
================================================ -->
<!-- Today Sales -->
<script>

    /* set up our data series with 50 random data points

     var seriesData = [ [], [], [] ];
     var random = new Rickshaw.Fixtures.RandomData(20);

     for (var i = 0; i < 110; i++) {
     random.addData(seriesData);
     }

     // instantiate our graph!

     var graph = new Rickshaw.Graph( {
     element: document.getElementById("todaysales"),
     renderer: 'bar',
     series: [
     {
     color: "#33577B",
     data: seriesData[0],
     name: 'Photodune'
     }, {
     color: "#77BBFF",
     data: seriesData[1],
     name: 'Themeforest'
     }, {
     color: "#C1E0FF",
     data: seriesData[2],
     name: 'Codecanyon'
     }
     ]
     } );

     graph.render();

     var hoverDetail = new Rickshaw.Graph.HoverDetail( {
     graph: graph,
     formatter: function(series, x, y) {
     var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
     var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
     var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
     return content;
     }
     } );*/

</script>

<!-- Today Activity -->
<script>
    /* set up our data series with 50 random data points

     var seriesData = [ [], [], [] ];
     var random = new Rickshaw.Fixtures.RandomData(20);

     for (var i = 0; i < 50; i++) {
     random.addData(seriesData);
     }

     // instantiate our graph!

     var graph = new Rickshaw.Graph( {
     element: document.getElementById("todayactivity"),
     renderer: 'area',
     series: [
     {
     color: "#9A80B9",
     data: seriesData[0],
     name: 'London'
     }, {
     color: "#CDC0DC",
     data: seriesData[1],
     name: 'Tokyo'
     }
     ]
     } );

     graph.render();

     var hoverDetail = new Rickshaw.Graph.HoverDetail( {
     graph: graph,
     formatter: function(series, x, y) {
     var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
     var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
     var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
     return content;
     }
     } );*/
</script>



</body>
</html>