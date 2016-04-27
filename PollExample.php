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
	
	<script>
		var radioCheck = function(){
			if(document.getElementById('chk1').checked && document.getElementById('chk2').checked && document.getElementById('chk3').checked && document.getElementById('chk4').checked && document.getElementById('chk5').checked && document.getElementById('chk6').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk1').checked = false;
				document.getElementById('chk2').checked = false;
				document.getElementById('chk3').checked = false;
				document.getElementById('chk4').checked = false;
				document.getElementById('chk5').checked = false;
				document.getElementById('chk6').checked = false;
				return false;
			}else if(document.getElementById('chk1').checked && document.getElementById('chk2').checked && document.getElementById('chk3').checked && document.getElementById('chk4').checked && document.getElementById('chk5').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk1').checked = false;
				document.getElementById('chk2').checked = false;
				document.getElementById('chk3').checked = false;
				document.getElementById('chk4').checked = false;
				document.getElementById('chk5').checked = false;
				return false;
			}else if(document.getElementById('chk1').checked && document.getElementById('chk2').checked && document.getElementById('chk3').checked && document.getElementById('chk4').checked){
			    window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk1').checked = false;
				document.getElementById('chk2').checked = false;
				document.getElementById('chk3').checked = false;
				document.getElementById('chk4').checked = false;
				return false;
			}else if(document.getElementById('chk1').checked && document.getElementById('chk2').checked && document.getElementById('chk3').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk1').checked = false;
				document.getElementById('chk2').checked = false;
				document.getElementById('chk3').checked = false;
				return false;
			}else if(document.getElementById('chk1').checked && document.getElementById('chk2').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk1').checked = false;
				document.getElementById('chk2').checked = false;
				return false;
			}else if(document.getElementById('chk1').checked && document.getElementById('chk3').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk1').checked = false;
				document.getElementById('chk3').checked = false;
				return false;
			}else if(document.getElementById('chk1').checked && document.getElementById('chk4').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk1').checked = false;
				document.getElementById('chk4').checked = false;
				return false;
			}else if(document.getElementById('chk1').checked && document.getElementById('chk5').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk1').checked = false;
				document.getElementById('chk5').checked = false;
				return false;
			}else if(document.getElementById('chk1').checked && document.getElementById('chk6').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk1').checked = false;
				document.getElementById('chk6').checked = false;
				return false;
			}else if(document.getElementById('chk2').checked && document.getElementById('chk6').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk2').checked = false;
				document.getElementById('chk6').checked = false;
				return false;
			}else if(document.getElementById('chk2').checked && document.getElementById('chk5').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk2').checked = false;
				document.getElementById('chk5').checked = false;
				return false;
			}else if(document.getElementById('chk2').checked && document.getElementById('chk4').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk2').checked = false;
				document.getElementById('chk4').checked = false;
				return false;
			}else if(document.getElementById('chk2').checked && document.getElementById('chk3').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk2').checked = false;
				document.getElementById('chk3').checked = false;
				return false;
			}else if(document.getElementById('chk3').checked && document.getElementById('chk6').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk3').checked = false;
				document.getElementById('chk6').checked = false;
				return false;
			}else if(document.getElementById('chk3').checked && document.getElementById('chk5').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk3').checked = false;
				document.getElementById('chk5').checked = false;
				return false;
			}else if(document.getElementById('chk3').checked && document.getElementById('chk4').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk3').checked = false;
				document.getElementById('chk4').checked = false;
				return false;
			}else if(document.getElementById('chk4').checked && document.getElementById('chk6').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk4').checked = false;
				document.getElementById('chk6').checked = false;
				return false;
			}else if(document.getElementById('chk4').checked && document.getElementById('chk5').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk4').checked = false;
				document.getElementById('chk5').checked = false;
				return false;
			}else if(document.getElementById('chk5').checked && document.getElementById('chk6').checked){
				window.alert("Only one can be checked!Please try again!");
				document.getElementById('chk5').checked = false;
				document.getElementById('chk6').checked = false;
				return false;
			}else if(document.getElementById('chk1').checked === false && document.getElementById('chk2').checked === false && document.getElementById('chk3').checked === false && document.getElementById('chk4').checked === false && document.getElementById('chk5').checked === false && document.getElementById('chk6').checked === false){
				window.alert("Please select at least one!");
				return false;
			
			}else{
				window.alert("Your vote has been submitted, thank you!");
				window.history.back();
				return true;
				
			}
		}
	</script>	
	
	
  </head>

  <body>
<!--NAVBAR-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Home</a>
		  <a class="navbar-brand" href="Election Commissioner.php">Election Commissioner</a>
		  <a class="navbar-brand" href="HeadOfStudentOrgs.php">Head of Student Orgs</a>
		  <a class="navbar-brand" href="Student.php">Student</a>
        </div>
        
      </div>
    </nav>
<!--NAVBAR-->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, Student!</h1>
        <p>Please vote below!</p>
        
      </div>
    </div>
<!--Poll Injection-->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="container">
    <div class="col-sm-4"></div>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-line-chart"></span>Vote for Top Frat of the Year</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chk1" value=""> Alpha Epsilon Pi
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chk2" value=""> Phi Delta Theta
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chk3" value=""> Sigma Alpha Epsilon
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chk4" value="">  Theta Chi
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chk5" value=""> Pi Kappa Alpha
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chk6" value=""> None
                            </label>
                        </div>
                    </li>
             
                </ul>
            </div>
            <div class="panel-footer text-center">
                <button type="button" id="vote" onclick="radioCheck(); return false;" class="btn btn-primary btn-block btn-sm">
                    Vote</button>
                <a href="ChartExample.php" class="small">View Result</a>
            </div>
			<p><a class="btn btn-info"  href="Student.php"  role="button" >Go Back &raquo;</a>
        </div>
    </div>
</div>

<style>
    body {
        margin-top: 20px;
    }

    .panel-body:not(.two-col) {
        padding: 0px;
    }

    .glyphicon {
        margin-right: 5px;
    }

    .glyphicon-new-window {
        margin-left: 5px;
    }

    .panel-body .radio, .panel-body .checkbox {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .panel-body .list-group {
        margin-bottom: 0;
    }

    .margin-bottom-none {
        margin-bottom: 0;
    }

    .panel-body .radio label, .panel-body .checkbox label {
        display: block;
    }
</style>
        </div>
  <!--Poll Injection-->
     
        
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
