<?php get_header(); ?>
	<div class="container">
		<?php get_header('top'); ?>
		<div class="row">
			<div class="col-md-3">
				<?php get_sidebar('sbeps'); ?>
			</div>
			<div class="col-md-9 col-sbm">
				<div class="panel panel-primary">
					<div class="panel-heading">제품별 생산능력</div>
					<div class="panel-body">
				    	<table class="table striped">
							<thead>
								<tr>
									<th rowspan="2">기간별 생산능력</th>
									<th>연간 생산능력</th>
									<th>월간 생산능력</th>
									<th>일일 생산능력</th>
								</tr>
								<tr>
									<td>1,800</td>
									<td>150</td>
									<td>5</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th rowspan="9">제품별 연간 생산능력</th>
									<th>구분</th>
									<th>제품명</th>
									<th>생산능력</th>
								</tr>
								<tr>
									<th rowspan="3">PLANT</th>
									<td>STEEL STRUCTURE</td>
									<td>500</td>
								</tr>
								<tr>
									<td>POWER PLANT</td>
									<td>400</td>
								</tr>
								<tr>
									<td>IRON MANUFACTURING PLANT</td>
									<td>500</td>
								</tr>
								<tr>
									<th rowspan="5">MATERIAL HANDLING EQUIPMENT</th>
									<td>BELT CONVEYOR</td>
									<td>100</td>
								</tr>
								<tr>
									<td>SCREW CONVEYOR</td>
									<td>100</td>
								</tr>
								<tr>
									<td>DAMPER</td>
									<td>500</td>
								</tr>
								<tr>
									<td>BUCKET ELEVATOR</td>
									<td>50</td>
								</tr>
								<tr>
									<td>ETC</td>
									<td>50</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
