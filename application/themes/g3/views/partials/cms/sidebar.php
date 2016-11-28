	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>
		
		<ul class="nav nav-list">
			<?php if(isset($me)):?>
			<li class="<?php if(isset($menu)){echo $menu ;}?>">
				<a href="<?php echo base_url('cms');?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>
			<li class="<?php if(isset($menu_account)){echo $menu_account ;}?>">
				<a href="<?php echo base_url('cms/account');?>">
					<i class="menu-icon fa fa-user"></i>
					<span class="menu-text"> Account </span>
				</a>

				<b class="arrow"></b>
			</li>
			<?php endif;?>
		</ul>


		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>