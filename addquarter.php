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
    $budget=$_POST['budget'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $physi_Pro=$_POST['phys'];
         $query="INSERT INTO project_quarter (proj_id,
         quart_type, budget, est_phy_progr, start_time,end_time) VALUES (
         '".$_SESSION['proj_id']."', '".$_SESSION['quart_id']."', '".$budget."', '".$physi_Pro."',
         '".$start."', '".$end."')";
       $ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>");
        if($ex)
        {
            include('workform.php');
           
        }


?>
