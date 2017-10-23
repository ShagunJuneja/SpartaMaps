<?php
    
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    
    include 'dbconnect.php';

    $name = $_POST['email'];
    $pass = $_POST['pass'];
    
   
    				
 
    				$result= mysql_query("SELECT * FROM user WHERE email='{$name}' && password= '{$pass}' ");
                    if(mysql_num_rows($result) == 0) {
                      
                        echo "error";

                    } else {
                        $_SESSION["userid"] = $name;
                        $_SESSION["login"] = "yes";

                        setcookie("userid", $name);

                        echo "success";
                    }
    				
   ?>