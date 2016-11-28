	<div id="container" class="widget-body">
		<div id="body" class="widget-main padding-8">
			<div id="profile-feed-1" class="profile-feed">
				<?php
					$numbering = 1;
					if(isset($ticket_resolved)):
						foreach($ticket_resolved as $key=> $ticket_resolved):
				?>
							<div class="profile-activity clearfix">
								<div>
									<img class="pull-left" alt="Alex Doe's avatar" src="<?PHP echo base_url('assets/avatars/avatar5.png');?>" />
									<a class="user" href="#"> <?php echo strtolower($ticket_resolved['recipient']);?> </a>
										submit problem "<?php echo strtolower($ticket_resolved['title']);?>" assignee to <?php echo $ticket_resolved['assignee'];?>.
										
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										<?php echo nice_date($ticket_resolved['time_create']);?>
										| Branch : <?php echo $ticket_resolved['branch'];?>
									</div>
								</div>
							</div>

				<?php
						endforeach;
					endif;
				?>
			</div>
		</div>
	</div>