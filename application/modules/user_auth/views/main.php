<div class="main-container">
	<div class="main-content">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="login-container">
					<div class="center">
						<h1>
							<i class="ace-icon fa fa-leaf green"></i>
							<span class="white" id="id-text2">Login Account</span>
						</h1>
						<h4 class="blue" id="id-company-text">&copy; Support Center</h4>
					</div>
                    <?php if($this->session->flashdata('pesan')):?>
						<div class="alert alert-block alert-danger">
							<button type="button" class="close" data-dismiss="alert">
								<i class="ace-icon fa fa-times"></i>
							</button>
							<?php echo $this->session->flashdata('pesan'); ?>
						</div>
					<?php endif;?>
					<div class="space-6"></div>

						<div class="position-relative">
							<div id="login-box" class="login-box visible widget-box no-border">
								<div class="widget-body">
                                    
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											<i class="ace-icon fa fa-coffee green"></i>
											Please Enter Your Information
										</h4>
										<div class="space-6"></div>

										<form action="<?php echo base_url('auth');?>" method="post" name="form-login">
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="email" name="email" class="form-control" placeholder="Email" maxlength="25" required="required" />
														<i class="ace-icon fa fa-envelope-o"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" name="password" class="form-control" placeholder="Password" maxlength="25" required="required" />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<div class="space"></div>
                                                <div class="clearfix">
													
													<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Login</span>
													</button>
												</div>
                                                <div class="space-4"></div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->

									<div class="toolbar clearfix">
										<div>
											<a href="#" data-target="#forgot-box" class="forgot-password-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												I forgot my password
											</a>
										</div>
									</div>
                                    
								</div><!-- /.widget-body -->
							</div><!-- /.login-box -->
						</div>
                    </div>
                </div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.main-content -->
</div><!-- /.main-container -->
    
<!-- basic scripts -->

<script src="<?php echo base_url('assets/js/jquery.2.1.1.min.js');?>"></script>
<!--[if !IE]> -->
<script type="text/javascript">
	window.jQuery || document.write("<script src='<?php echo base_url('assets/js/jquery.min.js');?>'>"+"<"+"/script>");
</script>

<!-- <![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/js/jquery.mobile.custom.min.js');?>'>"+"<"+"/script>");
</script>
