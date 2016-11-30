	<div class="modal fade" id="modaReportFromMonth" tabindex="-1" role="dialog" aria-labelledby="modaReportFromMonth" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ace-icon fa fa-times "></i></button>
	            	<h4 class="modal-title" id="myModalLabel">BRANCH OFFICE</h4>
	            </div>
	            <form class="form-horizontal" role="form" action="<?php echo base_url('user/report/month');?>" method="POST">
	           	 	<div class="modal-body">

	           	 		<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-building-o"></i></span>
									<select name="office_name" class="form-control" id="office_name">
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
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-building-o"></i></span>
									<select name="branch_office" class="form-control" id="branch_office">
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
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list"></i></span>
									<select name="problem_category" class="form-control" id="problem_category">
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
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-list"></i></span>
									<select name="month" class="form-control" id="month">
										<option>CHOSE MONTH</option>
										<option value="01">January</option>
										<option value="02">February</option>
										<option value="03">March</option>
										<option value="04">April</option>
										<option value="05">Mai</option>
										<option value="06">June</option>
										<option value="07">Jully</option>
										<option value="08">August</option>
										<option value="09">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
								</div>
							</div>
						</div>
	            	</div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                <button type="Submit" class="btn btn-primary">Print</button>
		            </div>
	            </form>
	        </div>
	   	</div>
	</div>