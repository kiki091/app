	<div id="container" class="widget-body">
		<div id="body" class="widget-main padding-8">
			<div id="profile-feed-1" class="profile-feed">
				<?php
					$numbering = 1;
					if(isset($ticket_pending)):
						foreach($ticket_pending as $key=> $ticket_pending):
				?>
							<div class="profile-activity clearfix">
								<div>
									<img class="pull-left" alt="Alex Doe's avatar" src="<?PHP echo base_url('assets/avatars/avatar5.png');?>" />
									<a class="user" href="#"> <?php echo strtolower($ticket_pending['recipient']);?> </a>
										submit problem "<?php echo strtolower($ticket_pending['title']);?>" assignee to <?php echo $ticket_pending['assignee'];?>.
										
									<div class="tools action-buttons">
										<a onclick="return confirm('Do you really want to accept ticket?');" href="<?php echo base_url('user/ticket/accept/'.$ticket_pending['id']);?>" class="blue">
											<i class="ace-icon fa fa-pencil bigger-125"></i>
										</a>
									</div>
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										<?php echo nice_date($ticket_pending['time_create']);?>
										| Branch : <?php echo $ticket_pending['branch'];?>
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
