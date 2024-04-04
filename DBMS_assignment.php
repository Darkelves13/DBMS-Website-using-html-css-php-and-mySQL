<html>
<title>COLLEGE DATABASE PORTAL</title>
<head>
	<style>
		.table{
			border-style: solid;
			border-radius: 20px;
			height: 30%;
			width: 90%;
		}
		.button{
			font-size: 15px;
			background-color: pink;
			border-color: red;
			color: red;
			border-radius: 10px;
			width: 70%;
			transition: 0.3s;
			opacity: 2;
			box-shadow: -3px 5px grey;
			cursor: pointer;
			position: relative;
		}
		.button:hover{
			background-color: white;
			transform: scale(0.5px) perspective(0.5px);
		}
		.output{
			border-style: solid;
			border-radius: 25px;
			width: 80%;
			right: 30px;
			background-color: lightblue;
			border-color: white;
		}
		input[type="text"].textbox{
			text-align: center;
			border-radius: 10px;
			/*background-color: blue;*/
		}
		.showtable{
			border-collapse: collapse;
		}
		.styletable{
			border: 1px solid;
			background-color: white;
		}
	</style>
	<?php
		session_start();
		if(!isset($_SESSION['loggedin'])){
			header('Location: login.php');
		}
		$con = mysqli_connect('localhost', 'root', '', 'dbms_assignment');
		$str = "";
		
		if(isset($_POST["create_table"])){
			$str = '<form method="POST">';
			$str = $str.'Table Name <input type="text" name="tablename"><br><br>';
			$str = $str.'<input type="submit" value="CREATE" name="createtable">';
			$str = $str.'</form>';
		}
		if(isset($_POST["createtable"])){
			if($_POST["tablename"] == "Student"){
				$str = '<form method="POST">';
				$str = $str.'<input type="text" value="Student" name="tablename" class="textbox" readonly><br><br>';
				$str = $str.'<b>Coloumn name</b>&emsp; <b>Data type</b>&emsp; <b>Length</b>&emsp;&emsp;&emsp;&emsp;<br><br>';
				$str = $str.'<input type="text" name="att1">&nbsp;<select name="dt1"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select>&nbsp; <input type="number" name="range1"><br><br>';
				$str = $str.'<input type="text" name="att2">&nbsp;<select name="dt2"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select>&nbsp; <input type="number" name="range2"><br><br>';
				$str = $str.'<input type="text" name="att3">&nbsp;<select name="dt3"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select>&nbsp; <input type="number" name="range3"><br><br>';
				$str = $str.'<input type="text" name="att4">&nbsp;<select name="dt4"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select>&nbsp; <input type="number" name="range4"><br><br>';
				$str = $str.'<input type="text" name="att5">&nbsp;<select name="dt5"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select>&nbsp; <input type="number" name="range5"><br><br>';
				$str = $str.'<input type="text" name="att6">&nbsp;<select name="dt6"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select>&nbsp; <input type="number" name="range6"><br><br>';
				$str = $str.'<input type="text" name="att7">&nbsp;<select name="dt7"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select>&nbsp; <input type="number" name="range7"><br><br>';
				$str = $str.'<input type="submit" name="maketable1">';
				$str = $str.'</form>';
			}
			else if($_POST["tablename"] == "Department"){
				$str = '<form method="POST">';
				$str = $str.'<input type="text" value="Department" name="tablename" class="textbox" readonly><br><br>';
				$str = $str.'<b>Coloumn name</b>&emsp; <b>Data type</b>&emsp; <b>Length</b>&emsp;&emsp;&emsp;&emsp;<br><br>';
				$str = $str.'<input type="text" name="att1">&nbsp;<select name="dt1"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select></select>&nbsp; <input type="number" name="range1"><br><br>';
				$str = $str.'<input type="text" name="att2">&nbsp;<select name="dt2"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select></select>&nbsp; <input type="number" name="range2"><br><br>';
				$str = $str.'<input type="text" name="att3">&nbsp;<select name="dt3"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select></select>&nbsp; <input type="number" name="range3"><br><br>';
				$str = $str.'<input type="text" name="att4">&nbsp;<select name="dt4"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select></select>&nbsp; <input type="number" name="range4"><br><br>';
				$str = $str.'<input type="submit" name="maketable2">';
				$str = $str.'</form>';
			}
			else if($_POST["tablename"] == "Library"){
				$str = '<form method="POST">';
				$str = $str.'<input type="text" value="Library" name="tablename" class="textbox" readonly><br><br>';
				$str = $str.'<b>Coloumn name</b>&emsp; <b>Data type</b>&emsp; <b>Length</b>&emsp;&emsp;&emsp;&emsp;<br><br>';
				$str = $str.'<input type="text" name="att1">&nbsp;<select name="dt1"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select></select>&nbsp; <input type="number" name="range1"><br><br>';
				$str = $str.'<input type="text" name="att2">&nbsp;<select name="dt2"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select></select>&nbsp; <input type="number" name="range2"><br><br>';
				$str = $str.'<input type="text" name="att3">&nbsp;<select name="dt3"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select></select>&nbsp; <input type="number" name="range3"><br><br>';
				$str = $str.'<input type="text" name="att4">&nbsp;<select name="dt4"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select></select>&nbsp; <input type="number" name="range4"><br><br>';
				$str = $str.'<input type="text" name="att5">&nbsp;<select name="dt5"><option value="int">Int</option><option value="varchar">Varchar</option><option value="char">Char</option><option value="date">Date</option><option value="bigint">Bigint</option></select></select>&nbsp; <input type="number" name="range5"><br><br>';
				$str = $str.'<input type="submit" name="maketable3">';
				$str = $str.'</form>';
			}
		}

		if(isset($_POST["maketable1"])){
			$str = $str.'<h3>Table is successfully created!!!</h3>';
			$t = $_POST["tablename"];
			$at1 = $_POST["att1"];
			$at2 = $_POST["att2"];
			$at3 = $_POST["att3"];
			$at4 = $_POST["att4"];
			$at5 = $_POST["att5"];
			$at6 = $_POST["att6"];
			$at7 = $_POST["att7"];
			$dt1 = $_POST["dt1"];
			$dt2 = $_POST["dt2"];
			$dt3 = $_POST["dt3"];
			$dt4 = $_POST["dt4"];
			$dt5 = $_POST["dt5"];
			$dt6 = $_POST["dt6"];
			$dt7 = $_POST["dt7"];
			$ran1 = $_POST["range1"];
			$ran2 = $_POST["range2"];
			$ran3 = $_POST["range3"];
			$ran4 = $_POST["range4"];
			$ran5 = $_POST["range5"];
			$ran6 = $_POST["range6"];
			$ran7 = $_POST["range7"];
			$sql = "create table ".$t." ( ".$at1." ".$dt1."(".$ran1.") primary key, ".$at2." ".$dt2."(".$ran2."), ".$at3." ".$dt3."(".$ran3."), ".$at4." ".$dt4."(".$ran4."), ".$at5." ".$dt5.", ".$at6." ".$dt6."(".$ran6."), ".$at7." ".$dt7."(".$ran7.") )";
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		else if(isset($_POST["maketable2"])){
			$str = $str.'<h3>Table is successfully created!!!</h3>';
			$t = $_POST["tablename"];
			$at1 = $_POST["att1"];
			$at2 = $_POST["att2"];
			$at3 = $_POST["att3"];
			$at4 = $_POST["att4"];
			$dt1 = $_POST["dt1"];
			$dt2 = $_POST["dt2"];
			$dt3 = $_POST["dt3"];
			$dt4 = $_POST["dt4"];
			$ran1 = $_POST["range1"];
			$ran2 = $_POST["range2"];
			$ran3 = $_POST["range3"];
			$ran4 = $_POST["range4"];
			$sql = "create table ".$t." ( ".$at1." ".$dt1."(".$ran1.") primary key, ".$at2." ".$dt2."(".$ran2."), ".$at3." ".$dt3."(".$ran3."), ".$at4." ".$dt4."(".$ran4.") )";
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		else if(isset($_POST["maketable3"])){
			$str = $str.'<h3>Table is successfully created!!!</h3>';
			$t = $_POST["tablename"];
			$at1 = $_POST["att1"];
			$at2 = $_POST["att2"];
			$at3 = $_POST["att3"];
			$at4 = $_POST["att4"];
			$at5 = $_POST["att5"];
			$dt1 = $_POST["dt1"];
			$dt2 = $_POST["dt2"];
			$dt3 = $_POST["dt3"];
			$dt4 = $_POST["dt4"];
			$dt5 = $_POST["dt5"];
			$ran1 = $_POST["range1"];
			$ran2 = $_POST["range2"];
			$ran3 = $_POST["range3"];
			$ran4 = $_POST["range4"];
			$ran5 = $_POST["range5"];
			$sql = "create table ".$t." ( ".$at1." ".$dt1."(".$ran1.") primary key, ".$at2." ".$dt2."(".$ran2."), ".$at3." ".$dt3."(".$ran3."), ".$at4." ".$dt4."(".$ran4."), ".$at5." ".$dt5."(".$ran5.") )";
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		if(isset($_POST["new_record"])){
			$t = $_POST["tableoption"];
			if($t == "SELECT"){
				$str = $str.'<h4>Invalid Input!!!</h4>';
				$str = $str.'<h4>Please select a table!!!</h4>';
			}
			else{
				if($_POST["tableoption"] == "student"){
					$str = '<form method="POST">';
					$str = $str.'<input type="text" value="Student" name="tableoption1" class="textbox" readonly><br><br>';
					$str = $str.'<table>';
					$str = $str.'<tr><td>Roll:</td><td><input type="number" name="data1"></td></tr>';
					$str = $str.'<tr><td>Name:</td><td><input type="text" name="data2"></td></tr>';
					$str = $str.'<tr><td>Address:</td><td><input type="text" name="data3"></td></tr>';
					$str = $str.'<tr><td>Gender:</td><td><input type="text" name="data4"></td></tr>';
					$str = $str.'<tr><td>DOB:</td><td><input type="date" name="data5"></td></tr>';
					$str = $str.'<tr><td>Phone:</td><td><input type="number" name="data6"></td></tr>';
					$str = $str.'<tr><td>Email:</td><td><input type="text" name="data7"></td></tr>';
					$str = $str.'</table>';
					$str = $str.'<input type="submit" name="inputrecord1">';
					$str = $str.'</form>';
				}
				else if($_POST["tableoption"] == "department"){
					$str = '<form method="POST">';
					$str = $str.'<input type="text" value="department" name="tableoption1" class="textbox" readonly><br><br>';
					$str = $str.'<table>';
					$str = $str.'<tr><td>Did:</td><td><input type="number" name="data1"></td></tr>';
					$str = $str.'<tr><td>DName:</td><td><input type="text" name="data2"></td></tr>';
					$str = $str.'<tr><td>Room:</td><td><input type="number" name="data3"></td></tr>';
					$str = $str.'<tr><td>HOD:</td><td><input type="text" name="data4"></td></tr>';
					$str = $str.'</table>';
					$str = $str.'<input type="submit" name="inputrecord2">';
					$str = $str.'</form>';
				}
				else if($_POST["tableoption"] == "library"){
					$str = '<form method="POST">';
					$str = $str.'<input type="text" value="library" name="tableoption1" class="textbox" readonly><br><br>';
					$str = $str.'<table>';
					$str = $str.'<tr><td>BookId:</td><td><input type="number" name="data1"></td></tr>';
					$str = $str.'<tr><td>BName:</td><td><input type="text" name="data2"></td></tr>';
					$str = $str.'<tr><td>Author:</td><td><input type="text" name="data3"></td></tr>';
					$str = $str.'<tr><td>Publisher:</td><td><input type="text" name="data4"></td></tr>';
					$str = $str.'<tr><td>Price:</td><td><input type="number" name="data5"></td></tr>';
					$str = $str.'</table>';
					$str = $str.'<input type="submit" name="inputrecord3">';
					$str = $str.'</form>';
				}
			}
		}
		if(isset($_POST["inputrecord1"])){
			$data_1 = $_POST["data1"];
			$data_2 = $_POST["data2"];
			$data_3 = $_POST["data3"];
			$data_4 = $_POST["data4"];
			$data_5 = $_POST["data5"];
			$data_6 = $_POST["data6"];
			$data_7 = $_POST["data7"];
			$sql = "INSERT INTO ".$_POST["tableoption1"]." VALUES (".$data_1.",'".$data_2."','".$data_3."','".$data_4."','".$data_5."',".$data_6.",'".$data_7."')";
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		else if(isset($_POST["inputrecord2"])){
			$data_1 = $_POST["data1"];
			$data_2 = $_POST["data2"];
			$data_3 = $_POST["data3"];
			$data_4 = $_POST["data4"];
			$sql = "INSERT INTO ".$_POST["tableoption1"]." VALUES (".$data_1.",'".$data_2."',".$data_3.",'".$data_4."')";
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		else if(isset($_POST["inputrecord3"])){
			$data_1 = $_POST["data1"];
			$data_2 = $_POST["data2"];
			$data_3 = $_POST["data3"];
			$data_4 = $_POST["data4"];
			$data_5 = $_POST["data5"];
			$sql = "INSERT INTO ".$_POST["tableoption1"]." VALUES (".$data_1.",'".$data_2."','".$data_3."','".$data_4."',".$data_5.")";
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		if(isset($_POST["delete_record"])){
			$t = $_POST["tableoption"];
			if($t == "SELECT"){
				$str = $str.'<h4>Invalid Input!!!</h4>';
				$str = $str.'<h4>Please select a table!!!</h4>';
			}
			else{
				if($_POST["tableoption"] == "student"){
					$str = '<form method="POST">';
					$str = $str.'<input type="text" value="student" name="tableoption1" class="textbox" readonly>';
					$str = $str.'<table>';
					$str = $str.'<tr><td>Primary key:</td><td><input type="text" name="primarykey"></td></tr>';
					$str = $str.'<tr><td>Primary key value:</td><td><input type="text" name="primarykeyvalue"></td></tr>';
					$str = $str.'</table>';
					$str = $str.'<input type="submit" name="deleterecord1">';
					$str = $str.'</form>';
				}
				else if($_POST["tableoption"] == "department"){
					$str = '<form method="POST">';
					$str = $str.'<input type="text" value="department" name="tableoption1" class="textbox" readonly>';
					$str = $str.'<table>';
					$str = $str.'<tr><td>Primary key:</td><td><input type="text" name="primarykey"></td></tr>';
					$str = $str.'<tr><td>Primary key value:</td><td><input type="text" name="primarykeyvalue"></td></tr>';
					$str = $str.'</table>';
					$str = $str.'<input type="submit" name="deleterecord2">';
					$str = $str.'</form>';
				}
				else if($_POST["tableoption"] == "library"){
					$str = '<form method="POST">';
					$str = $str.'<input type="text" value="library" name="tableoption1" class="textbox" readonly>';
					$str = $str.'<table>';
					$str = $str.'<tr><td>Primary key:</td><td><input type="text" name="primarykey"></td></tr>';
					$str = $str.'<tr><td>Primary key value:</td><td><input type="text" name="primarykeyvalue"></td></tr>';
					$str = $str.'</table>';
					$str = $str.'<input type="submit" name="deleterecord3">';
					$str = $str.'</form>';
				}
			}
		}
		if(isset($_POST["deleterecord1"])){
			$primary_key = $_POST["primarykey"];
			$primary_key_value = $_POST["primarykeyvalue"];
			$sql = "DELETE FROM ".$_POST["tableoption1"]." WHERE ".$primary_key."=".$primary_key_value;
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		else if(isset($_POST["deleterecord2"])){
			$primary_key = $_POST["primarykey"];
			$primary_key_value = $_POST["primarykeyvalue"];
			$sql = "DELETE FROM ".$_POST["tableoption1"]." WHERE ".$primary_key."=".$primary_key_value;
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		else if(isset($_POST["deleterecord3"])){
			$primary_key = $_POST["primarykey"];
			$primary_key_value = $_POST["primarykeyvalue"];
			$sql = "DELETE FROM ".$_POST["tableoption1"]." WHERE ".$primary_key."=".$primary_key_value;
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		if(isset($_POST["update_record"])){
			$t = $_POST["tableoption"];
			if($t == "SELECT"){
				$str = $str.'<h4>Invalid Input!!!</h4>';
				$str = $str.'<h4>Please select a table!!!</h4>';
			}else{
				if($_POST["tableoption"] == "student"){
					$str = '<form method="POST">';
					$str = $str.'<input type="text" value="student" name="tableoption1" class="textbox" readonly>';
					$str = $str.'<table>';
					$str = $str.'<tr><td>Enter column Name:</td><td><input type="text" name="columnName"></td></tr>';
					$str = $str.'<tr><td>Enter updated column Value:</td><td><input type="text" name="columnValue"></td></tr>';
					$str = $str.'<tr><td>Primary key:</td><td><input type="text" name="primarykey"></td></tr>';
					$str = $str.'<tr><td>Primary key value:</td><td><input type="text" name="primarykeyvalue"></td></tr>';
					$str = $str.'</table>';
					$str = $str.'<input type="submit" name="updaterecord1">';
					$str = $str.'</form>';
				}
				else if($_POST["tableoption"] == "department"){
					$str = '<form method="POST">';
					$str = $str.'<input type="text" value="department" name="tableoption1" class="textbox" readonly>';
					$str = $str.'<table>';
					$str = $str.'<tr><td>Enter column Name:</td><td><input type="text" name="columnName"></td></tr>';
					$str = $str.'<tr><td>Enter updated column Value:</td><td><input type="text" name="columnValue"></td></tr>';
					$str = $str.'<tr><td>Primary key:</td><td><input type="text" name="primarykey"></td></tr>';
					$str = $str.'<tr><td>Primary key value:</td><td><input type="text" name="primarykeyvalue"></td></tr>';
					$str = $str.'</table>';
					$str = $str.'<input type="submit" name="updaterecord2">';
					$str = $str.'</form>';
				}
				else if($_POST["tableoption"] == "library"){
					$str = '<form method="POST">';
					$str = $str.'<input type="text" value="library" name="tableoption1" class="textbox" readonly>';
					$str = $str.'<table>';
					$str = $str.'<tr><td>Enter column Name:</td><td><input type="text" name="columnName"></td></tr>';
					$str = $str.'<tr><td>Enter updated column Value:</td><td><input type="text" name="columnValue"></td></tr>';
					$str = $str.'<tr><td>Primary key:</td><td><input type="text" name="primarykey"></td></tr>';
					$str = $str.'<tr><td>Primary key value:</td><td><input type="text" name="primarykeyvalue"></td></tr>';
					$str = $str.'</table>';
					$str = $str.'<input type="submit" name="updaterecord3">';
					$str = $str.'</form>';
				}
			}
		}
		if(isset($_POST["updaterecord1"])){
			$column_Name = $_POST["columnName"];
			$column_Value = $_POST["columnValue"];
			$primary_key = $_POST["primarykey"];
			$primary_key_value = $_POST["primarykeyvalue"];
			$sql = "UPDATE ".$_POST["tableoption1"]." SET ".$column_Name."='".$column_Value."' WHERE ".$primary_key."='".$primary_key_value."'";
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		else if(isset($_POST["updaterecord2"])){
			$column_Name = $_POST["columnName"];
			$column_Value = $_POST["columnValue"];
			$primary_key = $_POST["primarykey"];
			$primary_key_value = $_POST["primarykeyvalue"];
			$sql = "UPDATE ".$_POST["tableoption1"]." SET ".$column_Name."='".$column_Value."' WHERE ".$primary_key."='".$primary_key_value."'";
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		else if(isset($_POST["updaterecord3"])){
			$column_Name = $_POST["columnName"];
			$column_Value = $_POST["columnValue"];
			$primary_key = $_POST["primarykey"];
			$primary_key_value = $_POST["primarykeyvalue"];
			$sql = "UPDATE ".$_POST["tableoption1"]." SET ".$column_Name."='".$column_Value."' WHERE ".$primary_key."='".$primary_key_value."'";
			mysqli_query($con, $sql);
			mysqli_query($con, "commit");
		}
		if(isset($_POST["delete_table"])){
			$t = $_POST["tableoption"];
			if($t == "SELECT"){
				$str = $str.'<h4>Invalid Input!!!</h4>';
				$str = $str.'<h4>Please select a table!!!</h4>';
			}
			else{
				$sql = "drop table ".$t;
				mysqli_query($con, $sql);
				mysqli_query($con, "commit");
				$str = $str.'<h3>Table is successfully deleted!!!</h3>';				
			}
		}
		
		if(isset($_POST["show_table"])){
			$t = $_POST["tableoption"];
			if($t == "SELECT"){
				$str = $str.'<h4>Invalid Input!!!</h4>';
				$str = $str.'<h4>Please select a table!!!</h4>';
			}
			else{
				$sql = "select * from ".$_POST["tableoption"];
				$result = mysqli_query($con, $sql);
				
				if(mysqli_num_rows($result) > 0){
					if($_POST["tableoption"] == "student"){
						$str = $str.'<input type="text" value="student" class="textbox"><br><br>';
						$str = $str.'<table cellpadding=5 class="showtable">';
						$str = $str.'<tr class="styletable"><td class="styletable">Roll</td><td class="styletable">Name</td><td>Address</td><td class="styletable">Gender</td><td class="styletable">DOB</td><td class="styletable">Phone</td><td class="styletable">Email</td></tr>';
						while($row = mysqli_fetch_assoc($result)){
							$str = $str.'<tr class="styletable"><td class="styletable">'.$row['Roll'].'</td><td class="styletable">'.$row['Name'].'</td><td class="styletable">'.$row['Address'].'</td><td class="styletable">'.$row['Gender'].'</td><td class="styletable">'.$row['DOB'].'</td><td class="styletable">'.$row['Phone'].'</td><td class="styletable">'.$row['Email'].'</td></tr>'; 
						}
						$str = $str.'</table>';
					}
					else if($_POST["tableoption"] == "department"){
						$str = $str.'<input type="text" value="department" class="textbox"><br><br>';
						$str = $str.'<table cellpadding=5 class="showtable">';
						$str = $str.'<tr class="styletable"><td class="styletable">Did</td><td class="styletable">Dname</td><td class="styletable">Room</td><td class="styletable">HOD</td></tr>';
						while($row = mysqli_fetch_assoc($result)){
							$str = $str.'<tr class="styletable"><td class="styletable">'.$row['Did'].'</td><td class="styletable">'.$row['Dname'].'</td><td class="styletable">'.$row['Room'].'</td><td class="styletable">'.$row['HOD'].'</td></tr>';
						}
						$str = $str.'</table>';
					}
					else if($_POST["tableoption"] == "library"){
						$str = $str.'<input type="text" value="library" class="textbox"><br><br>';
						$str = $str.'<table cellpadding=5 class="showtable">';
						$str = $str.'<tr class="styletable"><td class="styletable">BookId</td><td class="styletable">BName</td><td class="styletable">Author</td><td class="styletable">Publisher</td><td class="styletable">Price</td></tr>';
						while($row = mysqli_fetch_assoc($result)){
							$str = $str.'<tr class="styletable"><td class="styletable">'.$row['BookId'].'</td><td class="styletable">'.$row['BName'].'</td><td class="styletable">'.$row['Author'].'</td><td class="styletable">'.$row['Publisher'].'</td><td class="styletable">'.$row['Price'].'</td></tr>'; 
						}
						$str = $str.'</table>';
					}
				}
			}
		}
		$sql = "show tables";
		$output = mysqli_query($con, $sql);
		$sel="";
		while($row = mysqli_fetch_assoc($output)){
			$sel = $sel.'<option value="'.$row['Tables_in_dbms_assignment'].'">'.$row['Tables_in_dbms_assignment'].'</option>';
		}
		if(isset($_POST["log-out"])){
			session_start();
			session_unset();
			session_destroy();
			header("Location: login.php");
		}
	?>
</head>
<body>
	<form method="POST">
	<table  class="table" align="center">
		<tr><h1 align="center">COLLEGE DATABASE PORTAL</h1></tr>
		<tr>
			<td colspan="2"></td>
			<td></td>
			<td>
				<button name="delete_table" class="button">Delete Table</button>
			</td>
			<td>
				<button name="new_record" class="button">Insert New Record</button>
			</td>
			<td>
				<button name="delete_record" class="button">Delete Record</button>
			</td>
			<td>
				<button name="update_record" class="button" style="top: 10px;">Update Record</button><br><br>
			</td>
			<td>
				<button name="show_table" class="button">Show Table Record</button>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<center>
					<button name="create_table" class="button">Create New Table</button><br><br>
					<select name="tableoption">
						<option>SELECT</option>
						<?php echo $sel; ?>
					</select><br><br>
				</center>
			</td>
			<td>
				<button name="log-out" class="button" style="top: -27px;">Log out</button>
			</td>
			<td colspan="7" class="output">
				<center><?php echo $str;?></center>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>