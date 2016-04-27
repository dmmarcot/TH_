<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
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
          <a class="navbar-brand" href="Election Commissioner.php">Home</a>
		  <a class="navbar-brand" href="Election Commissioner.php">Election Commissioner</a>
		  <a class="navbar-brand" href="HeadOfStudentOrgs.php">Head of Student Orgs</a>
		  <a class="navbar-brand" href="Student.php">Student</a>
		  <a class="navbar-brand" href="ChartExample.php">Results</a>
         

        </div>
        
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
		
        <h1>Hello, Election Commissioner!</h1>
        <p>This is the page where the Election Commissioner can create ballots</p>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">Create Ballot</div>
            <div class="panel-body">
			
			<form action="CreateBallot.php" method="post">
			How many races within ballot?
			<input type="number" name="raceList" id="raceList">
			<br>
			How many candidates in each race?
			<input type="number" name="canList" id="canList">
			<br>
			What type of voting system?
			<select id="votSys" name="votSys">
			<option value="Majority Rule" >Majority Rule</option>
			<option value= "Pluarity" >Pluarity</option>
			<option value="Proportional Representation" >Proportional Representation</option>
			</select>
			<br>
			How many days do you want the election to last?
			<select id="days" name="days">
			<option value="1">1 day</option>
			<option value="2">2 days</option>
			<option value="3">3 days</option>
			<option value="4">4 days</option>
			<option value="5">5 days</option>
			<option value="6">6 days</option>
			<option value="7">7 days</option>
			</select>
			
			<br>
			<input type="submit">
			
             
			  </form>
			</div>
			
          </div>
        </div>
        
        
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 TH_, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
