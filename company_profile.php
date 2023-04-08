<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once 'config/config.php';
//require_once BASE_PATH.'/includes/auth_validate.php';

//serve POST method, After successful insert, redirect to customers.php page.
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    //Mass Insert Data. Keep "name" attribute in html form same as column name in mysql table.
    $data_to_store = array_filter($_POST);
	
	//Insert timestamp
    //$data_to_store['created_at'] = date('Y-m-d H:i:s');
    //$db = getDbInstance();
    
    //$last_id = $db->insert('company_details', $data_to_store);
	
	
	//$db->where ('id',$user_id);

    $db = getDbInstance();
	$db->where ('id',$_SESSION['company_id']);			
	$last_id = $db->update("company_details", $data_to_store);			
	
    if($last_id)
    {
    	$_SESSION['success'] = "Company Profile added successfully!";
    	header('location: company_profile.php');
    	exit();
    }
    else
    {
        echo 'insert failed: ' . $db->getLastError();
        exit();
    }
}
   
   $edit = true;
   $db = getDbInstance();
   $db->where ('id',$_SESSION['company_id']);		
    //Get data to pre-populate the form.
    $company = $db->getOne("company_details");
	

//We are using same form for adding and editing. This is a create form so declare $edit = false.
$edit = true;

require_once BASE_PATH.'/includes/header.php'; 
?>

<div id="page-wrapper">
<div class="row">
     <div class="col-lg-12">
            
        </div>
        
</div>
<div class="row justify-content-center">
 <div class="col-lg-6 col-centered">
 <h2 class="page-header">Company Profile</h2>
    <form class="form" action="" method="post"  id="customer_form" enctype="multipart/form-data">
       <?php  include_once('forms/company/org_profile.php'); ?>
    </form>
 </div>	
</div>	
</div>


<script type="text/javascript">

$(document).ready(function(){
   $("#customer_form").validate({
       rules: {
            company_name: {
                required: true,
                minlength: 3
            },
            registration_type: {
                required: true,
                
            }, 
			website: {
                required: true,
                minlength: 3
            }, 
			no_of_employe: {
                required: true,
                minlength: 3
            },
			date_of_incorp: {
                required: true,
                minlength: 3
            },
			about_company: {
                required: true,
                minlength: 3
            },
        }
    });
});

</script>

<?php include_once BASE_PATH.'/includes/footer.php'; ?>