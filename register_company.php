<?php
session_start();
require_once './config/config.php';
//require_once 'includes/auth_validate.php';

//Only super admin is allowed to access this page
//if ($_SESSION['admin_type'] !== 'super') {
    // show permission denied message
  //  echo 'Permission Denied';
   // exit();
//}


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$data_to_store = filter_input_array(INPUT_POST);
	
    $db = getDbInstance();
    //Check whether the user name already exists ; 
    $db->where('user_name',$data_to_store['user_name']);
    $db->get('users');
    
    if($db->count >=1){
        $_SESSION['failure'] = "User name already exists";
        header('location: register_company.php');
        exit();
    }

    //Encrypt password
    $data_to_store['password'] = password_hash($data_to_store['password'],PASSWORD_DEFAULT);
    //reset db instance
    $db = getDbInstance();
	$last_id='';
	
	print_r($data_to_store);
	$user_data = array('user_name'=>$data_to_store['user_name'] ,'password'=>$data_to_store['password'] ,'user_type'=>$data_to_store['user_type']);
	//exit;
	
    $last_id = $db->insert('users',$user_data);
    if($last_id)
    {   $company_data = array('company_name'=>$data_to_store['organization_name'],'user_id'=>$last_id);
       // print_r($company_data);
        $db->insert('company_details',$company_data);
    	$_SESSION['success'] = "Company added successfully!";
    	header('location: register_company.php');
    	exit();
    }  
    
}

$edit = false;


require_once 'includes/header.php';
?>
<div id="page-wrapper">
	
	 <?php 
    include_once('includes/flash_messages.php');
    ?>
	<div class="row">
	    <div class="col-lg-6">
			<img src="assets/images/company_register.png">
		</div>
		<div class="col-lg-6">
		<h2 class="page-header">Register Your Organization</h2>
			<form class="well form-horizontal" action=" " method="post"  id="contact_form" enctype="multipart/form-data">
		     <?php include_once './forms/company/register_your_org.php'; ?>
			</form>
			<a href="login.php" class="register"> Login </a>
		</div>
	</div>
	
	
</div>




<?php include_once 'includes/footer.php'; ?>