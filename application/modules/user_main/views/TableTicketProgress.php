	<div id="container" class="widget-body">
		<div id="body" class="widget-main padding-8">
			<div id="profile-feed-1" class="profile-feed">
				<?php
					$numbering = 1;
					if($ticket_progress):
						foreach($ticket_progress as $key=> $ticket_progress):
				?>
							<div class="profile-activity clearfix">
								<div>
									<img class="pull-left" alt="Alex Doe's avatar" src="<?PHP echo base_url('assets/avatars/avatar5.png');?>" />
									<a class="user" href="#"> <?php echo strtolower($ticket_progress['recipient']);?> </a>
										submit problem "<?php echo strtolower($ticket_progress['title']);?>" assignee to <?php echo $ticket_progress['assignee'];?>.
										
									<div class="tools action-buttons">
										<a onclick="return confirm('Do you really want to resolved problem ticket?');" href="<?php echo base_url('user/ticket/resolved/'.$ticket_progress['ticket_id']);?>" title="Resolved Ticket">
											<i class="ace-icon fa fa-pencil bigger-125"></i>
										</a>
									</div>
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										<?php echo nice_date($ticket_progress['time_create']);?>
										| Branch : <?php echo $ticket_progress['branch'];?>
									</div>
								</div>
							</div>

						<?php endforeach; ?>
					<?php else:?>
						<h3 class="grey lighter smaller">NO DATA PREVIEW</h3>
					<?php endif;?>
			</div>
		</div>
	</div>