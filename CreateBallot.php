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
		var butclik = function(){
		if(document.getElementById("startRace").clicked = true){
			window.alert("Ballot created and election date set!");
		}else{
			window.alert("Ballot can't be created!");
		}
		
		}
		
		function changeIt(){
		var i = 1;
		my_div.innerHTML = my_div.innerHTML +"<br><input type='text' name='mytext' + i>"
		
		}
		
		function changeIt2(){
		var i = 1;
		my_div2.innerHTML = my_div2.innerHTML +"<br><input type='text' name='mytext' + i>"
		
		}
	</script>	
	
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
		  
         

        </div>
        
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, Election Commissioner!</h1>
		
        <p>Please create ballot below!</p>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">Create Ballot</div>
            <div class="panel-body">
			   <?php   
			       echo "<div class= 'my_div'>";
			       for($x = 1; $x <= $_POST["raceList"]; $x++){
				   
				   echo ("<h1>Race #" . $x . "</h1><br>");
				   echo ("Please click for candidates:<br><input type='button' value='+1 candidate' onClick='changeIt();'");
				  
				   echo "</div>";
			   }
				   
			 ?>
			
			 
			  <br>On what date would you like the election to start?
			  <input type="date" name="dateRace"><br>
			   
			  
			 <p><a class="btn btn-info"  href="Election Commissioner.php"  role="button" >Go Back &raquo;</a>
             <a class="btn btn-info" id="startRace" href="Election Commissioner.php" name="startRace" role="button" onclick="butclik();">Finish Ballot &raquo;</a></p>
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