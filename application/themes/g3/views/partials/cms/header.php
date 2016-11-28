
	<div id="navbar" class="navbar navbar-default ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<?php if(isset($me)):?>
					<a href="<?php echo base_url('cms');?>" class="navbar-brand">
				<?php else:?>
					<a href="<?php echo base_url('ams');?>" class="navbar-brand">
				<?php endif;?>
					<small>
						<i class="fa fa-leaf"></i>
							Support Center (CMS)
					</small>
				</a>
				
			</div>
				
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				
				<?php if(isset($me)):?>
					<ul class="nav ace-nav">
						<li class="aqua">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">
									<div id="total-notif">0</div>
								</span>
							</a>
						</li>
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url('assets/avatars/avatar.png');?>" alt="Users Image" />
								<span class="user-info">
									<small>Welcome,</small>
										<?php echo $me['fullname'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>
								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url('cms/logout');?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				<?php endif;?>
				
			</div>
		</div><!-- /.navbar-container -->
	</div>