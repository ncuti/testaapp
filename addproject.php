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
if(isset($_POST['addUser']))
{
    $budget=$_POST['budget'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $name=$_POST['name'];
    $engineer=$_POST['engineer'];
    $founder=$_POST['founder'];
    $constructor=$_POST['constructor'];
    $supervisor=$_POST['supervisor'];
    $desc=$_POST['desc'];
    $jquery1="SELECT COUNT(*) from project where proj_name='".$name."'";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
    $jresult=mysql_fetch_array($jsend1);
    if($jresult[0]==0)
    {
         $query="INSERT INTO project (assigned_id,proj_name,proj_desc,start_date,end_date
        , budget,founder,construictor, supervisor, update_time ) VALUES (
         '".$engineer."', '".$name."', '".$desc."',  '".$start."', '".$end."' , '".$budget."' ,'".$founder."' ,
         '".$constructor."' , '".$supervisor."' , '".date("Y-m-d h:m:s")."')"; 
        $ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>");
          $err="project registered";
         echo '<div class="row">';
           echo "<div class=\"alert alert-success\">";
          echo "<strong> Success! </strong>";
         echo "$err <br>";
          echo "</div>";
            echo "</div>";
        }
 else{
    $err="Name is Used, Try To Use another Name";
           echo '<div class="row">';
           echo "<div class=\"alert alert-error\">";
          echo "<strong> Error! </strong>";
         echo "$err <br>";
          echo "</div>";
           echo "</div>";
    
 }
 include"projectform.php";
}
       
?>
