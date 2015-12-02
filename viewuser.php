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
    $jquery1="SELECT state from user where user_Id=$id ";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
    $jresult=mysql_fetch_array($jsend1);
    $state=$jresult[0];
    if($state==0)
    {
    $jquery1="update   user set state=1 where user_Id=$id ";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>"); 
    }
    else
    {
    $jquery1="update   user set state=0 where user_Id=$id ";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>"); 
    }
}
   $jquery1="SELECT * from user order by Firstname";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
    ?>
   <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           RTDA Users Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Gender</th>
                                            <th>State</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <tbody>
    <?php
    while($jresult=mysql_fetch_array($jsend1))
    {
        
        echo"<tr>";
        echo"<td>".$jresult['Firstname']."  ".$jresult['Lastname'] ."</td>";
        echo"<td>".$jresult['Email']."</td>";
        echo"<td>".$jresult['Phone']."</td>";
        echo"<td>".$jresult['Status']."</td>";
        if($jresult['Gender']==1)
        echo"<td>MALE</td>";
        else
        echo"<td>FEMALE</td>";
        if($jresult['state']==0)
        echo"<td>DESACTIVE</td>";
        else
        echo"<td>ACTIVE</td>";
        
        echo"<td><a href='viewuser.php?id=".$jresult['user_Id']."'>Change State</a></td>";
        echo"</tr>";
       
    }
?>
 </tbody>
</table>
                            </div>
                        </div>
                    </div>
                </div>
   </div>