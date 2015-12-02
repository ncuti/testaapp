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
    
    $jquery1="SELECT quart_id from project_quarter  where proj_id='".$_SESSION['proj_id']."' and quart_type='".$_SESSION['quart_id'] ."'";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
  $jresult=mysql_fetch_array($jsend1);
  $id= $jresult['quart_id'];
  $desc=$_POST['desc'];
    
     $jquery1="SELECT COUNT(*) from work where descr='".$desc."' and quart_id='".$id."'";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
    $jresult=mysql_fetch_array($jsend1);
    if($jresult[0]==0)
    {
    
         $query="INSERT INTO work (quart_id,descr) VALUES (
         '".$id."', '".$desc."')";
       $ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>");
       $err="Work  is  Saved";
           echo '<div class="row">';
           echo "<div class=\"alert alert-success\">";
          echo "<strong> Success! </strong>";
         echo "$err <br>";
          echo "</div>";
           echo "</div>";
        
            
    }
    else
    {
        $err="Work  is already  Saved";
           echo '<div class="row">';
           echo "<div class=\"alert alert-error\">";
          echo "<strong> Error! </strong>";
         echo "$err <br>";
          echo "</div>";
           echo "</div>";
    }
    include('workform.php');
    include('viewwork.php');
        

?>
