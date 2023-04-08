<!DOCTYPE html>
<html lang="en">

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Administrator</title>

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="../assets/css/bootstrap.min.css"/>

        <!-- MetisMenu CSS -->
        <link href="../assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../assets/css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
		
		<script> 
		
		/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
		function openNav() {
		document.getElementById("mySidebar").style.width = "250px";
		document.getElementById("page-wrapper").style.marginLeft = "250px";
		document.getElementById("closebtnid1").style.display = "block";
		document.getElementById("closebtnid2").style.display = "none";
		}

		/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
		function closeNav() {
		document.getElementById("mySidebar").style.width = "0";
		document.getElementById("page-wrapper").style.marginLeft = "0";
		document.getElementById("closebtnid1").style.display = "none";
		document.getElementById("closebtnid2").style.display = "block";
		
		}
		
       </script>
	   
	   
	   <style>
	   
		.button_profile {
			width : 80% !important ; 
			background-color : #FF6B6B ;
		 }

	   </style>

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true): ?>
			
                <nav class="navbar navbar-default navbar-static-top " role="navigation" style="margin-bottom: 0">
				    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">Administrator</a>
                    </div>
                    <!-- /.navbar-header -->
                    
                    <ul class="nav navbar-top-links navbar-right">
                        <!-- /.dropdown -->

                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation"  id="mySidebar">
					    
                        <div class="sidebar-nav navbar-collapse">
						   
                            <ul class="nav" id="side-menu">
                                <li>
								<a href="javascript:void(0)" class="closebtn" id="closebtnid1" onclick="closeNav()">&#9776;</a>
								</li>
								<li> 
                                    <a href="../index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>									
                                </li>
								<?php if(($_SESSION['user_id'] == 2)|| ($_SESSION['user_id'] == 4)) { ?>
								<li>
                                    <a href="../gov_portal.php"><i class="fa-solid fa-landmark-dome"></i> Government Portal <span class="fa arrow"></span></a>
									<ul class="nav nav-second-level">
                                        <li>
                                            <a href="../company_dashboard.php"><i class="fa fa-list fa-fw"></i>Government Dashboard</a>
                                        </li>
                                    <li>
                                        <a href="annual_report.php"><i class="fa fa-address-card"></i></i>Local Commiteee Details</a>
                                    </li>									
									<li>
                                        <a href="../company_profile.php"><i class="fa fa-list fa-fw"></i>All Local Commiteee Details</a>
                                    </li>
									<li>
                                        <a href="../ic_member.php"><i class="fa fa-list fa-fw"></i>Local Committee Portal</a>
                                    </li>
									<li>
                                        <a href="../complaints.php"><i class="fa fa-list fa-fw"></i>All Local Committee Portal</a>
                                    </li>
									<li>
                                        <a href="../trainings.php"><i class="fa fa-list fa-fw"></i>Trainings</a>
                                    </li>									
                                    </ul>
                                </li>
								<?php } ?>
								
								<li>
                                    <a href="../company_portal.php"><i class="fa fa-dashboard fa-fw"></i> Company Portal <span class="fa arrow"></span></a>
									 <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../company_dashboard.php"><i class="fa fa-list fa-fw"></i>Company Dashboard</a>
                                        </li>
                                    <li>
                                        <a href="annual_report.php"><i class="fa fa-list fa-fw"></i></i>Annual Report</a>
                                    </li>									
									<li>
                                        <a href="../company_profile.php"><i class="fa fa-list fa-fw"></i>Company Profile</a>
                                    </li>
									<li>
                                        <a href="../ic_member.php"><i class="fa fa-list fa-fw"></i>Internal Committee</a>
                                    </li>
									<li>
                                        <a href="../complaints.php"><i class="fa fa-list fa-fw"></i>Complaints</a>
                                    </li>
									<li>
                                        <a href="../trainings.php"><i class="fa fa-list fa-fw"></i>Trainings</a>
                                    </li>
									
                                    </ul>
                                </li>
								
								<?php if(($_SESSION['user_id'] == 2)|| ($_SESSION['user_id'] == 4)) { ?>
								<li>
                                    <a href="../aggregates.php"><i class="fa fa-dashboard fa-fw"></i> Aggregates <span class="fa arrow"></span></a>
									 <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../customers1.php"><i class="fa fa-list fa-fw"></i>All Company Profiles</a>
                                        </li>
                                    <li>
                                        <a href="annual_report.php"><i class="fa fa-list fa-fw"></i></i>All Internal Committee Details</a>
                                    </li>									
									<li>
                                        <a href="../company_profile.php"><i class="fa fa-list fa-fw"></i>All Complaints</a>
                                    </li>
									<li>
                                        <a href="../inter_committee.php"><i class="fa fa-list fa-fw"></i>All Trainings</a>
                                    </li>
									<li>
                                        <a href="../complaints.php"><i class="fa fa-list fa-fw"></i>All Annual Reports</a>
                                    </li>
									
                                    </ul>
                                </li>
								<?php } ?>
								
								<?php if(($_SESSION['user_id'] == 2)|| ($_SESSION['user_id'] == 4)) { ?>
								<li>
                                    <a href="sub_forms.php"><i class="fa fa-dashboard fa-fw"></i> Sub-Forms <span class="fa arrow"></span></a>
									 <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../customers.php"><i class="fa fa-list fa-fw"></i>EAS SubForm</a>
                                        </li>
                                    <li>
                                        <a href="annual_report.php"><i class="fa fa-list fa-fw"></i></i>All Eas</a>
                                    </li>									
									<li>
                                        <a href="../company_profile.php"><i class="fa fa-list fa-fw"></i>IC Training SubForm</a>
                                    </li>
									<li>
                                        <a href="../inter_committee.php"><i class="fa fa-list fa-fw"></i>All Ic Trainings</a>
                                    </li>
									<li>
                                        <a href="../complaints.php"><i class="fa fa-list fa-fw"></i>Other Trainings SubForm</a>
                                    </li>
									<li>
                                        <a href="../complaints.php"><i class="fa fa-list fa-fw"></i>All Other Initiatives</a>
                                    </li>
									<li>
                                        <a href="../complaints.php"><i class="fa fa-list fa-fw"></i>IC Member Details SubForm</a>
                                    </li>
									<li>
                                        <a href="../complaints.php"><i class="fa fa-list fa-fw"></i>IC Member Details SubForm Report</a>
                                    </li>
									<li>
                                        <a href="../complaints.php"><i class="fa fa-list fa-fw"></i>Complaints SubForm</a>
                                    </li>
									<li>
                                        <a href="../complaints.php"><i class="fa fa-list fa-fw"></i>Complaints SubForm Reports</a>
                                    </li>
																	
                                    </ul>
                                </li>
								<?php } ?>
								
								
								<li <?php //echo (CURRENT_PAGE == "customers.php" || CURRENT_PAGE == "add_customer.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-user-circle fa-fw"></i> Ideas<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../ideas.php"><i class="fa fa-list fa-fw"></i>Open Ideas</a>
                                        </li>
                                    <li>
                                        <a href="../all_open_ideas.php"><i class="fa fa-plus fa-fw"></i>All Open Ideas</a>
                                    </li>
                                    </ul>
                                </li>
												
                                <?php if(($_SESSION['user_id'] == 2)|| ($_SESSION['user_id'] == 4)) { ?>
                                <li <?php echo (CURRENT_PAGE == "customers.php" || CURRENT_PAGE == "add_customer.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-user-circle fa-fw"></i> Customers<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../customers.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                    <li>
                                        <a href="../add_customer.php"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                    </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../admin_users.php"><i class="fa fa-users fa-fw"></i> Users</a>
                                </li>
								<?php } ?>
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->	
				</nav>
            <?php endif;?>
			<div style="background-color:#fff; height:40px;"><button id="closebtnid2" class="openbtn" onclick="openNav()">&#9776; </button></div>
            <!-- The End of the Header -->
			
			