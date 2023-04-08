<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once 'config/config.php';
require_once BASE_PATH.'/includes/header.php'; 

?> 
<div id="page-wrapper" id="main">
<div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-6">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary h6_heading"></h6>
                                </div>
                                <div class="card-body">
                                   <?php 
								        $db = getDbInstance();
										$db->where('id',$_SESSION['company_id']);			
										$row = $db->get('company_details');
										if ($db->count >= 1) {                                         
										 //print_r($row); 
									?>										
										
									<div class="row">										
										<div class="col-lg-6 mb-4">
										Company Name : <?php echo $row[0]['company_name']; ?> 
										</div>						
										<div class="col-lg-6 mb-4">
										Registration Type : <?php echo $row[0]['registration_type']; ?> 
										</div>										
									</div>
									
									<div class="row">										
										<div class="col-lg-6 mb-4">
										Date of Incorporation : <?php echo $row[0]['date_of_incorp']; ?> 
										</div>						
										<div class="col-lg-6 mb-4">
										Website  : <?php echo $row[0]['website']; ?> 
										</div>										
									</div>
									
									<div class="row">										
										<div class="col-lg-6 mb-4">
										No of Employees : <?php echo $row[0]['no_of_employe']; ?> 
										</div>						
										<div class="col-lg-6 mb-4">
										Gender Ratio : <?php //echo $row[0]['']; ?> 
										</div>										
									</div>
									<div class="row">
									<div class="col-lg-6 mb-4">
										Address : <?php //echo $row[0]['']; ?> 
										</div>
									</div>
									
                                    <?php   }
                                   ?> 								   
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
													
													
							<div class="row">
							<div class="col-lg-12 mb-6">
							<div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary h6_heading">Complaints statistics</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
								<div class="card-body">
								   <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
									<canvas id="myAreaChart" style="display: block; width: 668px; height: 320px;" width="668" height="320" class="chartjs-render-monitor"></canvas>
								   </div>
								</div>
								</div>
							</div>	
							</div>
							
							
							
                        </div>                        
                    </div>
 </div>					
			
<script src="vendor/chart.js/Chart.min.js"></script>			
<script src="/assets/js/demo/chart-area-demo.js"></script>			
<?php include_once BASE_PATH.'/includes/footer.php'; ?>