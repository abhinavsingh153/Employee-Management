<!DOCTYPE>
	<html>
	
		<head> 
		<title>Delete_From_Database.php </title>
		</head>
		
		<body>
            
            
            <style type="text/css">
                input[type="text"],textarea{
                    border: 1px solid_dashed;
                    background-color: rgb(221,216,212);
                    width: 480px;
                    padding: .5em;
                    font-size: 1.0em;
                    
                }
                
                input[type="Submit"]{
                    color: white;
                    font-family: Bitter, Georgia,Times,"Times New Roman",serif;
                    width: 200px;
                    height: 40px;
                    background-color: #5D0580;
                    border-bottom-left-radius: 35px;
                    border-bottom-right-radius: 35px;
                    border-top-left-radius: 35px;
                    border-top-right-radius: 35px;
                    border-color: rgb(221,216,212);
                    font-weight: bold;
                    float : left;
                }
                .FieldInfo{
                    color: #5D0580;
                    font-family: Bitter, Georgia,Times,"Times New Roman",serif;
                    font-size: 1em;
                }
                .success,caption{
                    color: #5D0580;
                    font-family : Bitter, Georgia,Times,"Times New Roman",serif;
                    font-size: 1.5em;
                    font-weight: bold;
                }
                .FieldInfoHeading{
                     color: #5D0580;
                    font-family : Bitter, Georgia,Times,"Times New Roman",serif;
                    font-size: 1.5em;
                    font-weight: bold;
                }
                
                div{
                    width : 500px;
                    margin-left: 360px;
                }
            </style>
            
            <h2 class ='success'><?php echo @$_GET['Deleted']; ?></h2>
        
        <table width="1000" border="5" align="center" >
            <caption class="caption">View From Database</caption>
            
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
            <td><a href="Delete.php?Delete=<?php echo $Id?>" >Delete</a></td>
            <td>Update</td>
            </tr>
            <?php } ?>
        </table>
            

<?php 

?>

		</body>
	
	
	</html>