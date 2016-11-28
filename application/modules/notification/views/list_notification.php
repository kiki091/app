<ul class="dropdown-menu dropdown-navbar navbar-pink">
	<?php if(isset($list_notif)):?>
		<?php foreach ($list_notif as $key => $value):?>
			<li>
				<a href="<?php echo site_url('user/ticket/detail/'.$value['id'] . '/'. slug($value['title']));?>">
					<div class="clearfix">
						<span class="pull-left">
							<i class="btn btn-xs no-hover btn-pink fa fa-envelope-o"></i>
							<?php echo $value['title'];?>
						</span>
						<?php if($value['problem_status'] == 'normal'):?>
							<span class="pull-right badge badge-info">
								<?php echo "Normal";?>
							</span>
						<?php elseif($value['problem_status'] == 'urgent'):?>
							<span class="pull-right badge badge-warning">
								<?php echo "Urgent";?>
							</span>
						<?php else:?>
							<span class="pull-right badge badge-danger">
								<?php echo "Emergency";?>
							</span>
						<?php endif;?>
					</div>
				</a>
			</li>
		<?php endforeach;?>
	<?php endif;?>
</ul>