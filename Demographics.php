<html>
<head>
<title>Highcharts Tutorial</title>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="http://code.highcharts.com/highcharts.js"></script>  
   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/West_Virginia_Flying_WV_logo.svg/2000px-West_Virginia_Flying_WV_logo.svg.png" alt="WVU" style="width:50px;height:50px;">
          <a class="navbar-brand" href="HeadOfStudentOrgs.php">Home</a>
		  
        </div>
        
      </div>
    </nav>
	
	<div class="jumbotron">
      <div class="container">
		
        <h1>Demographics of Past Elections</h1>
        
      </div>
    </div>

<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<div id="container1" style="width: 550px; height: 400px; margin: 0 auto"></div>
<div id="container2" style="width: 550px; height: 400px; margin: 0 auto"></div>
<div id="container3" style="width: 550px; height: 400px; margin: 0 auto"></div>


<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'Gender Demographics'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: false           
         },
         showInLegend: true
      }
   };
    var series= [{
      type: 'pie',
      name: '',
      data: [
         ['Women',   40.0],
         ['Men',       40.0],
         {
            name: 'Transgender',
            y: 20.0,
            sliced: true,
            selected: true
         },
      ]
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container').highcharts(json);  
});
</script>

<script language="JavaScript">
$(document).ready(function() {  
   var chart2 = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title2 = {
      text: 'Class Ranking Demographics'   
   };      
   var tooltip2 = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions2 = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: false           
         },
         showInLegend: true
      }
   };
    var series2 = [{
      type: 'pie',
      name: '',
      data: [
         ['Freshman',   20.0],
         ['Sophomore',       25.0],
         {
            name: 'Junior',
            y: 20.0,
            sliced: true,
            selected: true
         },
		 ['Senior',   25.0],
		 ['Graduate',   10.0],
      ]
   }];     
      
   var json2 = {};   
   json2.chart = chart2; 
   json2.title = title2;     
   json2.tooltip = tooltip2;  
   json2.series = series2;
   json2.plotOptions = plotOptions2;
   $('#container1').highcharts(json2);  
});

</script>

<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'Major Demographics'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: false           
         },
         showInLegend: true
      }
   };
    var series= [{
      type: 'pie',
      name: '',
      data: [
         ['CPE',   40.0],
         ['IEE',       40.0],
         {
            name: 'CS',
            y: 20.0,
            sliced: true,
            selected: true
         },
      ]
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container2').highcharts(json);  
});
</script>

<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'School Demographics'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: false           
         },
         showInLegend: true
      }
   };
    var series= [{
      type: 'pie',
      name: '',
      data: [
         ['Benjamin M. Statler College of Engineering and Mineral Resources',   40.0],
         ['WVU Institute of Technology',       20.0],
         {
            name: 'Reed College of Media',
            y: 5.0,
            sliced: true,
            selected: true
         },
		 ['Davis College of Agriculture',   5.0],
         ['Eberly College of Arts and Sciences',       5.0],
		 ['College of Business and Economics',   5.0],
         ['College of Creative Arts',       5.0],
		 
      ]
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container3').highcharts(json);  
});
</script>

<div class="container">
<hr>
<footer>
        <p>&copy; 2016 TH_, Inc.</p>
      </footer></div>

</body>
</html>