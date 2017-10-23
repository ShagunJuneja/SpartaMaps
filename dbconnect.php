<?php
error_reporting(E_ALL ^ E_DEPRECATED);
    
     $db_host = "meeramalicom.fatcowmysql.com";
     $db_username = "280p";
     $db_pass = "280p";
     $db_name = "project_280";
    
    
    
    if(!( $database = mysql_connect($db_host, $db_username, $db_pass)))
    					{die("Could not connect to database!"); echo 'could not connect1';}
    					//echo "connected to db";

    				//open Products database
    				if(!mysql_select_db($db_name, $database))
    					{die("Could not open cmpe280database!"); echo 'could not connect2'; }

               
                        ?>