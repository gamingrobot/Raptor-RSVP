<?php
class manage{//handler class
	public function manage_main(){//main manage page
		$manage_main = new manage_main();//calls manage_main class
	}
	public function search(){//search the database for the info selected
		$search = new search();//calls manage_main class
	}
}	


class manage_main{//displays main event management page
	public function __construct(){//runs when class is called
	?>
<style type="text/css">
<!--
.style6 {font-size: small}
-->
</style>


<table border="0" align="center" width="100%">
  <tr>
  	<td height="21"><a href="index.php" class="style4">Home</a></td>
    <td class="style1" align="center">Event Managment</td>
	<td ><div align="right"><a href="#" onclick="window.print();return false;" class="style4">Print</a></div></td><!-- opens print window -->
  </tr>
  <tr>
    <td height="21" colspan="3">&nbsp;</td>
  </tr>
  </table>

<?php
if($_GET['p'] == "results"){//if the page has been submitted
	if(isset($_POST['attending'])){//that you have gone though the index page
		$count = 0;//initialize count var
		//mysql connect
		$con = mysql_connect("localhost","rsvp","PASSWORD")
		or die('Could not connect!');
		//select database
		mysql_select_db("rsvp") or die ("Unable To Select db!");
		$query = 'SELECT * FROM `info` ';//query all the database of info
		$result = mysql_query($query, $con);//submit the query
		$fields_num = mysql_num_fields($result);//get the number of fields
		$query2 = 'SELECT * FROM `food` ';//query all the database of food
		$result2 = mysql_query($query2, $con);//submit the query
		$fields_num2 = mysql_num_fields($result2);//get the number of fields
		echo "<table border='1' align='center'><tr>";
		// printing table headers
		echo '<td align="center">#</td>';
		echo '<td align="center">First Name</td>';
		echo '<td align="center">Last Name</td>';
		if($_POST['maddress'] == "on"){
			echo '<td align="center">Mailing Address</td>';
			$selected = 1;
			}
		if($_POST['city'] == "on"){
			echo '<td align="center">City</td>';
			$selected = 1;
			}
		if($_POST['zip'] == "on"){
			echo '<td align="center">Zip</td>';
			$selected = 1;
			}
		if($_POST['state'] == "on"){
			echo '<td align="center">State</td>';
			$selected = 1;
			}	
		if($_POST['email'] == "on"){
			echo '<td align="center">Email</td>';
			$selected = 1;
			}
		if($_POST['wphone'] == "on"){
			echo '<td align="center">Work Phone</td>';
			$selected = 1;
			}
		if($_POST['hphone'] == "on"){
			echo '<td align="center">Home Phone</td>';
			$selected = 1;
			}	
		if($_POST['cphone'] == "on"){
			echo '<td align="center">Cell Phone</td>';
			$selected = 1;
			}	
		if ($_POST['attending'] == "y"){	
		echo '<td align="center">Attending</td>';
		}						
		echo "</tr>\n";
		// printing table rows
		while($row = mysql_fetch_row($result))//loop til there are no more rows
		{
       	//print the data from the table
		if ($_POST['attending'] == "y"){//if attending is selected
		if($row[11] != 0){//if entry row is attending
			echo '<tr>';
			$count++;
        	echo "<td>$count</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			if($_POST['maddress'] == "on")
				echo "<td>$row[3]</td>";
			if($_POST['city'] == "on")
				echo "<td>$row[4]</td>";
			if($_POST['zip'] == "on")
				echo "<td>$row[5]</td>";
			if($_POST['state'] == "on")
				echo "<td>$row[6]</td>";	
			if($_POST['email'] == "on")
				echo "<td>$row[7]</td>";
			//reformat phone numbers	
			if($_POST['wphone'] == "on"){
				if(strlen($row[8]) < 10){
				echo "<td>N/A</td>";
				}
				else{
				$wphone2 = explode(" ",$row[8]);
				echo '<td>' . $wphone2[0] . '-' . $wphone2[1] . '-' . $wphone2[2] . '</td>';
				}
			}
			if($_POST['hphone'] == "on"){
				if(strlen($row[9]) < 10){
				echo "<td>N/A</td>";
				}
				else{
				$hphone2 = explode(" ",$row[9]);
				echo '<td>' . $hphone2[0] . '-' . $hphone2[1] . '-' . $hphone2[2] . '</td>';
				}
			}
			if($_POST['cphone'] == "on"){
				if(strlen($row[10]) < 10){
				echo "<td>N/A</td>";
				}
				else{
				$cphone2 = explode(" ",$row[10]);
				echo '<td>' . $cphone2[0] . '-' . $cphone2[1] . '-' . $cphone2[2] . '</td>';
				}
			}
			echo "<td>$row[11]</td>";//print # attending
			echo "</tr>\n";
			
	
		}//if of attending == y
		}//if of display of ppl atending
		else{//not attending is selected
		if($row[11] == 0){//if they are not attending
			echo "<tr>";
			$count++;
        	echo "<td>$count</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			if($_POST['maddress'] == "on")
				echo "<td>$row[3]</td>";
			if($_POST['city'] == "on")
				echo "<td>$row[4]</td>";
			if($_POST['zip'] == "on")
				echo "<td>$row[5]</td>";
			if($_POST['state'] == "on")
				echo "<td>$row[6]</td>";	
			if($_POST['email'] == "on")
				echo "<td>$row[7]</td>";
			//reformat phone numbers
			if($_POST['wphone'] == "on"){
				if(strlen($row[8]) < 10){
				echo "<td>N/A</td>";
				}
				else{
				$wphone2 = explode(" ",$row[8]);
				echo '<td>' . $wphone2[0] . '-' . $wphone2[1] . '-' . $wphone2[2] . '</td>';
				}
			}
			if($_POST['hphone'] == "on"){
				if(strlen($row[9]) < 10){
				echo "<td>N/A</td>";
				}
				else{
				$hphone2 = explode(" ",$row[9]);
				echo '<td>' . $hphone2[0] . '-' . $hphone2[1] . '-' . $hphone2[2] . '</td>';
				}
			}
			if($_POST['cphone'] == "on"){
				if(strlen($row[10]) < 10){
				echo "<td>N/A</td>";
				}
				else{
				$cphone2 = explode(" ",$row[10]);
				echo '<td>' . $cphone2[0] . '-' . $cphone2[1] . '-' . $cphone2[2] . '</td>';
				}
			}

    		echo "</tr>\n";
			
			
		}//if
		
		}//else
		
		}//while
		echo "</table>";
		//atteinding is selected and eather food selection or dessert selection is selected
		if($_POST['attending'] == "y" && ($_POST['food'] == "on" || $_POST['dessert'] == "on")){
			?><table border='0' align='center'><tr><td>&nbsp;<table border='1' align='center'><tr><?php
			echo '<td align="center">#</td>';
			//print table headers
			if($_POST['food'] == "on"){
			echo '<td align="center">Entree1</td>';
			echo '<td align="center">Entree2</td>';
			echo '<td align="center">Entree3</td>';
			}
			if($_POST['dessert'] == "on"){
			echo '<td align="center">Dessert1</td>';
			echo '<td align="center">Dessert2</td>';
			echo '<td align="center">Dessert3</td>';
			}
			echo "</tr>";
			//print food and dessert selection
			while($row2 = mysql_fetch_row($result2))
			{
			echo '<tr>';
			$count2++;
        	echo "<td>$count2</td>";
			if($_POST['food'] == "on"){
			echo '<td align="center">' . $row2[2] . '</td>';
			echo '<td align="center">' . $row2[3] . '</td>';
			echo '<td align="center">' . $row2[4] . '</td>';
			}//if
			if($_POST['dessert'] == "on"){
			echo '<td align="center">' . $row2[5] . '</td>';
			echo '<td align="center">' . $row2[6] . '</td>';
			echo '<td align="center">' . $row2[7] . '</td>';
			}//if
			echo '</tr>';
			}//while
			echo "</table>";
			echo "</td>";
			echo "</tr>";
			echo "</table>";
		}
		
		
	mysql_free_result($result2);	
	mysql_free_result($result);
	mysql_close($con);
	}
	else{
	?>
   	<SCRIPT language="JavaScript">
		<!--
		//if you havent gone though the first page it routs you to the main event managment page
		window.location="index.php?do=manage";
		//-->
	</SCRIPT>
<?php
	}
	
}

	$manage = new manage();
	$manage->search();
	
	}
}

class search{
	public function __construct(){
?>	
<script type="text/javascript">
//check all check boxes	
	function check(theElement) {
     var theForm = theElement.form, z = 0;
	 for(z=0; z<theForm.length;z++){
      if(theForm[z].type == 'checkbox' && theForm[z].name != 'checkall'){
	  theForm[z].checked = true;
	  }
     }
    }
//uncheck the check all box if any other checkbox is un checked    
function uncheck(theElement) {
     var theForm = theElement.form, z = 0;
	 for(z=0; z<theForm.length;z++){
      if(theForm[z].type == 'checkbox'){
	 if(theForm[z].name == 'checkall'){
		theForm[2].checked = false; 
	 }
	  }
     }
    } 
</script>
<form action="./index.php?do=manage&p=results" method="post">
<table border="0" align="center">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
  <?php 
  //makes values stay when page is submitted
  if($_POST['attending'] == "n")
  	$checked2 = "CHECKED";
  else
  	$checked1 = "CHECKED";

  if($_POST['checkall'] == "on")
  	$on0 = 	"CHECKED";
			
  if($_POST['maddress'] == "on")
  	$on1 = 	"CHECKED";

  if($_POST['email'] == "on")
  	$on2 = 	"CHECKED";
		
  if($_POST['wphone'] == "on")
  	$on3 = 	"CHECKED";	
	
  if($_POST['hphone'] == "on")
  	$on4 = 	"CHECKED";	
	
  if($_POST['cphone'] == "on")
  	$on5 = 	"CHECKED";	
	
  if($_POST['food'] == "on")
  	$on6 = 	"CHECKED";	
	
  if($_POST['dessert'] == "on")
  	$on7 = 	"CHECKED";
		
  if($_POST['city'] == "on")
  	$on8 = 	"CHECKED";
	
  if($_POST['zip'] == "on")
  	$on9 = 	"CHECKED";	
  
  if($_POST['state'] == "on")
  	$on10 = "CHECKED";								
		
  ?>
    <td class="style4"><input type="radio" name="attending" value="y" onClick="toggle(this)" <?php echo $checked1; ?> />
      Attending </td>
    <td class="style4" colspan="2"><input type="radio" name="attending" value="n" onClick="toggle(this)" <?php echo $checked2; ?> />
      Not Attending </td>
  </tr>
  <tr>
  	<td class="style4">
	<input type="checkbox" name="checkall" <?php echo $on3; ?> onclick="check(this);"/>Check All
	</td>
  </tr>
  <tr>
    <td class="style4"><input type="checkbox" name="maddress" id="maddress" <?php echo $on1; ?> onclick="uncheck(this);"/>
      Mailing Address</td>
    <td class="style4" colspan="2"><input type="checkbox" name="city" id="city" <?php echo $on8; ?> onclick="uncheck(this);"/>
      City&nbsp;<input type="checkbox" name="zip" id="zip" <?php echo $on9; ?> onclick="uncheck(this);"/>
      Zip&nbsp;<input type="checkbox" name="state" id="state" <?php echo $on10; ?> onclick="uncheck(this);"/>
      State</td>  
  </tr>
  <tr>
    <td class="style4" colspan="4"><input type="checkbox" name="email" id="email" <?php echo $on2; ?> onclick="uncheck(this);"/>
      Email Address</td>
  </tr>
  <tr>
    <td class="style4"><input type="checkbox" name="wphone" id="wphone" <?php echo $on3; ?> onclick="uncheck(this);"/>
      Work Phone</td>
    <td class="style4"><input type="checkbox" name="hphone" id="hphone" <?php echo $on4; ?> onclick="uncheck(this);"/>
      Home Phone</td>
    <td class="style4"><input type="checkbox" name="cphone" id="cphone" <?php echo $on5; ?> onclick="uncheck(this);"/>
      Cell Phone</td>
  </tr>
  <tr rel="y">
    <td class="style4"><input type="checkbox" name="food" id="food" <?php echo $on6; ?> onclick="uncheck(this);"/>
      Entrée Selection</td>
    <td class="style4"><input type="checkbox" name="dessert" id="dessert" <?php echo $on7; ?> onclick="uncheck(this);"/>
      Dessert Selection</td>
  </tr>
  <tr>
    <td colspan="3"><center><?php echo '<button type="submit" name="submit" style="background-color:white; border: none;""> <img src="./img/buttons/submit_1.png" onMouseOver="this.src=\'./img/buttons/submit_2.png\'" onMouseOut="this.src=\'./img/buttons/submit_1.png\'" border=0> </button>'; ?></center></td>
  </tr>
</table>
</form>

<?php 

	}
}	
			
?>	
