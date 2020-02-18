<!DOCTYPE>
	<html>
	
		<head> 
		<title>View_From_Database.php </title>
		</head>
		
		<body>
        
        <table width="1000" border="5" align="center" >
            <caption>View From Database</caption>
            
            <tr>
                <th>ID</th>
                <th>Employee Name</th>
                <th>SSN</th>
                <th>Departmant</th>
                <th>Salary</th>
                <th>Address</th>
                <th>Delete</th>
                <th>Update</th>
                
            </tr>
            
            <?php
                $connection = mysqli_connect('localhost:3308', 'root','');
                $selected = mysqli_select_db($connection , 'record');
                $query = 'SELECT * FROM emp_record';
                $Execute = mysqli_query($connection ,$query );
                $DataRows = mysqli_fetch_array($Execute);
                
                
                while( $DataRows = mysqli_fetch_array($Execute)){
                    $Id = $DataRows['id'];
                    $EmployeeName = $DataRows['ename']; 
                    $SSN = $DataRows['ssn']; 
                    $Dept = $DataRows['dept']; 
                    $Salary = $DataRows['salary']; 
                    $HomeAddress = $DataRows['homeaddress']; 
                
                
            
            ?>
            <tr>
            <td><?php echo $Id ?></td>
            <td><?php echo $EmployeeName ?></td>
            <td><?php echo $SSN ?></td>
            <td><?php echo $Dept ?></td>
            <td><?php echo $Salary ?></td>
            <td><?php echo $HomeAddress ?></td>
            <td>Delete</td>
            <td>Update</td>
            </tr>
            <?php } ?>
        </table>
            

<?php 

?>

		</body>
	
	
	</html>