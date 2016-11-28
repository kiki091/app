	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Home</a>
					</li>
					<li class="active">Dashboard</li>
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
					<div class="">
						<div class="col-md-12 infobox-container">
						
							<a href="<?php echo base_url('');?>">
								<div class="infobox infobox-orange2">
									<div class="infobox-icon">
										<i class="ace-icon fa fa-refresh"></i>
									</div>

									<div class="infobox-data">
										<span class="infobox-data-number">
										<div id="LoadTotalTicketPending"></div>
										</span>
										<div class="infobox-content">Request Ticket</div>
									</div>
								</div>
							</a>
									
							<a href="<?php echo base_url('');?>">
	                            <div class="infobox infobox-blue">
									<div class="infobox-icon">
										<i class="ace-icon fa fa-exchange"></i>
									</div>

									<div class="infobox-data">
										<span class="infobox-data-number"><div id="LoadTotalTicketOnProgress"></div></span>
										<div class="infobox-content">Ticket Progress</div>
									</div>
								</div>
									
							</a>
									
							<a href="<?php echo base_url('ticket/list');?>">

								<div class="infobox infobox-green">
									<div class="infobox-icon">
										<i class="ace-icon fa fa-check"></i>
									</div>

									<div class="infobox-data">
										<span class="infobox-data-number"><div id="LoadTotalTicketDone"></div></span>
										<div class="infobox-content">Ticket Resolved</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-12">
						
						<div class="widget-box transparent">
							<div class="widget-header widget-header-small">
								<h4 class="widget-title blue smaller">
									<i class="ace-icon fa fa-rss orange"></i>
									Recent Activities
								</h4>

								<div class="widget-toolbar action-buttons">
									<a href="#" data-toggle="modal" data-target="#modalAddTicket" class="pink" title="submit problem">
										<i class="ace-icon fa fa-pencil"></i> Submit Problem
									</a>
								</div>
							</div>
							<div id="load_table">
								
							</div>
						</div>
						<div class="space-6"></div>
					</div>

					<div class="col-xs-12">
						<div id="load_table_onProgress"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modalAddTicket" tabindex="-1" role="dialog" aria-labelledby="modalAddTicket" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ace-icon fa fa-times "></i></button>
	            <h4 class="modal-title" id="myModalLabel">Submit Problem</h4>
	            </div>
	            <form action="<?php echo site_url('ticket/create');?>" role="form" class="form-horizontal" method="post">
	           	 	<div class="modal-body">
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
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Recipient(s) </label>
							
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" id="recipient" name="recipient" class="form-control" placeholder="RECIPIENT(S)" required="required">
								</div>
							</div>
						</div>
							
						<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Problem Status </label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list"></i></span>
									<select name="problem_status" class="form-control" id="problem_status">
										<option>CHOSE PROBLEM STATUS</option>
										<?php if(isset($problem_status)):?>
											<?php foreach ($problem_status as $key => $problem_status):?>
												<option value="<?php echo $problem_status['status'];?>"><?php echo $problem_status['status'];?></option>
											<?php endforeach;?>
										<?php endif;?>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Problem Category </label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list"></i></span>
									<select name="category" class="form-control" id="category">
										<option>CHOSE PROBLEM CATEGORY</option>
										<?php if(isset($problem_category)):?>
											<?php foreach ($problem_category as $key => $problem_category):?>
												<option value="<?php echo $problem_category['category'];?>"><?php echo $problem_category['category'];?></option>
											<?php endforeach;?>
										<?php endif;?>
									</select>
								</div>
							</div>
						</div>
							
						<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Assignee </label>

								<div class="col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-external-link"></i></span>
										<select name="assignee" class="form-control" id="assignee">
											<option>CHOSE ASSIGNEE TO</option>
											<option value="developer">IT Developer</option>
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
										<input type="text" id="title" name="title" class="form-control" placeholder="SUBJECT PROBLEM" maxlength="25" required="required">
									</div>
								</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Office Name</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-building-o"></i></span>
									<select name="office" class="form-control" id="office">
										<option>CHOSE OFFICE NAME</option>
										<?php if(isset($office_name)):?>
											<?php foreach ($office_name as $key => $office_name):?>
												<option value="<?php echo $office_name['office_name'];?>"><?php echo $office_name['office_name'];?> </option>
											<?php endforeach;?>
										<?php endif;?>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Branch Office</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-building-o"></i></span>
									<select name="branch" class="form-control" id="branch">
										<option>CHOSE BRANCH OFFICE</option>
										<?php if(isset($branch_office)):?>
											<?php foreach ($branch_office as $key => $branch_office):?>
												<option value="<?php echo $branch_office['regional'];?>"><?php echo $branch_office['regional'];?> </option>
											<?php endforeach;?>
										<?php endif;?>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Date </label>

							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input id="date_time" class="form-control" value="<?php echo db_to_date(date('Y-m-d H:i:s'));?>" readonly>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Description Problem </label>

							<div class="col-sm-9">
								<textarea name="description" maxlength="255" id="description" class="form-control" required="required"></textarea>
							</div>
								
						</div>
						
	            	</div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                <button type="Submit" class="btn btn-primary">Save changes</button>
		            </div>
	            </form>
	        </div>
	   	</div>
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/jquery.2.1.1.min.js');?>"></script>
	<script type="text/javascript">
		var auto_refresh = setInterval(
			function ()
			{
				$('#LoadTotalTicketPending').load('<?php echo base_url('load-total-ticket-pending');?>').fadeIn("slow");
				$('#LoadTotalTicketOnProgress').load('<?php echo base_url('load-total-ticket-progress');?>').fadeIn("slow");
				$('#LoadTotalTicketDone').load('<?php echo base_url('load-total-ticket-done');?>').fadeIn("slow");
				$('#load_table').load('<?php echo base_url('load-data-table-ticket');?>').fadeIn("slow");
				/**$('#load_table_onProgress').load('<?php echo base_url('load-data-table-ticket-onProgress');?>').fadeIn("slow");*/
			}, 3000); 

	</script>