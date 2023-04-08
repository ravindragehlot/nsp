<?php
session_start();
require_once './config/config.php';
require_once './includes/auth_validate.php';


//serve POST method, After successful insert, redirect to customers.php page.
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    //Mass Insert Data. Keep "name" attribute in html form same as column name in mysql table.
    $data_to_store = array_filter($_POST);

    //Insert timestamp
    $data_to_store['created_at'] = date('Y-m-d H:i:s');
    $db = getDbInstance();
    
    $last_id = $db->insert('employee', $data_to_store);

    if($last_id)
    {
    	$_SESSION['success'] = "IC Member Added successfully!";
    	header('location: add_icmember.php');
    	exit();
    }
    else
    {
        echo 'insert failed: ' . $db->getLastError();
        exit();
    }
}

//We are using same form for adding and editing. This is a create form so declare $edit = false.
$edit = false;

require_once 'includes/header.php'; 
?>
<div id="page-wrapper">
<div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">Add Internal Comittee Member</h2>
        </div>
        
</div>
    <form class="form" action="" method="post"  id="icmember_form" enctype="multipart/form-data">
       <?php  include_once('./forms/icmember_form.php'); ?>
    </form>
</div>


<script type="text/javascript">
$(document).ready(function(){
   $("#icmember_form").validate({
       rules: {
            f_name: {
                required: true,
                minlength: 3
            },
            l_name: {
                required: true,
                minlength: 3
            },  
			gender: {
                required: true
                
            }, 
			designation_in_ic: {
                required: true
               
            },
			email: {
                required: true,
                email: true
            },
			phone: {
                required: true,
                minlength: 3
            },
			designation: {
                required: true,
                minlength: 3
            },
			effective_date: {
                required: true,
                minlength: 3
            },
        }
    });
});
</script>

<?php include_once 'includes/footer.php'; ?>