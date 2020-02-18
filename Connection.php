<!DOCTYPE>
	<html>
	
		<head> 
		<title>Connection.php </title>
		</head>
		
		<body>

<?php 
            $connection = mysqli_connect('localhost:3308' , 'root' ,'');
          /* check if the server connnection is established*/
            if($connection){
                echo 'Database connected<br>' ;
            }else{
                error.mysqli_connect();
            }
          $selected = mysqli_select_db($connection , 'record');
          
            if($selected ){
                echo "Database selected<br>";
            }
            else{
                error.mysqli_select_db();
            }
            
 ?>

		</body>
	
	
	</html>