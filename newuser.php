<?php
session_start();
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}
?>
<?php include('header.php'); ?>


<script language="javascript">

function checkno() {
	var no=document.getElementById('txtphone');
	var ucheck=/^[0-9]+$/;
	if(!ucheck.test(no.value)){
	
		document.getElementById('txtphone').value="";
		 document.getElementById('txtphone').focus();
		 	alert('Insert numbers only');
	}
	if(no.value < 69999999)
	{
		document.getElementById('txtphone').value="";
		 document.getElementById('txtphone').focus();
		 	alert('Insert all numbers ');
	}
}
 
function reload2(passwoord, passwoord2){
if (passwoord!=passwoord2) {
      alert("the passwoord are not the Same please correct");
      document.getElementById('passwoord').focus();
      document.getElementById('passwoord').value="";
      document.getElementById('passwoord2').focus();
      document.getElementById('passwoord2').value="";
}
}
</script>
<?php include"userform.php" ?>