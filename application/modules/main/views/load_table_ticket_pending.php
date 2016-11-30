
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
									<a class="user" href="#"> <?php echo strtolower($ticket_pending['recipient']);?> </a>
										submit problem "<?php echo strtolower($ticket_pending['title']);?>" assignee to <?php echo $ticket_pending['assignee'];?>.
									<a href="#">Take a look</a>
									
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										<?php echo nice_date($ticket_pending['time_create']);?>
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


