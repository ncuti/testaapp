<?php
session_start();
if (!isset($_SESSION['username']))
{
header('Location: index.php');
}
?>
<?php include('header.php');
?>

<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $jquery1="SELECT  from project_quarter  where proj_id='".$_SESSION['proj_id']."' and quart_type='1'";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
    $jresult=mysql_fetch_array($jsend1);
    ?>
<div class="row">

</div>