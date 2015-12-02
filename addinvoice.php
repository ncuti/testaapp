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
  $amount=$_POST['amount'];
  $dest=$_POST['dest'];
  $pay=$_POST['pay'];
    
     $jquery1="SELECT COUNT(*) from invoice where quart_id='".$id."' and amount='".$amount."' and payment_date='".$pay."'";
     
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 2</div>");
    $jresult=mysql_fetch_array($jsend1);
    if($jresult[0]==0)
    {
    
         $query="INSERT INTO invoice (quart_id,amount,payment_date, destination ) VALUES (
         '".$id."', '".$amount."' , '".$pay."' , '".$dest."')";
       $ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>");
       $err="invoice  is  Saved";
           echo '<div class="row">';
           echo "<div class=\"alert alert-success\">";
          echo "<strong> Error! </strong>";
         echo "$err <br>";
          echo "</div>";
           echo "</div>";
        
            
    }
    else
    {
        $err="Invoice  is already  Saved";
           echo '<div class="row">';
           echo "<div class=\"alert alert-error\">";
          echo "<strong> Error! </strong>";
         echo "$err <br>";
          echo "</div>";
           echo "</div>";
    }
    include('invoiceform.php');
    include('viewinvoice.php');
        

?>
