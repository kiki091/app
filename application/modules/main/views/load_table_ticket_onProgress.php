<h4 class="widget-title lighter">
	<i class="ace-icon fa fa-exchange green"></i>
	Problem On Progress
</h4>
						
<table id="simple-table" class="table table-striped table-bordered table-hover" onload="loadData()">
	<thead>
		<tr>
			<th>NO</th>
			<th>CODE</th>
			<th>PROBLEM STATUS</th>
			<th>TITLE</th>
			<th>DESCRIPTION</th>
			<th>BRANCH</th>
			<th>ASSIGNEE</th>
		</tr>
	</thead>
								
	<?php
		$numbering = 1;
		if(isset($ticket_onProgress)):
			foreach($ticket_onProgress as $key=> $ticket_onProgress):
	?>
				<tbody>
					<tr>
						<td><?php echo $numbering++;?></td>
						<td><?php echo $ticket_onProgress['code'];?></td>
						<td><?php echo $ticket_onProgress['problem_status'];?></td>
						<td><?php echo $ticket_onProgress['title'];?></td>
						<td><?php echo $ticket_onProgress['description'];?></td>
						<td><?php echo $ticket_onProgress['branch'];?></td>
						<td><?php echo $ticket_onProgress['assignee'];?></td>
					</tr>
				</tbody>
	<?php
			endforeach;
		endif;
	?>
		
</table>