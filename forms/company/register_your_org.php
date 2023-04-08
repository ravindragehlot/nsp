<fieldset>
    <!-- Form Name -->
    
    <!-- Text input-->
	<div class="form-group">
        <label class="col-md-4 control-label">Organization Name</label>
        <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input  type="text" name="organization_name" autocomplete="off" placeholder="Organization Name" class="form-control" value="<?php echo ($edit) ? $admin_account['user_name'] : ''; ?>" autocomplete="off">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Email</label>
        <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  type="text" name="user_name" autocomplete="off" placeholder="Email" class="form-control" value="<?php echo ($edit) ? $admin_account['user_name'] : ''; ?>" autocomplete="off">
            </div>
        </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" >Password</label>
        <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="password" autocomplete="off" placeholder="Password " class="form-control" required="" autocomplete="off">
            </div>
        </div>
    </div>
	<div class="form-group">
        <label class="col-md-4 control-label" >Confirm Password</label>
        <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="password" autocomplete="off" placeholder="confirm Password " class="form-control" required="" autocomplete="off">
            </div>
        </div>
    </div>
    <!-- radio checks -->
    <div class="form-group">
        <input type="hidden" name="user_type" id="user_type" value="3">
    </div>
    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-6">
            <button type="submit" class="btn btn-warning button_profile" >Save <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>
</fieldset>