	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-gear home-icon"></i>
						<a href="<?php echo site_url('cms');?>">ACCOUNT MANAGEMENT SYSTEM</a>
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
					<div class="col-xs-12">
						<div class="widget-box transparent">
							<div class="widget-header widget-header-flat">
								<h4 class="widget-title lighter">
									<i class="ace-icon fa fa-user orange"></i>
									User Account
								</h4>

								<div class="widget-toolbar">
									<a href="#" data-toggle="modal" data-target="#ModalCreateUser">
										Add User
										<i class="ace-icon fa fa-pencil-square-o"></i>
									</a>
								</div>
							</div>

							<div class="widget-body" style="display: block;">
								<div class="widget-main no-padding">
									<table class="table table-bordered table-striped">
										<thead class="thin-border-bottom">
											<tr>
												<th>
													<i class="ace-icon fa fa-caret-right blue"></i>Fullname
												</th>

												<th>
													<i class="ace-icon fa fa-caret-right blue"></i>Email
												</th>

												<th>
													<i class="ace-icon fa fa-caret-right blue"></i>Job Desk
												</th>
												<th>
													<i class="ace-icon fa fa-caret-right blue"></i>Phone 
												</th>
											</tr>
										</thead>

										<tbody>
											<?php if(isset($account)):?>
												<?php foreach ($account as $key => $account) :?>
												<tr>
													<td><?php echo $account['fullname'];?></td>
													<td><?php echo $account['email'];?></td>
													<td><?php echo $account['job_desk'];?></td>
													<td><?php echo $account['phone'];?></td>
												</tr>
												<?php endforeach;?>
											<?php else:?>	
												<h2 align="center">NO DATA PREVIEW</h2>
											<?php endif;?>
										</tbody>
									</table>
								</div><!-- /.widget-main -->
							</div><!-- /.widget-body -->
						</div><!-- /.widget-box -->
					</div>
				</div>

			</div>
		</div>
	</div>
	<?php $this->load->view('ModalCreateUser');?>