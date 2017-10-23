<?php


include '../../dbconnect.php';

    echo "<br>";
    
$quer2 = mysql_query("SELECT * FROM ojasprof WHERE id=1");
if(!$quer2)
die("Data could not insert:".mysql_error());


$row = mysql_fetch_assoc($quer2);
    
    

    
    
    mysql_close($conn);


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Main Project</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
     
    <script src="http://d3js.org/d3.v3.min.js" language="JavaScript"></script>
    <script src="liquidFillGauge.js" language="JavaScript"></script>
    <script src="liquidFillGauge1.js" language="JavaScript"></script>
    <script src="liquidFillGauge2.js" language="JavaScript"></script>
    <style>
        .liquidFillGaugeText { font-family: Helvetica; font-weight: bold; }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Health</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/3-col-portfolio.css" rel="stylesheet">
<style type="text/css">
    .navbar-bottom {
min-height: 300px;
margin-top: 100px;
background-color: #28364f;
padding-top: 35px;
color:#FFFFFF;
}
    </style>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://meeramali.com/SpartaMaps/index.php">Home</a>
                    </li>
                    <li>
                        <a href="http://meeramali.com/SpartaMaps/map/map.html">Map</a>
                    </li>
                    <li>
                        <a href="#">Health</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">



 <div class="row">
            <div class="col-md-4 portfolio-item">
<svg id="fillgauge1" width="97%" height="250"></svg>
<h1>&nbsp;&nbsp;&nbsp;&nbsp; Calories Burned</h1>

            </div>
             <div class="col-md-4 portfolio-item">
                    <svg id="fillgauge2" width="97%" height="200"></svg>
                <h1>Distance Traveled</h1>
            </div>


            <div class="col-md-4 portfolio-item">
<svg id="fillgauge3" width="97%" height="250" ></svg>
<h1>Steps Walked</h1>

            </div>
            
</div>
</div>
<p id="demo"></p>

<script language="JavaScript">

function NoOfStep(){
    var steps = 2250 * distan();
    steps = Math.round(steps);
    return steps;
}

function calories(){
    var cal = (((2250 * distan())/2000)*110);
    cal = cal.toFixed(2);
    return cal;
}

function distan() {

    //alert("going inside function");
    //alert(<?php echo "{$row['starlat']}";?>);
    
    var lat1 = <?php echo "{$row['starlat']}";?>;
    var lat2 = <?php echo "{$row['deslat']}"; ?>;
    var lon1 = <?php echo "{$row['starlon']}"; ?>;
    var lon2 = <?php echo "{$row['deslon']}"; ?>;
    
    var radlat1 = Math.PI * lat1/180;
    var radlat2 = Math.PI * lat2/180;
    var theta = lon1-lon2;
    var radtheta = Math.PI * theta/180;
    var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
    dist = Math.acos(dist);
    dist = dist * 180/Math.PI;
    dist = dist * 60 * 1.1515;
    dist = dist * 1.609344;
    
    
     return dist;
     
    
}   

    var trav = distan();
    trav = trav.toFixed(2);
    var calo = calories();
    var yourSteps = NoOfStep();
        yourSteps = Math.round(yourSteps);

    var config0 = liquidFillGaugeDefaultSettings(); 
    
    config0.textVertPosition = 0.2;
    config0.waveAnimateTime = 1000;
    var gauge1 = loadLiquidFillGauge("fillgauge1", calo, config0);
    
    var config1 = liquidFillGaugeDefaultSettings1(); 
    config1.circleColor = "#FF7777";
    config1.textColor = "#FF4444";
    config1.waveTextColor = "#FFAAAA";
    config1.waveColor = "#FFDDDD";
    config1.circleThickness = 0.2;
    config1.textVertPosition = 0.2;
    config1.waveAnimateTime = 1000;
    var gauge2= loadLiquidFillGauge1("fillgauge2", trav, config1);
    
    var config2 = liquidFillGaugeDefaultSettings2();
    config2.circleColor = "#D4AB6A";
    config2.textColor = "#553300";
    config2.waveTextColor = "#805615";
    config2.waveColor = "#AA7D39";
    config2.circleThickness = 0.1;
    config2.circleFillGap = 0.2;
    config2.textVertPosition = 0.8;
    config2.waveAnimateTime = 2000;
    config2.waveHeight = 0.3;
    config2.waveCount = 1;
    var gauge3 = loadLiquidFillGauge2("fillgauge3", yourSteps, config2);
    
    
    
</script>
<nav class="navbar navbar-inverse navbar-bottom" style="padding:0 0 120px 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5 id='footer-header'> SITEMAP </h3>
                    <div class="col-sm-4" style="padding: 0 0 0 0px">
                        <p><a href="http://meeramali.com/SpartaMaps/index.php">Home</a></p>
                    </div>
                    <div class="col-sm-4" style="padding: 0 0 0 0px">
                        <p><a href="http://meeramali.com/SpartaMaps/map/map.html">Map</a></p>
                    </div>
                    <div class="col-sm-4" style="padding: 0 0 0 0px">
                        <p><a href="#">Health</a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h5 id='footer-header'> </h3>
                    <p></p>
                </div>
                <div class="col-sm-4">
                    <h5 id='footer-header'> Pages </h3>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="index.php" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="index.php">1</a></li>
                                <li class="page-item"><a class="page-link" href="entry2.php">2</a></li>
                                <li class="page-item"><a class="page-link" href="entry3.php">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="entry2.php" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </li>
                          </ul>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>