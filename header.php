<?php
  include"connectdbo.php";
  ?>
<!DOCTYPE html>
<html xmlns:ng="http://angularjs.org" id="ng-app" data-ng-app='demo'>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tech Avenue </title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
     
    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
       <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
     

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- date picker-->
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
	
	 <link href="dist/css/style.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index2.php">Tech Avenue</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
					  
					   <li>
                            <a href="index2.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
					   
					   
					   <?php
					   if ($_SESSION['status']=="Cordinator")
					   {
					   ?>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="newuser.php"> Add User</a>
                                </li>
                                <li>
                                    <a href="viewuser.php">View Users</a>
                                </li>
                            </ul>
                        </li>
						 <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Project<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="newproject.php"> Create Project</a>
                                </li>
                            </ul>
                        </li>
						 
						 <?php
					   }
						
					   else 
					   {?>
						<li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Projects<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
<?php
						
	  $jquery1="SELECT * from project where assigned_id=".$_SESSION['user_id']." and state='0' order by proj_name";
	   $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
	  while( $jresult=mysql_fetch_array($jsend1))
	  {
						
?>
                        
                                <li>
                                    <a href="projectview.php?id= <?php echo $jresult['proj_id']?>"><?php echo $jresult['proj_name']?></a>
                                </li>
                             
						 
<?php
	  }
 ?>
							</ul>
<?php
	  }
 ?>					</li>
					  
						 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
	</div>
	<div id="page-wrapper">
         <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><strong>Tech Avenue SYSTEM</strong></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>  
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

     <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>


    <script src="dist/js/sb-admin-2.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>