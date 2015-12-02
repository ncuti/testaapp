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
    $jquery1="SELECT * from project order by proj_name";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not selected</div>");
   while( $jresult=mysql_fetch_array($jsend1))
   {
    if ($jresult)
    {
?>
     <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bars fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div id="dashbox">
                                    <div  class="h4"><?php echo $jresult['proj_name']  ?></div>
                                    </div>
                                    <div ><strong>Budget: </strong><?php echo $jresult['budget']  ?> Frws</div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
    </div>
     <?php
    }
   }
     ?>
</div>
