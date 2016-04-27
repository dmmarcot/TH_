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
          <a class="navbar-brand" href="Student.php">Home</a>
		  <a class="navbar-brand" href="Election Commissioner.php">Election Commissioner</a>
		  <a class="navbar-brand" href="HeadOfStudentOrgs.php">Head of Student Orgs</a>
		  <a class="navbar-brand" href="Student.php">Student</a>
		  <a class="navbar-brand" href="ChartExample.php">Results</a>
        </div>
        
      </div>
    </nav>
	
	<div class="jumbotron">
      <div class="container">
		
        <h1>Results of Recent Elections</h1>
        <p>Who is the top Fraternity of the year?</p>
        
      </div>
    </div>

<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>


<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'Election Results'   
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
         ['None',   45.0],
         ['Alpha Epsilon Pi',       26.8],
         {
            name: 'Phi Delta Theta',
            y: 12.8,
            sliced: true,
            selected: true
         },
         ['Sigma Alpha Epsilon',    8.5],
         ['Theta Chi',     6.2],
         ['Pi Kappa Alpha',   0.7]
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
<div class="container">
<hr>
<footer>
        <p>&copy; 2016 TH_, Inc.</p>
      </footer></div>

</body>
</html>
