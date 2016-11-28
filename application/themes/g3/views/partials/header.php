
	<div id="navbar" class="navbar navbar-default ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<?php if(isset($user)):?>
					<a href="<?php echo base_url('dashboard');?>" class="navbar-brand">
				<?php else:?>
					<a href="<?php echo base_url('/');?>" class="navbar-brand">
				<?php endif;?>
					<small>
						<i class="fa fa-leaf"></i>
							Support Center v1.F
					</small>
				</a>
				
			</div>
				
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				
				<?php if(isset($user)):?>
					<ul class="nav ace-nav">
						<li class="aqua">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">
									<div id="total-notif"></div>
								</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">

								<li class="dropdown-content ace-scroll" style="position: relative;">
									<div class="scroll-track" style="display: none;">
										<div class="scroll-bar"></div>
									</div>
									<div class="scroll-content" style="max-height: 200px;">
										<div id="list-notif"></div>
										
									</div>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url('assets/avatars/avatar.png');?>" alt="Users Image" />
								<span class="user-info">
									<small>Welcome,</small>
										<?php echo $user['fullname'];?>
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
									<a href="<?php echo base_url('auth/logout');?>">
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