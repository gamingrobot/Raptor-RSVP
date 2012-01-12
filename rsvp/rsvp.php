<?php
class rsvp{//handler class
	public function rsvp1($error1){//first rsvp page
		$rsvp1 = new rsvp1($error1);//calls rsvp1 class
	}
	public function rsvperror1(){//error handleing for the first rsvp page
		$rsvperror1 = new rsvperror1();//calls rsvperror1 class
	}
	public function rsvp2($key, $attending, $error2){//seccond rsvp page
		$rsvp2 = new rsvp2($key, $attending, $error2);//calls rsvp2 class
	}
	public function rsvperror2(){//error handling for second rsvp page
		$rsvperror2 = new rsvperror2();//calls rsvperror1 class
	}
	public function rsvp_done1($values1){//mysql submit to database for first rsvp page
		$rsvp_done1 = new rsvp_done1($values1);//calls rsvp2 class
	}
	public function rsvp_done2($values2){//mysql submit to database for second rsvp page
		$rsvp_done2 = new rsvp_done2($values2);//calls rsvp2 class
	}
}	

class rsvp1{//first rsvp form
	public function __construct($errors){//the errors from class rsvperror1 are passed though this class
				
//display rsvp form
//define length of minimum error string length
$error_strlen = 35;
?> 
<form name="rsvpform" method="post" action="./index.php?do=rsvp&p=rsvperror1 ">
  <table border="0" width="400">
    <tr>
      	<td colspan="4"><div align="center" class="style1">Information</div></td>
    </tr>
    <tr>
	<td><table width="100%" border="0">
      <tr>
        <td colspan="3"><?php
	  	echo $errors['error1'][10];//prints duplicate mysql error 
	     ?></td>
      </tr>
      <tr>
        <td width="38%"><?php 
	     	if (strlen($errors['error1'][0]) >= $error_strlen){// if the string is longer than the span class tag
	     	echo "<span class=\"style2\">";//print color tag
      	     	echo "First Name: <br />";//print label for form
				echo "</span>";
	     	}
  	     	else {//error not set
	     	echo "First Name: <br />";//print label without error coloring
			
	     	}
	    	 echo '<input type="text" name="firstname"  maxlength="50" value="' . $_POST['firstname'] . '" /> ';//print form	
	     ?>        </td>
        <td width="25%"><?php 
	  	if (strlen($errors['error1'][1]) >= $error_strlen){// if the string is longer than the span class tag
		echo "<span class=\"style2\">";//print color tag
      	  	echo "Last Name: <br />";//print label for form
	  	echo "</span>";
		}
		else {//error not set
		echo "Last Name: <br />";//print label without coloring
		}
		echo '<input type="text" name="lastname"  maxlength="50" value="' . $_POST['lastname'] . '" /> ';//print form
	     ?>        </td>
      </tr>
      <tr>
        <td colspan="4"><?php 
	      	echo $errors['error1'][0];//print firstname error
	      	echo $errors['error1'][1];//print lastname error
	      ?>        </td>
      </tr>
      <tr>
        <td><?php 
	  	if (strlen($errors['error1'][2]) >= $error_strlen){// if the string is longer than the span class tag
		echo "<span class=\"style2\">";
      	  	echo "Mailing Address: <br />";
	  	echo "</span>";}
		else {
		echo "Mailing Address: <br />";}
		echo '<input type="text" name="maddress" maxlength="50" value="' . $_POST['maddress'] . '" /> ';
	     ?>        </td>
        <td><?php 
	  	if (strlen($errors['error1'][3]) >= $error_strlen){// if the string is longer than the span class tag
		echo "<span class=\"style2\">";
      	  	echo "City: <br />";
	  	echo "</span>";}
		else {
		echo "City: <br />";}
		echo '<input type="text" name="city" maxlength="50" value="' . $_POST['city'] . '" /> ';
	     ?>        </td>
        <td colspan="5"><table border="0">
            <tr>
              <td><?php 
	  	  	if (strlen($errors['error1'][4]) >= $error_strlen){// if the string is longer than the span class tag
		  	echo "<span class=\"style2\">";
      	  		echo "Zip: <br />";
	  	 	 echo "</span>";}
		 	 else {
		 	 echo "Zip: <br />";}
		 	 echo '<input type="text" name="zip" size="6" maxlength="5" value="' . $_POST['zip'] . '" /> ';
		      ?>              </td>
              <td><?php 
	  	 	 if (strlen($errors['error1'][5]) >= $error_strlen){// if the string is longer than the span class tag
		  	echo "<span class=\"style2\">";
      			  echo "State: <br />";
	  		  echo "</span>";}
		 	 else {
		 	 echo "State: <br />";}
		 	 
			 switch ($_POST['state']){//the value stays the same when form is submitted and there is an error
				case "0": $s0 = 'selected'; break;//value is zero not cap o
				case "AL": $s1 = 'selected'; break;
				case "AK": $s2 = 'selected'; break;	
				case "AS": $s3 = 'selected'; break;	
				case "AZ": $s4 = 'selected'; break;	
				case "AR": $s5 = 'selected'; break;	
				case "CA": $s6 = 'selected'; break;
				case "CO": $s7 = 'selected'; break;	
				case "CT": $s8 = 'selected'; break;	
				case "DC": $s9 = 'selected'; break;
				case "DE": $s10 = 'selected'; break;
				case "FM": $s11 = 'selected'; break;
				case "FL": $s12 = 'selected'; break;
				case "GA": $s13 = 'selected'; break;
				case "GU": $s14 = 'selected'; break;
				case "HI": $s15 = 'selected'; break;
				case "ID": $s16 = 'selected'; break;
				case "IL": $s17 = 'selected'; break;
				case "IN": $s18 = 'selected'; break;
				case "IA": $s19 = 'selected'; break;
				case "KS": $s20 = 'selected'; break;
				case "KY": $s21 = 'selected'; break;
				case "LA": $s22 = 'selected'; break;
				case "ME": $s23 = 'selected'; break;
				case "MH": $s24 = 'selected'; break;
				case "MD": $s25 = 'selected'; break;
				case "MA": $s26 = 'selected'; break;
				case "MI": $s27 = 'selected'; break;
				case "MN": $s28 = 'selected'; break;
				case "MS": $s29 = 'selected'; break;
				case "MO": $s30 = 'selected'; break;
				case "MT": $s31 = 'selected'; break;
				case "NE": $s32 = 'selected'; break;
				case "NV": $s33 = 'selected'; break;
				case "NH": $s34 = 'selected'; break;
				case "NJ": $s35 = 'selected'; break;
				case "NM": $s36 = 'selected'; break;
				case "NY": $s37 = 'selected'; break;
				case "NC": $s38 = 'selected'; break;
				case "ND": $s39 = 'selected'; break;
				case "MP": $s40 = 'selected'; break;
				case "OH": $s41 = 'selected'; break;
				case "OK": $s42 = 'selected'; break;
				case "OR": $s43 = 'selected'; break;
				case "PW": $s44 = 'selected'; break;
				case "PA": $s45 = 'selected'; break;
				case "PR": $s46 = 'selected'; break;
				case "RI": $s47 = 'selected'; break;
				case "SC": $s48 = 'selected'; break;
				case "SD": $s49 = 'selected'; break;
				case "TN": $s50 = 'selected'; break;
				case "TX": $s51 = 'selected'; break;
				case "UT": $s52 = 'selected'; break;
				case "VT": $s53 = 'selected'; break;
				case "VI": $s54 = 'selected'; break;
				case "VA": $s55 = 'selected'; break;
				case "WA": $s56 = 'selected'; break;
				case "WV": $s57 = 'selected'; break;
				case "WI": $s58 = 'selected'; break;
				case "WY": $s59 = 'selected'; break;
				default: $s0 = 'selected'; break;
			}
			 
			 
			 ?>
                <select name="state" id="state">
                  <option value="0" <? echo $s0; ?>>--</option>
                  <option value="AL" <? echo $s1; ?>>AL</option> 
                  <option value="AK" <? echo $s2; ?>>AK</option>
                  <option value="AS" <? echo $s3; ?>>AS</option>
                  <option value="AZ" <? echo $s4; ?>>AZ</option>
                  <option value="AR" <? echo $s5; ?>>AR</option>
                  <option value="CA" <? echo $s6; ?>>CA</option>
                  <option value="CO" <? echo $s7; ?>>CO</option>
                  <option value="CT" <? echo $s8; ?>>CT</option>
                  <option value="DC" <? echo $s9; ?>>DC</option>
                  <option value="DE" <? echo $s10; ?>>DE</option>
                  <option value="FM" <? echo $s11; ?>>FM</option>
                  <option value="FL" <? echo $s12; ?>>FL</option>
                  <option value="GA" <? echo $s13; ?>>GA</option>
                  <option value="GU" <? echo $s14; ?>>GU</option>
                  <option value="HI" <? echo $s15; ?>>HI</option>
                  <option value="ID" <? echo $s16; ?>>ID</option>
                  <option value="IL" <? echo $s17; ?>>IL</option>
                  <option value="IN" <? echo $s18; ?>>IN</option>
                  <option value="IA" <? echo $s19; ?>>IA</option>
                  <option value="KS" <? echo $s20; ?>>KS</option>
                  <option value="KY" <? echo $s21; ?>>KY</option>
                  <option value="LA" <? echo $s22; ?>>LA</option>
                  <option value="ME" <? echo $s23; ?>>ME</option>
                  <option value="MH" <? echo $s24; ?>>MH</option>
                  <option value="MD" <? echo $s25; ?>>MD</option>
                  <option value="MA" <? echo $s26; ?>>MA</option>
                  <option value="MI" <? echo $s27; ?>>MI</option>
                  <option value="MN" <? echo $s28; ?>>MN</option>
                  <option value="MS" <? echo $s29; ?>>MS</option>
                  <option value="MO" <? echo $s30; ?>>MO</option>
                  <option value="MT" <? echo $s31; ?>>MT</option>
                  <option value="NE" <? echo $s32; ?>>NE</option>
                  <option value="NV" <? echo $s33; ?>>NV</option>
                  <option value="NH" <? echo $s34; ?>>NH</option>
                  <option value="NJ" <? echo $s35; ?>>NJ</option>
                  <option value="NM" <? echo $s36; ?>>NM</option>
                  <option value="NY" <? echo $s37; ?>>NY</option>
                  <option value="NC" <? echo $s38; ?>>NC</option>
                  <option value="ND" <? echo $s39; ?>>ND</option>
                  <option value="MP" <? echo $s40; ?>>MP</option>
                  <option value="OH" <? echo $s41; ?>>OH</option>
                  <option value="OK" <? echo $s42; ?>>OK</option>
                  <option value="OR" <? echo $s43; ?>>OR</option>
                  <option value="PW" <? echo $s44; ?>>PW</option>
                  <option value="PA" <? echo $s45; ?>>PA</option>
                  <option value="PR" <? echo $s46; ?>>PR</option>
                  <option value="RI" <? echo $s47; ?>>RI</option>
                  <option value="SC" <? echo $s48; ?>>SC</option>
                  <option value="SD" <? echo $s49; ?>>SD</option>
                  <option value="TN" <? echo $s50; ?>>TN</option>
                  <option value="TX" <? echo $s51; ?>>TX</option>
                  <option value="UT" <? echo $s52; ?>>UT</option>
                  <option value="VT" <? echo $s53; ?>>VT</option>
                  <option value="VI" <? echo $s54; ?>>VI</option>
                  <option value="VA" <? echo $s55; ?>>VA</option>
                  <option value="WA" <? echo $s56; ?>>WA</option>
                  <option value="WV" <? echo $s57; ?>>WV</option>
                  <option value="WI" <? echo $s58; ?>>WI</option>
                  <option value="WY" <? echo $s59; ?>>WY</option>
                </select></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="4"><?php 
	  	echo $errors['error1'][2];//prints mailing address error
	  	echo $errors['error1'][3];//prints city error
	  	echo $errors['error1'][4];//prints zip error
	  	echo $errors['error1'][5];//prints state error
	     ?>        </td>
      </tr>
      <tr>
        <td><?php 
	  	if (strlen($errors['error1'][6]) >= $error_strlen){// if the string is longer than the span class tag
		echo "<span class=\"style2\">";
      	  	echo "Email Address: <br />";
	  	echo "</span>";}
		else {
		echo "Email Address: <br />";}
		echo '<input type="text" name="email" maxlength="50" value="' . $_POST['email'] . '" /> ';
	     ?>        </td>
      </tr>
      <tr>
        <td colspan="4"><?php
	  	echo $errors['error1'][6];//prints email error
	     ?>        </td>
      </tr>
      <tr>
        <td colspan="5"><table border="0">
            <tr>
              <td width="85"><?php 
	  		if (strlen($errors['error1'][7]) >= $error_strlen){// if the string is longer than the span class tag
			echo "<span class=\"style2\">";
      	  		echo "Work Phone: <br />";
	  		echo "</span>";}
			else {
			echo "Work Phone: <br />";}
			echo '<input type="text" name="wphone" size="10" maxlength="10" value="' . $_POST['wphone'] . '"/>';
	   	      ?>              </td>
              <td width="85"><?php 
	  		if (strlen($errors['error1'][8]) >= $error_strlen){// if the string is longer than the span class tag
			echo "<span class=\"style2\">";
      	  		echo "Home Phone: ";
	  		echo "</span>";}
			else {
			echo "Home Phone: ";}
			echo '<input type="text" name="hphone" size="10" maxlength="10" value="' . $_POST['hphone'] . '"/>';
	   	      ?>              </td>
              <td width="85"><?php 
	  		if (strlen($errors['error1'][9]) >= $error_strlen){// if the string is longer than the span class tag
			echo "<span class=\"style2\">";
      	  		echo "Cell Phone: <br />";
	  		echo "</span>";}
			else {
			echo "Cell Phone: <br />";}
			echo '<input type="text" name="cphone" size="10" maxlength="10" value="' . $_POST['cphone'] . '"/>';
	   	      ?>              </td>
            </tr>
            <tr>
              <td colspan="4"><?php 
			if (strlen($errors['error1'][7]) >= $error_strlen || strlen($errors['error1'][8]) >= $error_strlen || strlen($errors['error1'][9]) >= $error_strlen) {//if one of the phone numbers has an error
	  		echo '<span class="style2">-Invalid Phone Number</span>';//error code for phone numbers
			}
	  	      ?>              </td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="44">Number Attending:<br />
            <?php 
			switch ($_POST['attending']){//sets e# to selected then prints below so the prev one selected one is default
				case 0: $e0 = 'selected'; break;
				case 1: $e1 = 'selected'; break;
				case 2: $e2 = 'selected'; break;
				case 3: $e3 = 'selected'; break;
				case 4: $e4 = 'selected'; break;
				case 5: $e5 = 'selected'; break;
				case 6: $e6 = 'selected'; break;
				case 7: $e7 = 'selected'; break;
				case 8: $e8 = 'selected'; break;
				case 9: $e9 = 'selected'; break;
				case 10: $e10 = 'selected'; break;	
				default: $e0 = 'selected'; break;//if bug it defults to 0												
			}
			?>
            <select	name="attending">
              <option value="0" <? echo $e0; ?>>Not Attending</option>
              <option value="1" <? echo $e1; ?>>1</option>
              <option value="2" <? echo $e2; ?>>2</option>
              <option value="3" <? echo $e3; ?>>3</option>
              <option value="4" <? echo $e4; ?>>4</option>
              <option value="5" <? echo $e5; ?>>5</option>
              <option value="6" <? echo $e6; ?>>6</option>
              <option value="7" <? echo $e7; ?>>7</option>
              <option value="8" <? echo $e8; ?>>8</option>
              <option value="9" <? echo $e9; ?>>9</option>
              <option value="10" <? echo $e10; ?>>10</option>
            </select>        </td>
      </tr>
      <tr>
        <td colspan="3"><center><?php echo '<button type="submit" name="submit" style="background-color:white; border: none;""> <img src="./img/buttons/continue_1.png" onMouseOver="this.src=\'./img/buttons/continue_2.png\'" onMouseOut="this.src=\'./img/buttons/continue_1.png\'" border=0> </button>'; ?></center></td>
      </tr>
    </table></td>
</tr>
</table>

</form>

<?php		
	}//function 
}//class

class rsvperror1{//error handler class for rsvp1 class
	public function __construct(){
		//*************************************************************************//
		//Error verification for the first rsvp forms								
		//verifictaion for valid values in a form
		//using regxp with preg_match
		//*************************************************************************//
		if (preg_match("/[^A-Za-z]/", $_POST['firstname'])){//allows captials and lowercase of first name
		$e1 = "-Invalid First Name<br />";//error code
		$errors_true = 1;
		}
		
		if (preg_match("/[^A-Za-z]/", $_POST['lastname'])){//allows captials and lowercase of last name
		$e2 = "-Invalid Last Name<br />";//error code
		$errors_true = 1;
		}
		
		if (preg_match("/[^A-Za-z0-9#. ]/", $_POST['maddress'])){//allows captials and lowercase numbers and # .
		$e3 = "-Invalid Mailing Address<br />";//error code
		$errors_true = 1;
		}
		
		if (preg_match("/[^A-Za-z ]/", $_POST['city'])){//allows captials and lowercase and spaces of city
		$e4 = "-Invalid City<br />";//error code
		$errors_true = 1;
		}
		
		if (preg_match("/[^0-9]/", $_POST['zip']) || strlen($_POST['zip']) < 5 && strlen($_POST['zip']) > 1){//allows numbers of zip
		$e5 = "-Invalid Zip Code<br />";//error code
		$errors_true = 1;
		}
	
		if ($_POST['state'] == "0"){//must select a state 
		$e6 = "-Please Select a State<br />";//error code
		$errors_true = 1;
		}

		if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['email'])){
		//Does not match email addresses using an IP address instead of a domain name.
		//Matches all country code top level domains, and specific common top level domains.
		$e7 = "-Invalid Email<br />";//error code
		$errors_true = 1;
		}
		
		if (preg_match("/[^0-9]/", $_POST['wphone']) || strlen($_POST['wphone']) < 10 && strlen($_POST['wphone']) > 1){//allows numbers in phone number
		$e8 = "-Invalid Phone Number<br />";//error code
		$errors_true = 1;
		}

		if (preg_match("/[^0-9]/", $_POST['hphone']) || strlen($_POST['hphone']) < 10 && strlen($_POST['hphone']) > 1){//allows numbers in phone number
		$e9 = "-Invalid Phone Number<br />";//error code
		$errors_true = 1;
		}
	
		if (preg_match("/[^0-9]/", $_POST['cphone']) || strlen($_POST['cphone']) < 10 && strlen($_POST['cphone']) > 1){//allows numbers in phone number
		$e10 = "-Invalid Phone Number<br />";//error code
		$errors_true = 1;
		}
		
		//******************************************************//
		//checking first rsvp forms for empty forms 
		//******************************************************//		
		if (empty($_POST['firstname'])){
		$e1 = "-First Name is Required<br />";//error code
		$errors_true = 1;
		}
		
		if (empty($_POST['lastname'])){
		$e2 = "-Last Name is Required<br />";//error code
		$errors_true = 1;
		}
		
		if (empty($_POST['maddress'])){
		$e3 = "-Mailing Address is Required<br />";//error code
		$errors_true = 1;
		}
		
		if (empty($_POST['city'])){
		$e4 = "-City is Required<br />";//error code
		$errors_true = 1;
		}
		
		if (empty($_POST['zip'])){
		$e5 = "-Zip Code is Required<br />";//error code
		$errors_true = 1;
		}
		
		if (empty($_POST['email'])){
		$e7 = "-Email is Required<br />";//error code
		$errors_true = 1;
		}
		
		if (empty($_POST['wphone']) && empty($_POST['hphone']) && empty($_POST['cphone'])){
		$e8 = "-One Phone Number is Required<br />";//error code
		$e9 = "-One Phone Number is Required<br />";//error code
		$e10 = "-One Phone Number is Required<br />";//error code
		$errors_true = 1;
		}
		
		$_POST['email'] = strtolower($_POST['email']);//take a lowercase state code and make it uppercase
		$_POST['firstname'] = ucfirst(strtolower($_POST['firstname']));//sets first letter to upercase and rest to lowercase
		$_POST['lastname'] = ucfirst(strtolower($_POST['lastname']));
		$_POST['city'] = ucfirst(strtolower($_POST['city']));
		
		
		if ($errors_true == 1){//if an error exsists
		//error code array
		$error1 = array("error1" => array (
		0=> "<span class=\"style2\">".$e1."</span>", 
		1=> "<span class=\"style2\">".$e2."</span>", 
		2=> "<span class=\"style2\">".$e3."</span>", 
		3=> "<span class=\"style2\">".$e4."</span>", 
		4=> "<span class=\"style2\">".$e5."</span>", 
		5=> "<span class=\"style2\">".$e6."</span>", 
		6=> "<span class=\"style2\">".$e7."</span>", 
		7=> "<span class=\"style2\">".$e8."</span>",
		8=> "<span class=\"style2\">".$e9."</span>",
		9=> "<span class=\"style2\">".$e10."</span>"));

		
		$rsvp = new rsvp();//start new handler class
		$rsvp->rsvp1($error1);//run rsvp1 from handler class with $error1 array
		}
		else{//no error
		//check for duplicate entrys
		$con = mysql_connect("localhost","rsvp","PASSWORD")
		or die('Could not connect!');
		//select database
		mysql_select_db("rsvp") or die ("Unable To Select db!");
		//get does a db search for the values
		$query1 = "SELECT *
			FROM `info`
			WHERE `email` LIKE '" . $_POST['email'] . "'
			LIMIT 0 , 1";
			$result1 = mysql_query($query1, $con);
			$row = mysql_num_rows($result1);// fech # of rows
			if ($row == 0)//no duplicate
  			{
			//form 1 values array
			$values1 = array("values1" => array (
			0=> $_POST['firstname'],  
			1=> $_POST['lastname'],
			2=> $_POST['maddress'],
			3=> $_POST['city'],
			4=> $_POST['zip'],
			5=> $_POST['state'],
			6=> $_POST['email'],
			7=> $_POST['wphone'],
			8=> $_POST['hphone'],
			9=> $_POST['cphone'],
			10=> $_POST['attending']));
			
			$rsvp = new rsvp();//start new handler class
			$rsvp->rsvp_done1($values1);//run rsvp_done1 from handlerclass with $values1 array and $code variable
			}
			else{
			$e11 = "-There is a Duplicate of your form in our Database";//set mysql error
			//error code array
			$error1 = array("error1" => array (
			0=> "<span class=\"style2\">".$e1."</span>", 
			1=> "<span class=\"style2\">".$e2."</span>", 
			2=> "<span class=\"style2\">".$e3."</span>", 
			3=> "<span class=\"style2\">".$e4."</span>", 
			4=> "<span class=\"style2\">".$e5."</span>", 
			5=> "<span class=\"style2\">".$e6."</span>", 
			6=> "<span class=\"style2\">".$e7."</span>", 
			7=> "<span class=\"style2\">".$e8."</span>",
			8=> "<span class=\"style2\">".$e9."</span>",
			9=> "<span class=\"style2\">".$e10."</span>",
			10=> "<span class=\"style2\">".$e11."</span>"));
			
			$rsvp = new rsvp();//start new handler class
			$rsvp->rsvp1($error1);//run rsvp1 from handler class with $error1 array
			}
		}//else statment
	}//function	
}//class
	
class rsvp2{//second rsvp form
	public function __construct($key, $attending, $error2){
	?>
	<form name="rsvpform2" method="post" action="./index.php?do=rsvp&p=rsvperror2">
    <?php 
  	echo '<input type="hidden" name="key" value="' . $key . '">'; //post key value
  	echo '<input type="hidden" name="attending" value="' . $attending . '">'; //post attending value 
  	?>
    <table border="0" width="400">
    <tr>
      	<td colspan="4"><div align="center" class="style1">Menu</div></td>
    </tr>
    <tr>
	<td><table width="100%" border="0">
    <tr>
      <td colspan="2" class="style4">You may only select <?php echo $attending; ?> total Entrées and <?php echo $attending; ?> total Desserts</td>
    </tr>
    <tr>
      <td colspan="2"><div class="style3">Entrées</div></td>
    </tr> 
    <tr>
      <td width="14%" align="center">
      <select name="food1">
          <?php 
  			$count = 0;
  			while($count <= $attending){//prints drop down
  			if ($count == $_POST['food1']){//makes a value selected 
  			 echo '<option value="' . $count . '" selected>' . $count . '</option>'; 
  			}
  			else {
  			 echo '<option value="' . $count . '">' . $count . '</option>'; 
  			}
 			 $count = $count + 1;
 			}
  			?>
        </select>        </td>
      <td width="86%" class="style4">Fish Stickz</td>
    </tr>
    <tr>
      <td align="center">      
      <select name="food2">
          <?php 
  			$count = 0;
  			while($count <= $attending){
  			if ($count == $_POST['food2']){
  			 echo '<option value="' . $count . '" selected>' . $count . '</option>'; 
  			}
  			else {
  			 echo '<option value="' . $count . '">' . $count . '</option>'; 
  			}
 			 $count = $count + 1;
 			}
  			?>
        </select>        </td>
      <td class="style4">PB&amp;J</td>
    </tr>
    <tr>
      <td align="center">       
      <select name="food3">
          <?php 
  			$count = 0;
  			while($count <= $attending){
  			if ($count == $_POST['food3']){
  			 echo '<option value="' . $count . '" selected>' . $count . '</option>'; 
  			}
  			else {
  			 echo '<option value="' . $count . '">' . $count . '</option>'; 
  			}
 			 $count = $count + 1;
 			}
  			?>
        </select>        </td>
      <td class="style4">Philly Cheese Steak</td>
    </tr>
    <tr>
      <td colspan="2" class="style4"><?php
	  //error handling for food selection
	  if($error2['error2'][0] = TRUE){
	  $overfood = $error2['error2'][1] - $attending;
	  	if($overfood > 0){
	  	echo "-You have selected " . $overfood . " too many Entrées!";
		}
	  }
	  ?>
	  </td>
    </tr>
    <tr>
      <td colspan="2"><div class="style3">Desserts</div></td>
    </tr>
    <tr>
      <td align="center">     
      <select name="dessert1">
          <?php 
  			$count = 0;
  			while($count <= $attending){
  			if ($count == $_POST['dessert1']){
  			 echo '<option value="' . $count . '" selected>' . $count . '</option>'; 
  			}
  			else {
  			 echo '<option value="' . $count . '">' . $count . '</option>'; 
  			}
 			 $count = $count + 1;
 			}
  			?>
        </select>        </td>
      <td class="style4">Ice Cream</td>
    </tr>
    <tr>
      <td align="center">      
      <select name="dessert2">
          <?php 
  			$count = 0;
  			while($count <= $attending){
  			if ($count == $_POST['dessert2']){
  			 echo '<option value="' . $count . '" selected>' . $count . '</option>'; 
  			}
  			else {
  			 echo '<option value="' . $count . '">' . $count . '</option>'; 
  			}
 			 $count = $count + 1;
 			}
  			?>
        </select>        </td>
      <td class="style4">Fudge</td>
    </tr>
    <tr>
      <td align="center">      
      <select name="dessert3">
          <?php 
  			$count = 0;
  			while($count <= $attending){
  			if ($count == $_POST['dessert3']){
  			 echo '<option value="' . $count . '" selected>' . $count . '</option>'; 
  			}
  			else {
  			 echo '<option value="' . $count . '">' . $count . '</option>'; 
  			}
 			 $count = $count + 1;
 			}
  			?>
        </select>        </td>
      <td class="style4">Cake</td>
    </tr>
    <tr>
      <td colspan="2" class="style4"><?php
	  //error handleing for desserts
	  if($error2['error2'][2] = TRUE){
	  $overdessert = $error2['error2'][3] - $attending;
	  	if($overdessert > 0){
	  	echo "-You have selected " . $overdessert . " too many Desserts!";
		}
	  }
	  ?></td>
    </tr>
    <tr>
      <td colspan="2"><center><?php echo '<button type="submit" name="submit" style="background-color:white; border: none;""> <img src="./img/buttons/submit_1.png" onMouseOver="this.src=\'./img/buttons/submit_2.png\'" onMouseOut="this.src=\'./img/buttons/submit_1.png\'" border=0> </button>'; ?></center></td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
  	</form>
		
	<?php 
	}//function
}//class

class rsvperror2{//error handleing for rsvp2 page
		public function __construct(){ 
		if($_POST['key'] == ""){//so you cant link directly to the page without going though rsvp1
		?>
		<SCRIPT language="JavaScript">
		<!--
		window.location="index.php?do=rsvp";
		//-->
		</SCRIPT>
   	 	<?php 
		}
		else{
		$key = $_POST['key'];
		$attending = $_POST['attending'];
		$foodtotal = $_POST['food1'] + $_POST['food2'] + $_POST['food3']; 
		$desserttotal = $_POST['dessert1'] + $_POST['dessert2'] + $_POST['dessert3'];
		if($foodtotal > $attending){//if there are more selected than attending
		$e1 = TRUE;
		$error = 1;
		}
		if($desserttotal > $attending){//if there are more selected than attending
		$e2 = TRUE;
		$error = 1;
		}

		if($error == 1){//there is an error set error array
			$error2 = array("error2" => array (
			0=> $e1,  
			1=> $foodtotal,
			2=> $e2,
			3=> $desserttotal));
			$rsvp = new rsvp();//start new handler class
			$rsvp->rsvp2($key, $attending, $error2);//run rsvp1 from handler class with $error1 array
		}
		else{//no errors
			$values2 = array("values2" => array (
			0=> $_POST['key'],  
			1=> $_POST['food1'],
			2=> $_POST['food2'],
			3=> $_POST['food3'],
			4=> $_POST['dessert1'],
			5=> $_POST['dessert2'],
			6=> $_POST['dessert3']));
			
			$rsvp = new rsvp();//start new handler class
			$rsvp->rsvp_done2($values2);//run rsvp_done1 from handlerclass with $values1 array and $code variable
		}//else
		}//else
		}//function
}//class

class rsvp_done1{//submit to mysql db
		public function __construct($values){
		//mysql connect
		$con = mysql_connect("localhost","rsvp","PASSWORD")
		or die('Could not connect!');
		//select database
		mysql_select_db("rsvp") or die ("Unable To Select db!");
		//get last row and value of key
		$query1 = "SELECT `key` FROM `info` ORDER BY `key` DESC LIMIT 0,1"; 
		$result1 = mysql_query($query1, $con);
		$row = mysql_fetch_row($result1);// fech rows of mysql table
		if($row[0] == ""){//if no keys in db
		$key = 1;
		}
		else{//a key is in the db
		$key = $row[0] + 1;
		}
		
		//reformat phone #'s
		$wphone = str_split($values['values1'][7], 3);
		$value7 = $wphone[0] . " " . $wphone[1] . " " . $wphone[2] . $wphone[3]; 
		
		$hphone = str_split($values['values1'][8], 3);
		$value8 = $hphone[0] . " " . $hphone[1] . " " . $hphone[2] . $hphone[3];
		
		$cphone = str_split($values['values1'][9], 3);
		$value9 = $cphone[0] . " " . $cphone[1] . " " . $cphone[2] . $cphone[3];
		//set values
		$value0 = $values['values1'][0];
		$value1 = $values['values1'][1];
		$value2 = $values['values1'][2];
		$value3 = $values['values1'][3];
		$value4 = $values['values1'][4];
		$value5 = $values['values1'][5];
		$value6 = $values['values1'][6];	
		$value10 = $values['values1'][10];
		
		
		
		//query for inputing data
		$query2 = "INSERT INTO `info` (
		`key` ,
		`firstname` ,
		`lastname` ,
		`mail` ,
		`city` ,
		`zip` ,
		`state` ,
		`email` ,
		`wphone` ,
		`hphone` ,
		`cphone` ,
		`attending` 
		)
		VALUES (
		'$key', '$value0', '$value1', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10'
		)";
 		$result2 = mysql_query($query2, $con);
		if ($result2 == true){//inputed into db
			if($value10 == 0){//not attending
			?>
			<center>
        	<p><font color="#990000">We are sorry you can't attend.</font></p>
			<p><a href="index.php"><font color="#990000">Home</font></a></p>
       		</center>
			<?php 
			mysql_close($con);
			}
			else{//attending go to rsvp2
			mysql_close($con);
			$attending = $values['values1'][10];
			$rsvp = new rsvp();
			$rsvp->rsvp2($key, $attending, $error2);
			
			}
		}
		else {//error
		echo 'Error Entering Mysql Data';
		mysql_close($con);
		}
		
	}//function
}//class
class rsvp_done2{
	public function __construct($values){
	
		//insert info into food table in db
		$value1 = $values['values2'][0];
		$value2 = $values['values2'][1];
		$value3 = $values['values2'][2];
		$value4 = $values['values2'][3];
		$value5 = $values['values2'][4];
		$value6 = $values['values2'][5];
		$value7 = $values['values2'][6];
		
		//mysql connect
		$con = mysql_connect("localhost","rsvp","PASSWORD")
		or die('Could not connect!');
		//select database
		mysql_select_db("rsvp") or die ("Unable To Select db!");
		//sets query
		$query = "INSERT INTO `food` (
		`key` ,
		`key2` ,
		`e1` ,
		`e2` ,
		`e3` ,
		`d1` ,
		`d2` ,
		`d3`
		)
		VALUES (
		NULL ,  '$value1',  '$value2',  '$value3',  '$value4',  '$value5',  '$value6',  '$value7'
		)";
		$result = mysql_query($query, $con) or die(mysql_error());
		if ($result == true){//inputed into db
		?>
        <center>
        <p><font color="#990000">Thank You For Responding to Our Invitation!</font></p>
		<p><a href="index.php"><font color="#990000">Home</font></a></p>
        </center>
    	<?php 
		mysql_close($con);//close mysql conection
		}
		else{//error entering data
		echo 'Error Entering Mysql Data2';
		mysql_close($con);
		}
	}
}		
?>

