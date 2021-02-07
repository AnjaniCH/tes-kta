@extends('layout.layoutmain')

@section('content')
	<!-- start: BODY -->
		<!-- start: SLIDING BAR (SB) -->
			<!-- start: MAIN CONTAINER -->
				<!-- start: PAGE -->
				<div class="main-content">
					<div class="container">
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-white">
									<div class="panel-heading border-light">
										<div class="row">
											<div class="col-xs-8 pad0">
                        						<!-- START FORM SEARCH !-->
                        						<div id="section-sfilter" >
                          							<form action="" enctype="multipart/form-data" method="get">
                            							<div class="row">
                              								<div class="col-sm-4 col-xs-12">
												        		<div class="sfilter-group">
													        		<select id="CMGUnmaskedName" name="CMGUnmaskedName" autocomplete="off" class="input-sfilter">
														        		<option value="" style="font-style:italic;">Search for CMGUnmaskedName</option>
														        		<?php if(is_array($company)) { $num=1; foreach($company as $comp){ ?>
															        	<option>{{ $comp->CMGUnmaskedName }}</option>
															      		<?php $num++;} }?>
														      		</select>
													      		</div>
												      		</div>
                              								<div class="col-sm-4 col-xs-12">
												        		<div class="sfilter-group">
													        		<select id="ClientTier" name="ClientTier" autocomplete="off" class="input-sfilter">
														        		<option value="" style="font-style:italic;">Search for ClientTier</option>
														        		<option value="Franchise">Franchise</option>
																		<option value="Lending Services">Lending Services</option>
																		<option value="Franch(L) w/o credit">Franch(L) w/o credit</option>
																		<option value="ANZ Internal">ANZ Internal</option>
																		<option value="To be exited">To be exited</option>
																		<option value="To be sorted">To be sorted</option>
																		<option value="Platinum">Platinum</option>
																		<option value="Platinum Growth">Platinum Growth</option>
														      		</select>
													      		</div>
												      		</div>
                              								<div class="col-sm-4 col-xs-12">
												        		<div class="sfilter-group">
													        		<select id="CMGSegmentName" name="CMGSegmentName" autocomplete="off" class="input-sfilter">
														        		<option value="" style="font-style:italic;">Search for CMGSegmentName</option>
														        		<?php if(is_array($company)) { $num=1;foreach($company as $comp){ ?>
															        	<option>{{ $comp->CMGSegmentName }}</option>
															      		<?php $num++;} }?>
														      		</select>
													      		</div>
												      		</div>
											      		</div>
                          							</form>
                        						</div>
                        						<!-- END FORM SEARCH !-->
											</div>
										</div>
									</div>
									<div class="panel-body">
										<div class="table-responsive up1">
											<table id="myTable" class="table table-striped table-bordered">
                      						<thead>
											  	<tr>
											  	<th class="text-center">CMGUnmaskedID</th>
											  	<th class="text-center">CMGUnmaskedName</th>
													<th class="text-center" width="250">ClientTier</th>
													<th class="text-center" width="250">GCPStream</th>
													<th class="text-center" width="250">GCPBusiness</th>
													<th class="text-center" width="250">CMGGlobalBU</th>
													<th class="text-center" width="350">CMGSegmentName</th>
													<th class="text-center" width="150">GlobalControlPoint</th>
													<th class="text-center" width="250">GCPGeography</th>
													<th class="text-center" width="250">GlobalRelationshipManagerName</th>
											  	</tr>
                      						</thead>
                      						<tbody>
											  	<?php if (is_array($company)) {foreach ($company as $co) {?>
											  	<tr>
											  		<td class="text-center"><a href="{{ route('company.show', $co->offset ) }}">{{ $co->CMGUnmaskedID }}</a></td>
											  		<td class="text-center">{{ $co->CMGUnmaskedName }}</td>
											  		<td class="text-center">{{ $co->ClientTier }}</td>
											  		<td class="text-center">{{ $co->GCPStream }}</td>
											  		<td class="text-center">{{ $co->GCPBusiness }}</td>
											  		<td class="text-center">{{ $co->CMGGlobalBU }}</td>
											  		<td class="text-center">{{ $co->CMGSegmentName }}</td>
											  		<td class="text-center">{{ $co->GlobalControlPoint }}</td>
                            						<td class="text-center">{{ $co->GCPGeography }}</td>
													<td class="text-center">{{ $co->GlobalRelationshipManagerName }}</td>
											  	</tr>
											  	<?php }} else {?>
											  	<tr class="warning">
											  		<td colspan="10" class="bold">Tidak ada data yang tersedia!</td>
											  	</tr>
											  	<?php }?>
                      						</tbody>
											</table>
										</div>
										<!-- start pagination -->
										<div class="part-pagination part-pagination-customer" style="">
											<ul class="pagination pagination-blue margin-bottom-10">
                      						{{ $paginator->links() }}
											</ul>
										</div>
										<!-- end pagination -->
									</div>
								</div>
							</div>
						</div>
						<!-- end: PAGE CONTENT-->
					</div>
					<div class="subviews">
						<div class="subviews-container"></div>
					</div>
				</div>
				<!-- end: PAGE -->
			<!--</div>-->
			<!-- end: MAIN CONTAINER -->

		<script type="text/javascript" src="packages/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	<script type="text/javascript">
			$(document).ready(function() {
				var table =  $('#myTable').DataTable({
					"lengthMenu": [[5, 10], [5, 10]],
					paging: true,
        			scrollX: true,
        			//lengthChange : true,
        			searching: true,
        			ordering: true
				});
    			$('#CMGUnmaskedName').on('change', function () {
					table.columns(1).search( this.value ).draw();
					$('.dataTables_length').addClass('bs-select');
        		});
        		$('#ClientTier').on('change', function () {
					table.columns(2).search( this.value ).draw();
					$('.dataTables_length').addClass('bs-select');
        		});
				$('#CMGSegmentName').on('change', function () {
					table.columns(6).search( this.value ).draw();
					$('.dataTables_length').addClass('bs-select');
        		});
			});
	  	</script>

	<!-- end: BODY -->
