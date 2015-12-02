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
$id=$_GET['id'];
$_SESSION['proj_id'] = $id;
  include "quatermenus.php"; 
?>
</div>
<div class="row">
    <?php
        include"invoiceform.php";
    ?>
</div>
