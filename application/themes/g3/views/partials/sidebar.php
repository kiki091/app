	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>
		
		<ul class="nav nav-list">
			<?php if(isset($user)):?>
			<li class="<?php if(isset($menu)){echo $menu ;}?>">
				<a href="<?php echo base_url('dashboard');?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>
			
			<li class="<?php if(isset($menu_report)){echo $menu_report ;}?>">
				<a href="<?php echo base_url('user/report');?>">
					<i class="menu-icon fa fa-print"></i>
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