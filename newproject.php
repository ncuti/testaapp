<?php
session_start();
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}
?>
<script language="javascript">

function checkno() {
	var no=document.getElementById('txtphone');
	var ucheck=/^[0-9]+$/;
	if(!ucheck.test(no.value)){
	
		document.getElementById('txtphone').value="";
		 document.getElementById('txtphone').focus();
		 	alert('Insert numbers only');
	}
	
}
</script>
<?php include('header.php'); ?>



<?php include"projectform.php" ?>