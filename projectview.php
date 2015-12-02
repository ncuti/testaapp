<?php
session_start();
if (!isset($_SESSION['username']))
{
header('Location: index.php');
}
?>
<?php include('header.php'); ?>
<div class="row">
<?php
if(isset($_GET['id'])){

if(trim($_GET['id']," ")!=""){
    $id=$_GET['id'];
    }else{
        header('Location: index2.php');
    }
}else{
 header('Location: index2.php');   
}
$_SESSION['proj_id'] = $id;
  include "quatermenus.php"; 
?>
</div>
<div class="row">
    <?php
    echo $_SESSION['proj_id'] ;
    $jquery1="SELECT COUNT(*) from project_quarter where proj_id=".$_SESSION['proj_id']." and quart_type='1' ";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select</div>");
   $jresult=mysql_fetch_array($jsend1);
    if($jresult[0]==0)
    {
        $_SESSION['quart_id']=1; 
        include"quater1form.php";
    }
    else
    {
         include"viewquater1.php";
    }
    ?>
</div>
