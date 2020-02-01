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
                    color: rgb(251,174,44);
                    font-family: Bitter, Georgia,Times,"Times New Roman",serif;
                    font-size: 1em;
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