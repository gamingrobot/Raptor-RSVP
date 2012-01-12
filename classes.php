<?php
class main_screen{//main index home screen
	public function __construct(){
	echo '<center>'; 
	?>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	color: #990000;
}
.style2 {color: #990000}
-->
</style>

<table cellspacing="0" cellpadding="0">
  <tr>
    <td width="466" colspan="2" align="center"><table width="99%">
      <tbody>
        <tr>
          <td><div align="center" class="style1">Welcome to our Raptor RSVP.&nbsp; 
                One of the most difficult tasks in having an event is planning 
                the number of people that will attend. Raptor RSVP makes managing 
                your event easy by using our online event registration tools. 
              </div>
          <tr>
          <td>        
          <tr>
            <td>          
        </tbody>
    </table></td>
  </tr>
  <tr>
    <td width="466" colspan="2" align="center"> <div align="center" class="style2">If 
        you have been invited to this site please click the RSVP button to proceed 
        to the registration process.&nbsp; You will then be prompted to fill in 
        all the required fields so the Event Manager can gather accurate results. 
      </div></td>
  </tr>
</table>
    <?php
	echo '<form name="rsvp" method="post" action="index.php?do=rsvp">';
	echo '<button type="submit" name="submit" style="background-color:white; border: none;""> <img src="./img/buttons/rsvp_1.png" onMouseOver="this.src=\'./img/buttons/rsvp_2.png\'" onMouseOut="this.src=\'./img/buttons/rsvp_1.png\'" border=0> </button>';
	echo '</form>';
	?>
    <table width="466" border="0">
  <tr>
    <td><div align="center"><span class="style2">If you are part of the Event 
        Management staff please click the Event Management button to proceed to 
        your event panel.</span><br />
    </div></td>
  </tr>
</table>
	
<?php 
	echo '<form name="management" method="post" action="index.php?do=manage">';
	echo '<button type="submit" name="submit" style="background-color:white; border: none;""> <img src="./img/buttons/manage_1.png" onMouseOver="this.src=\'./img/buttons/manage_2.png\'" onMouseOut="this.src=\'./img/buttons/manage_1.png\'" border=0> </button>'; 
	echo '</form>';
	echo '</center>';	
	}
}				
?>
