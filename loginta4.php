<center><body background="hsiski.jpg" style="font-family: Century Gothic">

<?php
		if(isset($_POST['submit'])){
			$usid = $_POST['usid'];
			$pass = $_POST['pass'];

			if(isset($_POST['data'])){
				$data = $_POST["data"];
			}else $data = "";

			$data.= $usid."*".$pass."||";

		}
?>

<form action="prosesta4.php" method="POST">
	&nbsp
	<fieldset style="background-color: #f6f6f5; width: 320px; height: 290px; align-items: center; margin-left: 1%; margin-right: 1%; margin-top: 7%">
			<br>			
			<b style="font-size: 20pt"><center>Login</center></b>
	<table width="50%" align="center">
		&nbsp
		<tr>
			<td>Username : <input type="text" name="usid" style="width: 110%; height: 3%; color: black; background-color: lightgrey; border-radius: 5px"><br><br></td>
		</tr>
		<tr>
	 		<td>Password : <input type="Password" name="pass" style="width: 110%; height: 3%; color: black; background-color: lightgrey; border-radius: 5px"><br><br></td>
	 	</tr>
	 	<tr>
	 		<td>&nbsp</td>
	 	</tr>
	 	<tr>
	 		<td align="right"><input type="submit" name="submit" value="Log In" style="width: 100px; height: 25px; border: 5px; border-radius: 12%; background-color: #B9BAFF; color: yellow"></td>
	 	</tr>
	 </table>
	</fieldset>
	
	<?php
			if(isset($data)){ ?>
				<input type="hidden" name="data" value="<?php echo $data; ?>">
				<?php
		}
				?>
					<br>
</form>

<?php
		if(isset($_POST['submit'])){
			$arrData = explode("||", $data);
			$arrDetail = array();
			for($x = 0; $x < count($arrData); $x++){
				array_push($arrDetail, explode("*", $arrData[$x]));
			}
			print_r($arrDetail);
			echo "<br><h3>FORM LOGIN</h3></br>
				<table border = 1>
				<tr>
					<td width = "."100px"."><b><center>Username</td>
					<td width = "."100px"."><b><center>Password</td>
				</tr>";

		for ($x = 0; $x < count($arrDetail)-1  ; $x++) { 
			echo "<tr>";
				echo "<td>";
					echo $arrDetail[$x][0];
				echo "</td>";
				echo "<td>";
					echo $arrDetail[$x][1];
				echo "</td>";
				//echo "<td>";
					//echo $arrDetail[$x][2];
				//echo "</td>";
			echo"</tr>";
		}
		echo "</table>";
		
		// echo "<br>".$data;
	}
?>

</body>
</center>