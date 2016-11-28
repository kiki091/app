	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>
		<?php if(isset($user)):?>
			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<button class="btn btn-success" title="Report">
						<i class="ace-icon fa fa-book"></i>
					</button>

					<button class="btn btn-info">
						<i class="ace-icon fa fa-pencil"></i>
					</button>

					<button class="btn btn-warning">
						<i class="ace-icon fa fa-users"></i>
					</button>

					<button class="btn btn-danger">
						<i class="ace-icon fa fa-cogs"></i>
					</button>
				</div>
				
				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>

					<span class="btn btn-info"></span>

					<span class="btn btn-warning"></span>

					<span class="btn btn-danger"></span>
				</div>
				
			</div>
			<!-- /.sidebar-shortcuts -->
		<?php endif;?>
		<ul class="nav nav-list">
			<?php if(isset($user)):?>
			<li class="active">
				<a href="<?php echo base_url('dashboard');?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>
			
			<li class="">
				<a href="<?php echo base_url('user/report');?>">
					<i class="menu-icon fa fa-caret-right"></i>
					Report
				</a>
				<b class="arrow"></b>
			</li>
			
			<?php else:?>
			
			<li class="active">
				<a href="<?php echo base_url('/');?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-phone"></i>
					<span class="menu-text">Contact Us</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>
				
				<ul class="submenu">
					<li class="">
						<a href="#">
							<i class="menu-icon fa fa-caret-right"></i>
							Contact Name
						</a>

						<b class="arrow"></b>
					</li>
				</ul>
			</li>
			<?php endif;?>
		</ul>


		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>