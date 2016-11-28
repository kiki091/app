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
                    <div class="col-xs-12">
                    	<div class="widget-box transparent">
							<div class="widget-header widget-header-small">
								<h4 class="widget-title blue smaller">
									<i class="ace-icon fa fa-check green"></i>
									Problem Resolved
								</h4>

								<div class="widget-toolbar action-buttons">
									<div class="nav-search minimized">
										<form class="form-search">
											<span class="input-icon">
												<input type="text" autocomplete="off" class="input-small nav-search-input" placeholder="Search Problem Resolved ...">
												<i class="ace-icon fa fa-search nav-search-icon"></i>
											</span>
										</form>
									</div>
								</div>
							</div>
							<div id="loadTableTcketResolved"></div>
						</div>
						<div class="space-6"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

	<script type="text/javascript">
		var auto_refresh = setInterval(
			function ()
			{
				$('#LoadTotalTicketPending').load('<?php echo base_url('load-total-ticket-pending');?>').fadeIn("slow");
				$('#LoadTotalTicketOnProgress').load('<?php echo base_url('load-total-ticket-progress');?>').fadeIn("slow");
				$('#LoadTotalTicketDone').load('<?php echo base_url('load-total-ticket-done');?>').fadeIn("slow");
				$('#loadTableTcketResolved').load('<?php echo base_url('load-data-table-ticket-resolved');?>').fadeIn("slow");
			}, 3000); 

	</script>