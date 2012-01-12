<?php 
/* php class include files */
include("classes.php");
include("rsvp/rsvp.php");

include("manage/cpanel.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Raptor RSVP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="show_hide.js"></script>
  <style type="text/css">
<!--
.style1 {
	font-size: 30px;
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {
	color: #990000;
}
.style3 {
	font-size: 18px; 
	color: #990000; 
}
.style4 {
	color: #990000; 
}
-->
</style>
</head>
<body bgcolor="#FFFFFF">

<img src="img/spacer" width="1" height="30" border="0">
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
    <td colspan="2" align="center"><img src="./img/header.jpg" alt="Raptor Report"> 
     <br /></td>
</tr>
</table>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td ><img src="img/top_left.gif" width="8" height="8" alt="" border="0"></td>

    <td background="img/top_side.gif"><img src="img/transparent.gif" width="8" height="8" alt="" border="0"></td>
<td><img src="img/top_right.gif" width="8" height="8" alt="" border="0"></td>
</tr>
<tr>
    <td background="img/left_side.gif"><img src="img/transparent.gif" width="4" height="1" alt="" border="0">	</td>
<td>

<!--box content-->
<?php 
/*swich statement that defines what goes in the box */
switch ($_GET['do']){
	/*generic do inputs*/
	
	/*event managment pages*/
	case 'manage':
		$manage = new manage();
		$manage->manage_main();
		break;
	/*rsvp pages*/
	case 'rsvp'://display rsvp
		$rsvp = new rsvp();
		switch ($_GET['p']){
			case 'rsvperror1':
			$rsvp->rsvperror1();
			break;
			
			case 'rsvperror2':
			$rsvp->rsvperror2();
			break;
			
			default:
			$rsvp->rsvp1($error1);
			break;
		}	
		break;
	/*defaluts to main page*/	
	default:
		$main = new main_screen();
		break;
}		
?>
<!-- box content--></td>
<td background="img/right_side.gif"><img src="img/transparent.gif" width="4" height="1" alt="" border="0"></td>
</tr>
  
<tr>
<td><img src="img/bottom_left.gif" width="8" height="8" alt="" border="0"></td>
<td background="img/bottom_side.gif"><img src="img/transparent.gif" width="8" height="1" alt="" border="0"></td>

<td><img src="img/bottom_right.gif" width="8" height="8" alt="" border="0"></td>
</tr>
<tr>
<td align="center"><img src="img/spacer.gif" width="1" height="30"></td>
</tr>
</table>
<div align="center">&copy;Copyleft GamingRobot Inc. All Wrongs Reserved. </div>
</body>
</html>
