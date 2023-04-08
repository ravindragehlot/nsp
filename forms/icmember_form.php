<fieldset>
 <div class="row">
 
  <div class="col-sm-6">
    <div class="form-group">
        <label for="f_name">First Name *</label>
          <input type="text" name="f_name" value="<?php echo htmlspecialchars($edit ? $customer['f_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="First Name" class="form-control" required="required" id = "f_name" >
    </div> 

    <div class="form-group">
        <label for="l_name">Last name *</label>
        <input type="text" name="l_name" value="<?php echo htmlspecialchars($edit ? $customer['l_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div> 

    <div class="form-group">
        <label>Gender</label>
           <?php $opt_arr = array("Woman", "Man", "Transgender","Non-binary/Non-Conforming"); 
                            ?>
            <select name="gender" class="form-control selectpicker" required>
                <option value=" " >Select</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt == $customer['gender']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }

                ?>
            </select>
    </div> 

    
    
    <div class="form-group">
        <label>Designation in the Organization </label>
        <input type="text" name="designation_in_ic" value="<?php echo htmlspecialchars($edit ? $customer['designation_in_ic'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Designation" class="form-control" required="required" id="designation_in_ic">
    </div>  
  </div>	
  <div class="col-sm-6">
    <div class="form-group">
        <label for="email">Email</label>
            <input  type="email" name="email" value="<?php echo htmlspecialchars($edit ? $customer['email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="E-Mail Address" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
            <input name="phone" value="<?php echo htmlspecialchars($edit ? $customer['phone'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="987654321" class="form-control"  type="text" id="phone">
    </div> 


    <div class="form-group">
        <label>Designation in internal Committee </label>
           <?php $opt_arr = array("Presiding Officer", "Member", "External Member"); 
                            ?>
            <select name="designation" class="form-control selectpicker" required>
                <option value=" " >Please select your Designation</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt == $customer['designation']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }

                ?>
            </select>
    </div> 
	
    <div class="form-group">
        <label>Effective Date in the IC</label>
        <input name="effective_date" value="<?php echo htmlspecialchars($edit ? $customer['date_of_birth'] : '', ENT_QUOTES, 'UTF-8'); ?>"  placeholder="Birth date" class="form-control"  type="date">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Discard Changes <span class="glyphicon glyphicon-send"></span></button>
		<button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>  
  </div>
</div>	
</fieldset>
