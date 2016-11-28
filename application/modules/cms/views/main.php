	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-gear home-icon"></i>
						<a href="<?php echo site_url('cms');?>">CONTENT MANAGEMENT SYSTEM</a>
					</li>
				</ul>
				<!-- /.breadcrumb -->
			</div>

			<div class="page-content">
				
				<div class="row">
					<?php if($this->session->flashdata('pesan')):?>
						<div class="alert alert-block alert-success">
							<button type="button" class="close" data-dismiss="alert">
								<i class="ace-icon fa fa-times"></i>
							</button>
							<?php echo $this->session->flashdata('pesan'); ?>
						</div>
					<?php endif;?>
				</div>

			</div>
		</div>
	</div>
	