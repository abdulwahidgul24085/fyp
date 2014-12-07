<!-- jQuery -->
<script src="<?php echo base_url('js/jquery.js');?>"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url('js/plugins/morris/raphael.min.js');?>"></script>
<script src="<?php echo base_url('js/plugins/morris/morris.min.js');?>"></script>
<script src="<?php echo base_url('js/plugins/morris/morris-data.js');?>"></script>

<!-- TODO: call the appropreate jquery pages on the apprpreate pages -->
<script>
	$('#forgot-password').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		var _email = $('#inputEmail');
		if(_email.val() == ''){
			alert('please enter an email address');
		}
		else{
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			  if( !emailReg.test($("#inputEmail").val()) ) {
			  	console.log('invalud email');
			  	console.log(_email.val());
			  	// TODO: Append the alert message to inputEmail
			  	_email.append('<p class="text-danger">Please enter a valid emaill address</p>');
			  } else {
			  	
			  }
		}
	});

</script>
</body>
</html>