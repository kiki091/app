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
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ticket Code </label>
							
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-barcode"></i></span>
									<input type="number" id="code" name="code" value="<?php echo $getCode;?>" class="form-control" readonly>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Recipient(s) </label>
							
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" id="recipient" name="recipient" class="form-control" placeholder="RECIPIENT(S)" required="required" maxlength="25">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ID </label>
							
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-desktop"></i></span>
									<input type="text" id="recipient" name="team_viewer_id" class="form-control" placeholder="ID TEAM VIEWER" required="required" maxlength="15">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Password</label>
							
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="text" id="team_viewer_pass" name="team_viewer_pass" class="form-control" placeholder="PASSWORD TEAM VIEWER" required="required" maxlength="10">
								</div>
							</div>
						</div>
							
						<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Problem Status </label>
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
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Problem Category </label>
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
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Assignee </label>

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
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Subject Problem</label>

								<div class="col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										<input type="text" id="title" name="title" class="form-control" placeholder="SUBJECT PROBLEM" maxlength="25" required="required">
									</div>
								</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Office Name</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-building-o"></i></span>
									<select name="office" class="form-control" id="office_id">
										<option>CHOSE OFFICE NAME</option>
										<?php if(isset($office_name)):?>
											<?php foreach ($office_name as $key => $office_name):?>
												<option value="<?php echo $office_name['regional'];?>"><?php echo $office_name['office_name'];?> <?php echo $office_name['regional'];?></option>
											<?php endforeach;?>
										<?php endif;?>
									</select>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date </label>

							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input id="date_time" class="form-control" value="<?php echo db_to_date(date('Y-m-d H:i:s'));?>" readonly>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Description Problem </label>

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