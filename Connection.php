<!DOCTYPE>
	<html>
	
		<head> 
		<title>Connection.php </title>
		</head>
		
		<body>

<?php 
//            $connection = mysqli_connect('localhost' , 'root' ,'', 'record');
            /* check if the server connnection is established*/
//            if($connection){
//                echo 'Database connected<br>' ;
//            }
            //$selected = mysql_select_db('record' , $connection);
            
//            if($selected ){
//                echo "Database selected<br>";
//            }
//            else{
//                error.mysql_select_db();
//            }
            
            $con = mysqli_connect("localhost","root","","record");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>

		</body>
	
	
	</html>