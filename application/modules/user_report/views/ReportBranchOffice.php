<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>SUPORT CENTER</title>
		<style type="text/css">

			#simple-table{
				border: 1px solid #ddd;
				
			}
			.center{text-align: center;}
			.content{
				color: #707070;
			    font-weight: 400;
			    background: #F2F2F2;
			    margin: 20px;
			    padding: 20px;
			    font-size: 14px;
			    background-image: -webkit-linear-gradient(top,#f8f8f8 0,#ececec 100%);
			    background-image: -o-linear-gradient(top,#f8f8f8 0,#ececec 100%);
			    background-image: linear-gradient(to bottom,#f8f8f8 0,#ececec 100%);
			    background-repeat: repeat-x;
			}
		</style>
	</head>

	<body>
		<h1 align="center"><?php echo $title;?></h1>
		<table id="simple-table" align="center">
			<thead>
				<tr>
					<th class="content" class="content">#</th>
					<th class="content">RECIPIENT</th>
					<th class="content">TITLE</th>
					<th class="content">STATUS</th>
					<th class="content">CATEGORY</th>
					<th class="content">ASSIGNEE</th>
					<th class="content">ACCEPT</th>
					<th class="content">RESOLVED</th>

				</tr>
			</thead>

			<tbody>
			<?php if(isset($report)):?>
				<?php $numbering=1; foreach ($report as $key => $report):?>
				<tr>
					<td class="center"><?php echo $numbering++;?></td>
					<td class="center"><?php echo $report['recipient'];?></td>
					<td class="center"><?php echo $report['title'];?></td>
					<td class="center"><?php echo $report['problem_status'];?></td>
					<td class="center"><?php echo $report['category'];?></td>
					<td class="center"><?php echo $report['assignee'];?></td>
					<td class="center"><?php echo db_to_date_only($report['time_accept']);?></td>
					<td class="center"><?php echo db_to_date_only($report['time_resolved']);?></td>
				</tr>
				<?php endforeach;?>
			<?php endif;?>
			</tbody>
		</table>
	</body>
</html>
		