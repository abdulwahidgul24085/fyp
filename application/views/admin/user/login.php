<?php echo form_open('', 'class="form-horizontal" role="form"');?>
<div class="form-group">
	<legend>Page Title</legend>
</div>
<div class="form-group">
	<label for="inputEmail" class="col-sm-2 control-label">Email</label>
	<div class="col-sm-10">
		<input type="input" class="form-control" required name="email" id="inputEmail" placeholder="Email">
		<?php echo form_error("email"); ?>
	</div>
</div>
<div class="form-group">
	<label for="inputPassword" class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		<input type="password" class="form-control" required name="password" id="inputPassword" placeholder="Password">
		<?php echo form_error('password'); ?>
	</div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember"> Remember me
        </label>
      </div>
    </div>
  </div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<a href="#" class="btn btn-link pull-left" id="forgot-password">Forgot Password</a>
		<button type="submit" class="btn btn-primary pull-right">Sign in</button>
	</div>
</div>
<?php echo form_close();?>