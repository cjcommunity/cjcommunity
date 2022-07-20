<?php      
    $host = "sql200.epizy.com";  
    $user = "epiz_32209994";  
    $password = 'ZOIorWgjOPxbAL';  
    $db_name = "epiz_32209994_jestocjofficial";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 
