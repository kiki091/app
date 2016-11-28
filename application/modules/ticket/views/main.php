	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Ticket Problem</a>
					</li>
					<li class="active">Create</li>
				</ul>
				<!-- /.breadcrumb -->
			</div>

			<div class="page-content">
				<?php if(isset($this->session->flashdata)):?>
				<div class="row">
					<div class="alert alert-block alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>

						<i class="ace-icon fa fa-check green"></i>
						<?php echo $this->session->flashdata('pesan'); ?>
						
					</div>
				</div>
				<?php endif;?>
				<div class="row">
					<div class="col-xs-12">
						<h4 class="widget-title lighter">
							<i class="ace-icon fa fa-pencil"></i>
							FORM ADD PROBLEM
						</h4>
						<hr/>
						<form class="form-horizontal" role="form" action="<?php echo base_url('ticket/create');?>" method="POST">
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Ticket Code </label>
							
								<div class="col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-barcode"></i></span>
										<input type="number" id="code" name="code" value="<?php echo $getCode;?>" class="form-control" readonly>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Problem Status </label>

								<div class="col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-bars"></i></span>
										<select name="problem_status" class="form-control" id="problem_status">
											<option>Chose Problem Status</option>
											<option value="normal">Normal</option>
											<option value="urgent">Urgent</option>
											<option value="emergency">Emergency</option>
											<option value="normal">Software</option>
											<option value="urgent">Hardware</option>
											<option value="urgent">Network</option>

										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Assignee </label>

								<div class="col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-external-link"></i></span>
										<select name="assignee" class="form-control" id="problem_status">
											<option>Chose Assignee To</option>
											<option value="helpdesk">IT Developer</option>
											<option value="helpdesk">IT ERP</option>
											<option value="suport">IT Support</option>
											<option value="enginering">Enginering</option>
										</select>
									</div>
								</div>
							</div>


							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Subject Problem</label>

								<div class="col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										<input type="text" id="title" name="title" class="form-control" maxlength="25" required="required">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Branch Office </label>

								<div class="col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-building-o"></i></span>
										<input type="text" id="branch" name="branch" class="form-control" maxlength="15" required="required">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Description Problem </label>

								<div class="col-sm-9">
									<textarea name="description" maxlength="255" id="description" class="form-control" required="required"></textarea>
								</div>
								
							</div>
							
							<div class="form-group">
								<div class="widget-toolbox padding-4 clearfix">
									<div class="btn-group pull-right">
										<button type="submit" class="btn btn-sm btn-success btn-white btn-round">
											<i class="ace-icon fa fa-globe bigger-125"></i>
											Save
											<i class="ace-icon fa fa-arrow-right icon-on-right bigger-125"></i>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('assets/js/ace-extra.min.js');?>"></script>
	