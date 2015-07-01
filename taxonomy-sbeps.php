<?php get_header(); ?>
<div class="container">
	<?php get_header('top'); ?>
	<div class="row">
		<div class="col-md-12 col-sbm">


			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading01">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion"
								href="#collapse01" aria-expanded="true"
								aria-controls="collapse01"> 회사개요 </a>
						</h4>
					</div>
					<div id="collapse01" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading01">
						<div class="panel-body">
							<table class="table">
								<tbody>
									<tr>
										<th>회사명</th>
										<td>성보이피에스</td>
									</tr>
									<tr>
										<th>대표이사</th>
										<td>이 진미 ( 李 眞美)</td>
									</tr>
									<tr>
										<th rowspan="4">주소</th>
										<td>본사</td>
									</tr>
									<tr>
										<td>경남 창원시 의창구 대산면 가술산남로 12번길 3</td>
									</tr>
									<tr>
										<td>TEL : 055-716-0102</td>
									</tr>
									<tr>
										<td>FAX : 055-716-0106</td>
									</tr>
									<tr>
										<th>설립일</th>
										<td>2014년 10월 28일</td>
									</tr>
									<tr>
										<th rowspan="4">주요사업영역</th>
										<td>T/G ASS’Y제작,발전, 담수, 제철, 운반 설비 제작</td>
									</tr>
									<tr>
										<td>GAS TBN 부품 제작.</td>
									</tr>
									<tr>
										<td>산업 플랜트용 강구조물 제작 및 설치.</td>
									</tr>
									<tr>
										<td>원자력부품 개발 및 제작</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading02">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" 
								data-parent="#accordion" href="#collapse02"
								aria-expanded="false" aria-controls="collapse02"> 경영방침 </a>
						</h4>
					</div>
					<div id="collapse02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading02">
						<div class="panel-body">
							<div style="align: center;">
								<i class="fa fa-hand-o-right"></i> 사 훈 : 최고가 되기 보다는 최선을 다하자.
								<i class="fa fa-hand-o-left"></i>
							</div>
							<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
								<div class="col-md-4">
									<h4>경영방침</h4>
								</div>
								<div class="col-md-8">
									<dl>
										<dt>고객은 무엇을 원할까?</dt>
										<dd>품질향상, 납기준수, 원가절감</dd>
										<dt>나(우리)는 경쟁력이 있는가?</dt>
										<dd>공부(연구)하는 직장인<br/>책임업무수행 적극적이고 헌신적인 행동</dd>
										<dt>미래를 위한 준비는 하는가?</dt>
										<dd>공정한 보상,건전한 기업문화 정착</dd>
									</dl>
								</div>
							</div>
							<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
								<div class="col-md-4">
									<h4> 우리가 추구하는 조직문화 </h4>
								</div>
								<div class="col-md-8">
									
									<ul class="list-unstyled">
										<li>공동체적 조직질서의 구축</li>
										<li>업무의 자율성 및 선의의 경쟁유발</li>
										<li>자발성 및 창의성(혁신성향)고취</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading03">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapse03"
								aria-expanded="false" aria-controls="collapse03"> 조직도 </a>
						</h4>
					</div>
					<div id="collapse03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading03">
						<div class="panel-body">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/oran-chart.png">
						</div>
					</div>
					<script type="text/javascript">
					jQuery(document).ready(function() {
						
						jQuery("#collapse03 img").css({
							width: "100%",
							height: "100%"
						});
					});
					</script>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading04">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapse04"
								aria-expanded="false" aria-controls="collapse04"> 공장현황 </a>
						</h4>
					</div>
					<div id="collapse04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading04">
						<div class="panel-body">
							<p>
								<i class="fa fa-home fa-2x"></i> 소재지 : <p style="display:inline;">경남 창원시 의창구 대산면 가술산남로12번길 3</p>
							</p>
							<p>
								<i class="fa fa-paw fa-2x"></i> TOTAL AREA : 1,582㎡(480평)
							</p>
							<p>
								<i class="fa fa-paw fa-2x"></i> MANUFACTURING AREA : 493㎡ (150평)
							</p>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/main.png" >
						</div>
					</div>
					<script type="text/javascript">
					jQuery(document).ready(function() {
						
						jQuery("#collapse04 img").css({
							width: "100%",
							height: "100%"
						});
					});
					</script>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading05">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapse05"
								aria-expanded="false" aria-controls="collapse05"> 설비및장비 </a>
						</h4>
					</div>
					<div id="collapse05" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading05">
						<div class="panel-body">
							<table class="table">
								<thead>
									<tr>
										<th colspan="2" width="50%">DESCRITION</th>
										<th width="25%">CAPACITY</th>
										<th width="25%">Q'TY</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>LASER CUTTING M/C</td>
										<td>TRUMPF 6KW</td>
										<td>2000W * 6000L</td>
										<td>1 SET</td>
									</tr>
									<tr>
										<td rowspan="2">WELDING M/C</td>
										<td>CO2</td>
										<td>500A</td>
										<td>1 SET</td>
									</tr>
									<tr>
										<td>TIG</td>
										<td>500A</td>
										<td>2 SET</td>
									</tr>
									<tr>
										<td>GOUGING</td>
										<td></td>
										<td>500A</td>
										<td>1 SET</td>
									</tr>
									<tr>
										<td>OXYGEN C/T</td>
										<td></td>
										<td></td>
										<td>1 SET</td>
									</tr>
									<tr>
										<td>OVER HEAD CRANE</td>
										<td></td>
										<td>2.8 TON</td>
										<td>1 SET</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading06">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapse06"
								aria-expanded="false" aria-controls="collapse06"> 주요계측기현황 </a>
						</h4>
					</div>
					<div id="collapse06" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading06">
						<div class="panel-body">
							<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>NO</th>
										<th>DESCRIPTION</th>
										<th>SIZE</th>
										<th>TOOLNO</th>
										<th>Q'TY</th>
										<th>CALRIBRATION .NO</th>
										<th>CALRIBRAT-ION DATE</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>SBM-01</td>
										<td>DIGITAL VERNIER</td>
										<td>0~150mm</td>
										<td>04526116</td>
										<td>1</td>
										<td>QL9C-3440-10333</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-02</td>
										<td>DIGITAL VERNIER</td>
										<td>0~300mm</td>
										<td>1031821</td>
										<td>1</td>
										<td>QL9C-3440-10334</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-03</td>
										<td>DIGITAL VERNIER</td>
										<td>0~300mm</td>
										<td>1077133</td>
										<td>1</td>
										<td>QL9C-3440-10335</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-04</td>
										<td>VERNIER</td>
										<td>0~150mm</td>
										<td>4019417</td>
										<td>1</td>
										<td>QL9C-3440-10332</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-05</td>
										<td>VERNIER</td>
										<td>0~300mm</td>
										<td>51439895</td>
										<td>1</td>
										<td>QL9C-3440-10330</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-06</td>
										<td>VERNIER</td>
										<td>0~300mm</td>
										<td>1019381</td>
										<td>1</td>
										<td>QL9C-3440-10331</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-07</td>
										<td>VERNIER</td>
										<td>0~600mm</td>
										<td>02090036</td>
										<td>1</td>
										<td>QL9C-3440-10336</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-08</td>
										<td>OUT SIDE MICRO</td>
										<td>0~25mm</td>
										<td>8011045</td>
										<td>1</td>
										<td>QL9C-3440-10340</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-09</td>
										<td>OUT SIDE MICRO</td>
										<td>25~50mm</td>
										<td>1308049</td>
										<td>1</td>
										<td>QL9C-3440-10341</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-10</td>
										<td>OUT SIDE MICRO</td>
										<td>50~75mm</td>
										<td>9194207</td>
										<td>1</td>
										<td>QL9C-3440-10345</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-11</td>
										<td>OUT SIDE MICRO</td>
										<td>75~100mm</td>
										<td>305147</td>
										<td>1</td>
										<td>QL9C-3440-10342</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-12</td>
										<td>OUT SIDE MICRO</td>
										<td>100~125mm</td>
										<td>214700</td>
										<td>1</td>
										<td>QL9C-3440-10343</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-13</td>
										<td>OUT SIDE MICRO</td>
										<td>125~150mm</td>
										<td>228648</td>
										<td>1</td>
										<td>QL9C-3440-10344</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-14</td>
										<td>OUT SIDE MICRO</td>
										<td>150~300mm</td>
										<td>1308049</td>
										<td>1</td>
										<td>QL9C-3440-10349</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-15</td>
										<td>IN SIDE MICRO</td>
										<td>50~1000mm</td>
										<td>15283</td>
										<td>1</td>
										<td>QL9C-3440-10350</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-16</td>
										<td>CYLINDER GAUGE</td>
										<td>18~35mm</td>
										<td>912516</td>
										<td>1</td>
										<td>N/A</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-17</td>
										<td>CYLINDER GAUGE</td>
										<td>35~60mm</td>
										<td>004158</td>
										<td>1</td>
										<td>QL9C-3440-10338</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-18</td>
										<td>CYLINDER GAUGE</td>
										<td>50~100mm</td>
										<td>568585</td>
										<td>1</td>
										<td>QL9C-3440-10337</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-19</td>
										<td>CYLINDER GAUGE</td>
										<td>160~250mm</td>
										<td>928691</td>
										<td>1</td>
										<td>QL9C-3440-10339</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-20</td>
										<td>THREAD MICRO</td>
										<td>0~25mm</td>
										<td>86576855</td>
										<td>1</td>
										<td>QL9C-3440-10346</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-21</td>
										<td>THREAD MICRO</td>
										<td>25~50mm</td>
										<td>55001971</td>
										<td>1</td>
										<td>QL9C-3440-10347</td>
										<td>2009.12.08</td>
									</tr>
									<tr>
										<td>SBM-22</td>
										<td>THREAD MICRO</td>
										<td>50~75mm</td>
										<td>46260938</td>
										<td>1</td>
										<td>QL9C-3440-10348</td>
										<td>2009.12.08</td>
									</tr>
								</tbody>
							</table>
							</div>
						</div>
					</div>
					<script type="text/javascript">
						jQuery(document).ready(function() {
							
							jQuery("#collapse06 table").css({
								width: "100%",
								height: "100%"
							});
						});
					</script>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading07">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapse07"
								aria-expanded="false" aria-controls="collapse07"> 주요사업영역 </a>
						</h4>
					</div>
					<div id="collapse07" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading07">
						<div class="panel-body">
							
						
							<div class="page-header">
								<strong>각종 플랜트용 강구조물 제작 및 설치</strong>
							</div>
							<ol>
								<li>POWER PLANT INCLUDING BOILER, HRSG,
									TURBINE GENERATOR</li>
								<li>IRON MANUFACTURING PLANT</li>
								<li>HEAT EXCHANGER</li>
							</ol>
							
							<div class="page-header">
								<strong>각종 운반설비 제작, 설치</strong>
							</div>
							<ol>
								<li>BELT CONVEYOR</li>
								<li>SCREW CONVEYOR</li>
								<li>DAMPER</li>
								<li>BUCKET ELEVATOR</li>
							</ol>
							
							<div class="page-header">
								<strong>FLANGE & FITTING</strong>
							</div>
							<ol>
								<li>FLANGE & SPECIAL FITTING</li>
								<li>TUBE SHEET, 특수용접(OVERLAY, LINING,
									STELLITE등)</li>
							</ol>
						</div>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading08">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapse08"
								aria-expanded="false" aria-controls="collapse08"> 제품별 생산능력 </a>
						</h4>
					</div>
					<div id="collapse08" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading08">
						<div class="panel-body">
							<p style="float: right;">(단위: TON)</p>
							<table class="table">
								<thead>
									<tr>
										<th rowspan="2" width="15%">기간별 생산능력</th>
										<th width="25%">연간 생산능력</th>
										<th width="35%">월간 생산능력</th>
										<th width="25%">일일 생산능력</th>
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
				
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading09">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapse10"
								aria-expanded="false" aria-controls="collapse10"> 공정흐름도 </a>
						</h4>
					</div>
					<div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading09">
						<div class="panel-body">
						
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/process-flow-diagram.png">
						
						</div>
					</div>
					<script type="text/javascript">
						jQuery(document).ready(function() {
							
							jQuery("#collapse10 img").css({
								width: "100%",
								height: "100%"
							});
						});
					</script>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading11">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapse11"
								aria-expanded="false" aria-controls="collapse11"> 제품사진 </a>
						</h4>
					</div>
					<div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
						<div class="panel-body"><?php echo do_shortcode( '[slideshowjedogallery gallery_id="5" view_handle_id="heading11"]' ); ?></div>
					</div>
					<script type="text/javascript">
						jQuery(document).ready(function() {

							jQuery('#accordion').on('shown.bs.collapse', function () {
								jQuery(".collapse.in").each(function(idx){
									if("collapse11" == jQuery(this).attr("id")) {

										var oSlideshowJedoGallery = jQuery("#collapse11 .slideshowjedogallery").data("oSlideshowJedoGallery");
										if(oSlideshowJedoGallery.datas.gallery.options.auto_slide == "Y") {
											oSlideshowJedoGallery.startAutoSliding();
										}
										console.log("#collapse11 .slideshowjedogallery.startAutoSliding()");
									}
								});
							});
							jQuery('#accordion').on('hidden.bs.collapse', function () {
								jQuery(".collapse").each(function(idx){
									if("collapse11" == jQuery(this).attr("id")) {
										
										jQuery("#collapse11 .slideshowjedogallery").data("oSlideshowJedoGallery").stopAutoSliding();
										console.log("#collapse11 .slideshowjedogallery.stopAutoSliding()");
									}
								});
							});
						});
					</script>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading12">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapse12"
								aria-expanded="false" aria-controls="collapse12"> 사업자등록증 </a>
						</h4>
					</div>
					<div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
						<div class="panel-body">
							
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/licence.png">
						
						</div>
					</div>
					<script type="text/javascript">
						jQuery(document).ready(function() {
							
							jQuery("#collapse12 img").css({
								width: "100%",
								height: "100%"
							});
						});
					</script>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading13">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapse13"
								aria-expanded="false" aria-controls="collapse13"> 찾아오시는길 </a>
						</h4>
					</div>
					<div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
						<div class="panel-body">
							
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/sb-eps-map.png">
						
						</div>
					</div>
					<script type="text/javascript">
						jQuery(document).ready(function() {
							
							jQuery("#collapse13 img").css({
								width: "100%",
								height: "100%"
							});
						});
					</script>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var sbeps = "<?php echo $_REQUEST['sbeps']; ?>";
</script>
<?php get_footer(); ?>


