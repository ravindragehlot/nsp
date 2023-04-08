<fieldset>
    <div class="form-group">
        <label for="company_name">Company Name *</label>
          <input type="text" name="company_name" value="<?php echo  ($edit ? @$company['company_name'] : '' ); ?>" placeholder="Company Name" class="form-control" required="required" id = "company_name" >
    </div> 

     <div class="form-group">
        <label for="registration_type">Registration Type *</label>
		<?php $opt_arr = array('pvt'=>"Private Limited Company",'puc'=>"Public Limited Company",'part'=>"Partnerships",'llp'=>"LLP Registration",'opc'=>"One Person Company",'sop'=>"Sole Proprietorship",'sec8'=>"Section 8 Company"); 
                            ?>
          <select name="registration_type" class="form-control selectpicker" required>
                <option value=" " >Registration Type</option>
                <?php
                foreach ($opt_arr as $opt=>$value) {
                    if ($edit && $opt == $company['registration_type']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $value . '</option>';
                }

                ?>
            </select>
    </div>

    <div class="form-group">
        <label for="website">Organization Website</label>
        <input type="text" name="website" value="<?php echo  ($edit ? @$company['website'] : '' ); ?>" placeholder="Organization Website" class="form-control" required="required" id="website">
    </div>
    <div class="form-group">
        <label for="address">No. of Employees</label>
        <input type="text" name="no_of_employe" value="<?php echo  ($edit ? @$company['no_of_employe'] : '' ); ?>" placeholder="No of employee" class="form-control" required="required" id="no_of_employe">
    </div>
    
    <div class="form-group">
        <label for="address">Date of Incorporation</label>
         <input name="date_of_incorp" value="<?php echo  ($edit ? @$company['date_of_incorp'] : '' ); ?>"  placeholder="Birth date" class="form-control"  type="date">
    </div> 
    
	<div class="form-group">
	  <label class="form-label" for="textAreaExample">About Company</label>
      <textarea class="form-control" name="" id="about_company" rows="4">
	  <?php echo  ($edit ? $company['about_company'] : '' ); ?>
	  
	  </textarea>
    </div>
  

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning button_profile" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
