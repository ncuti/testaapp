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
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['Email'];
    $gender=$_POST['Gender'];
    $password=$_POST['Password'];
    $picture=$_FILES['picture']['name'];
    $phone=$_POST['Phone'];
    $status=$_POST['type'];
    $jquery1="SELECT COUNT(*) from user where Email='".$email."'";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
    $jresult=mysql_fetch_array($jsend1);
    if($jresult[0]==0)
    {
         move_uploaded_file($_FILES['picture']['tmp_name'],"uploads/".$_FILES['picture']['name']);
         $query="INSERT INTO user (Firstname,
         Lastname, Email, Gender, picture, Status, Phone,password) VALUES (
         '".$firstname."', '".$lastname."', '".$email."', '".$gender."',
         'uploads/".$_FILES['picture']['name']."', '".$status."', '+25".$phone."', '".md5($password)."')";
        $ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>");
        
         $err="User registered";
         echo '<div class="row">';
           echo "<div class=\"alert alert-success\">";
          echo "<strong> Success! </strong>";
         echo "$err <br>";
          echo "</div>";
            echo "</div>";
       
 }
 else{
    $err="Email is Used, Try To Use another Mail Account";
           echo '<div class="row">';
           echo "<div class=\"alert alert-error\">";
          echo "<strong> Error! </strong>";
         echo "$err <br>";
          echo "</div>";
           echo "</div>";
    
 }
 include"userform.php";
}
       
?>
