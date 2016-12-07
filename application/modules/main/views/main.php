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
	<?php $this->load->view('modalAddTicket');?>
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
	<!--
	<script src="http://code.jquery.com/jquery-1.4.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
			$("#office_id").change(function(){
				var office_id = $("#office_id").val();
				$.ajax({
					type : "POST",
					url : "<?php echo base_url('main/get-office-region');?>",
					data : "office_id=" + office_id,
					succcess: function(data){
						$("#region_id").html(data);
					}
				});
			});
		});
	</script>
	-->
