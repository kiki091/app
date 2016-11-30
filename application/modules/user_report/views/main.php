	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Home</a>
					</li>
					<li class="active">Dashboard</li>
					<li class="active"><?php echo $user['job_desk'];?></li>
				</ul>
				<!-- /.breadcrumb -->
			</div>

			<div class="page-content">
				<div class="row">
					<?php if($this->session->flashdata('pesan')):?>
						<div class="alert alert-block alert-danger">
							<button type="button" class="close" data-dismiss="alert">
								<i class="ace-icon fa fa-times"></i>
							</button>
							<?php echo $this->session->flashdata('pesan'); ?>
						</div>
					<?php endif;?>
                    <div class="col-md-12 infobox-container">
                    <!-- Chose Category Report -->
                    	<a href="#" data-toggle="modal" data-target="#modaReportFromMonth">
							<div class="infobox infobox-blue infobox-large infobox-dark">
								<div class="infobox-icon">
									<i class="ace-icon fa fa-print"></i>
								</div>

								<div class="infobox-data">
									<div class="infobox-content">REPORT BY : </div>
									<div class="infobox-content">MONTH</div>
								</div>
							</div>
						</a>

						<a href="#" data-toggle="modal" data-target="#modaReportFromBranchOffice">
							<div class="infobox infobox-blue infobox-large infobox-dark">
								<div class="infobox-icon">
									<i class="ace-icon fa fa-print"></i>
								</div>

								<div class="infobox-data">
									<div class="infobox-content">REPORT BY : </div>
									<div class="infobox-content">DAY</div>
								</div>
							</div>
						</a>
					<!-- end Category Report -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('modaReportFromMonth');?>
	<?php $this->load->view('modaReportFromBranchOffice');?>
