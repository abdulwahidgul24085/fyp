<?php $this->load->view('admin/components/page_head');?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" style="background:#ffffff;padding:10px 30px;border-radius:5px;">
				<?php $this->load->view($subview);?>
				
				<span class="pull-right">&copy; <?php echo $meta_title;?></span>
			</div>
		</div>
	</div>
	
<?php $this->load->view('admin/components/page_tail');?>