<?php
session_start();
if (!isset($_SESSION['username']))
{
header('Location: index.php');
}
?>
<?php
include('connectdbo.php');
?>

<?php

    //$id=$_GET['id'];
    $jquery1="SELECT * from invoice  where quart_id=(select quart_id from project_quarter where proj_id='".$_SESSION['proj_id']."'  and quart_type='1')";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>".mysql_error());
    $jresult=mysql_fetch_array($jsend1);
    $quart_id=$jresult['quart_id'];
    ?>
    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Cash Flow table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Destination</th>
                                            <th>Amount</th>
                                            <th>Last payment day</th>
                                        </tr>
                                    </thead>
                                     <tbody>
        <?php                          echo"<tr>";
        echo"<td>".$jresult['destination']."</td>";
        echo"<td>".$jresult['amount']."</td>";
        echo"<td>".$jresult['payment_date']."</td>";
        echo"</tr>";
    
    while($jresult=mysql_fetch_array($jsend1))
    {
        
        echo"<tr>";
        echo"<td>".$jresult['destination']."</td>";
        echo"<td>".$jresult['amount']."</td>";
        echo"<td>".$jresult['payment_date']."</td>";
        echo"</tr>";
       
    }
?>

 </tbody>
</table>
                            </div>
                        </div>
                    </div>
                </div>
   </div><?php

    $jquery1="SELECT * from work  where quart_id='$quart_id'";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>".mysql_error());
    $jresult=mysql_fetch_array($jsend1);
    //count to get number of works
    /*$jquery1="SELECT * from work  where quart_id='$quart_id'";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>".mysql_error());
    $jresult=mysql_fetch_array($jsend1);*/
    ?>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Cash Flow table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>works</th>
                                        </tr>
                                    </thead>
                                     <tbody>
        <?php                          echo"<tr>";
        echo"<td>".$jresult['descr']."</td>";
        echo"</tr>";
    
    while($jresult=mysql_fetch_array($jsend1))
    {
        
        echo"<tr>";
        echo"<td>".$jresult['descr']."</td>";
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

<div class="row">

</div>