<?php 

if(isset($_POST['Submit'])){
    
    if(!empty($_POST['EName'] && !empty($_POST['SSN']))){
    $EName = $_POST['EName'];
    $SSN = $_POST['SSN'];
    $Dept = $_POST['Dept'];
    $Salary = $_POST['Salary'];
    $HomeAddress = $_POST['HomeAddress'];
    
    //Establishing connection with the dtabase
    $Connection  = mysqli_connect('localhost:3308' , 'root' ,'' , 'record'); 
    
    //Selecting out database.
    $Selected = mysqli_select_db($Connection , 'record');
    
    $Query = "INSERT INTO emp_record(ename , ssn , dept, salary, homeaddress)
                VALUES('$EName','$SSN','$Dept','$Salary' , '$HomeAddress')";
    $Execute = mysqli_query($Connection , $Query);
    
    if($Execute){
        
        echo '<span class = "success">Record has been added</span>';
    }
        
    }
    
    else{
        
        echo '<span class="FieldInfoHeading">Please at least add name and social security number.</span>';
    }
    
}
?>


<!DOCTYPE>
	<html>
	
		<head> 
		<title>Insert_Into_Database.php </title>
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
                .success{
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
            
            
<div>
    <form action="Insert_Into_Database.php" method="Post">
        <fieldset>
        <span class="FieldInfo">Employee Name: </span><br><input type="text"  Name="EName" value="" ><br>
        <span class="FieldInfo">Social Security Number: </span><br><input type="text"  Name="SSN" value="" ><br>
        <span class="FieldInfo">Departmant: </span><br><input type="text"  Name="Dept" value="" ><br>
        <span class="FieldInfo">Salary: </span><br><input type="text"  Name="Salary" value="" ><br>
        <span class="FieldInfo">Home Address: </span><br><textarea Name="HomeAddress"></textarea><br>
        <br><input type="Submit" Name="Submit" value="Subit your record"><br>
        </fieldset>
    
    </form>
</div>

<?php ?>

		</body>
	
	
	</html>