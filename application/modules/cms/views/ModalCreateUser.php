<div class="modal fade" id="ModalCreateUser" tabindex="-1" role="dialog" aria-labelledby="ModalCreateUser" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ace-icon fa fa-times "></i></button>
	            <h4 class="modal-title" id="myModalLabel">CREATE USER</h4>
	            </div>
	            <form action="<?php echo site_url('cms/account/create');?>" role="form" class="form-horizontal" method="post">
	           	 	<div class="modal-body">
	           	 		<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Fullname </label>
							
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" id="fullname" name="fullname" class="form-control" placeholder="FULLNAME" maxlength="25" required="required">
								</div>
							</div>
						</div>

	                	<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Password </label>
							
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="number" id="password" name="password" value="<?php echo $getCode;?>" class="form-control" readonly>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Email </label>
							
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
									<input type="email" id="email" name="email" class="form-control" placeholder="EMAIL" maxlength="25" required="required">
								</div>
							</div>
						</div>

						
						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Job Desk </label>

							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-external-link"></i></span>
									<select name="job_desk" class="form-control" id="job_desk">
										<option>CHOSE JOBDESK</option>
										<option value="developer">IT Developer</option>
										<option value="helpdesk">IT ERP</option>
										<option value="suport">IT Support</option>
										<option value="enginering">Enginering</option>
									</select>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Phone</label>

							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input type="number" id="phone" name="phone" class="form-control" placeholder="SUBJECT PROBLEM" maxlength="15" required="required">
								</div>
							</div>
						</div>
	            	</div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                <button type="Submit" class="btn btn-primary">Save</button>
		            </div>
	            </form>
	        </div>
	   	</div>
	</div>