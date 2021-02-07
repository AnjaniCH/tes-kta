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
											</div>
										</div>
									</div>
									<div class="panel-body">
                                        <div class="row">
							                <div class="col-md-12">
								                <div class="panel panel-white">
									                <div class="panel-heading border-light">
                                                        <div class="tab-pane" id="chartjs">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <section class="panel">
                                                                        <header class="panel-heading">
                                                                            ROE FY 14 vs 15
                                                                        </header>
                                                                        <div class="text-center">
                                                                            <canvas id="pie-chart" height="200px" width="300px" style="width: 300px; height: 200px;"></canvas>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <section class="panel">
                                                                        <header class="panel-heading">
                                                                            Revenue & RWA FY 14 vs 15
                                                                        </header>
                                                                        <div class="text-center">
                                                                            <canvas id="bar-chart" height="200px" width="300px" style="width: 300px; height: 200px;"></canvas>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <section class="panel">
                                                                        <header class="panel-heading">
                                                                            Total Limit EOP FY 14 vs 15
                                                                        </header>
                                                                        <div class="text-center">
                                                                            <canvas id="line-chart" height="200px" width="300px" style="width: 300px; height: 200px;"></canvas>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <section class="panel">
                                                                        <header class="panel-heading">
                                                                            Company Average Activity FY14 vs 15
                                                                        </header>
                                                                        <div class="text-center">
                                                                            <canvas id="bar-chart-horizontal" height="200px" width="300px" style="width: 300px; height: 200px;"></canvas>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
									                </div>
									                <div class="panel-body">
										                <div class="row">
											                <div class="col-sm-4 col-xs-4"></div>
                                                            <h2>ROE Summary Detail</h2>
                                                            <h3>{{ $company->CMGUnmaskedName }}</h3>
										                </div>
										                <div class="table-responsive up1">
											                <table class="table table-striped table-bordered" >
                                                                <thead>
											  	                    <tr>
                                                                        <th>ROE_FY14</th>
                                                                        <th>ROE_FY15</th>
                                                                        <th>REVENUE_FY14</th>
                                                                        <th>REVENUE_FY15</th>
                                                                        <th>RWAFY14</th>
                                                                        <th>RWAFY15</th>
                                                                        <th>TotalLimits_EOP_FY14</th>
                                                                        <th>TotalLimits_EOP_FY15</th>
                                                                        <th>Com_Avg_Act_FY14</th>
                                                                        <th>Com_Avg_Act_FY15</th>
											  	                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <form action="{{ url('simpan') }}" method="POST">
                                                                    {{ @csrf_field() }}
											  	                        <tr>
                                                                            <td><input type="text" class="form-control" name="ROE_FY14" id="ROE_FY14" value="{{ $company->ROE_FY14 }}" >
                                                                                <input type="hidden" class="form-control" name="CMGUnmaskedID" id="CMGUnmaskedID" value="{{ $company->CMGUnmaskedID }}" ></td>
                                                                            <td><input type="text" class="form-control" name="ROE_FY15" id="ROE_FY15" value="{{ $company->ROE_FY15 }}" ></td>
                                                                            <td><input type="text" class="form-control" name="REVENUE_FY14" id="REVENUE_FY14" value="{{ $company->REVENUE_FY14 }}"></td>
                                                                            <td><input type="text" class="form-control" name="REVENUE_FY15" id="REVENUE_FY15" value="{{ $company->REVENUE_FY15 }}"></td>
                                                                            <td><input type="text" class="form-control" name="RWAFY14" id="RWAFY14" value="{{ $company->RWAFY14 }}"></td>
                                                                            <td><input type="text" class="form-control" name="RWAFY15" id="RWAFY15" value="{{ $company->RWAFY15 }}"></td>
                                                                            <td><input type="text" class="form-control" name="TotalLimits_EOP_FY14" id="TotalLimits_EOP_FY14" value="{{ $company->TotalLimits_EOP_FY14 }}"></td>
                                                                            <td><input type="text" class="form-control" name="TotalLimits_EOP_FY15" id="TotalLimits_EOP_FY15" value="{{ $company->TotalLimits_EOP_FY15 }}"></td>
                                                                            <td><input type="text" class="form-control" name="Company_Avg_Activity_FY14" id="Company_Avg_Activity_FY14" value="{{ $company->Company_Avg_Activity_FY14 }}"></td>
                                                                            <td><input type="text" class="form-control" name="Company_Avg_Activity_FY15" id="Company_Avg_Activity_FY15" value="{{ $company->Company_Avg_Activity_FY15 }}"></td>
                                                                        </tr>
                                                                        <tr>
                                  	                                        <td colspan="9"></td>
                                  	                                        <td>
                                                                                <button type="submit" name="submit" value="Re-Submit">Re-Submit</button>
                                  	                                        </td>
                                                                        </tr>
                                                                    </form>
                                                                </tbody>
											                </table>
										                </div>
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
							</div>
						</div>
					</div>
				    <!-- end: PAGE CONTENT-->
				    <div class="subviews">
					    <div class="subviews-container"></div>
				    </div>
				</div>
				<!-- end: PAGE -->
			<!-- end: MAIN CONTAINER -->
            <script type="text/javascript" src="packages/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>         
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
            <script type="text/javascript">
	            var ROE_FY14=$("#ROE_FY14").val();
	            var ROE_FY15=$("#ROE_FY15").val();
	            var REVENUE_FY14=$("#REVENUE_FY14").val();
	            var REVENUE_FY15=$("#REVENUE_FY15").val();
	            var RWAFY14=$("#RWAFY14").val();
	            var RWAFY15=$("#RWAFY15").val();
	            var TotalLimits_EOP_FY14=$("#TotalLimits_EOP_FY14").val();
	            var TotalLimits_EOP_FY15=$("#TotalLimits_EOP_FY15").val();
	            var Company_Avg_Activity_FY14=$("#Company_Avg_Activity_FY14").val();
                var Company_Avg_Activity_FY15=$("#Company_Avg_Activity_FY15").val();
                var NPAT_AllocEq_FY14="{{ $company->NPAT_AllocEq_FY14 }}";
                var NPAT_AllocEq_FY15X="{{ $company->NPAT_AllocEq_FY15X }}";
                var Deposits_EOP_FY14="{{ $company->Deposits_EOP_FY14 }}";
                var Deposits_EOP_FY15x="{{ $company->Deposits_EOP_FY15x }}";
	
                var piechat = new Chart(document.getElementById("pie-chart").getContext('2d'), {
                    type: 'pie',
                    data: {
                        labels: ["ROE_FY14", "ROE_FY15"],
                        datasets: [{
                            label: "%",
                            backgroundColor: ["#006633", "#000000"],
                            data: [ROE_FY14.replace("%", ""),ROE_FY15.replace("%", "")],
                            responsive: true,
                            maintainAspectRatio: false
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                            text: ''
                        }
                    }
                });
                var barchart =  new Chart(document.getElementById("bar-chart"), {
                    type: 'bar',
                    data: {
                        labels: ["RWAFY14", "REVENUE_FY14", "RWAFY15", "REVENUE_FY15"],
                        datasets: [{
                            label: "",
                            backgroundColor: ["#3e95cd", "#3e95cd","#3e95cd","#3e95cd"],
                            data: [RWAFY14.replace(/,/g,""),REVENUE_FY14.replace(/,/g,""),RWAFY15.replace(/,/g,""),REVENUE_FY15.replace(/,/g,"")]
                        }]
                    },
                    options: {
                        legend: { display: false },
                        title: {
                            display: false,
                            text: ''
                        },
                        scales: {
                            xAxes: [{
                                ticks: {
                                    fontSize: 7
                                }
                            }]
                        }
                    }
                });
                var myLineChart = new Chart(document.getElementById("line-chart"), {
                    type: 'line',
                    data: {
                        labels: ["TotalLimits_EOP_FY14", "TotalLimits_EOP_FY15"],
                        datasets: [{
                            fill : false,
                            label: "",
                            backgroundColor: ["#3e95cd", "#3e95cd","#3e95cd","#3e95cd"],
                            data: [TotalLimits_EOP_FY14.replace(/,/g,""),TotalLimits_EOP_FY15.replace(/,/g,"")]
                        }]
                    },
                    options: {
                        legend: { display: false },
                        title: {
                            display: false,
                            text: ''
                        },
                        scales: {
                            xAxes: [{
                                ticks: {
                                    fontSize: 10
                                }
                            }]
                        }
                    }
                });
                var horizontal = new Chart(document.getElementById("bar-chart-horizontal"), {
                    type: 'horizontalBar',
                    data: {
                        labels: ["Avg Regulatory Capital", "NPAT Allocation", "TotalLimits EOP", "Deposits EOP"],
                        datasets: [{
                            backgroundColor: "#A0A0A0",
                            data: [Company_Avg_Activity_FY14.replace(/,/g,""),NPAT_AllocEq_FY14.replace(/,/g,""),TotalLimits_EOP_FY14.replace(/,/g,""),Deposits_EOP_FY14.replace(/,/g,"")]
                        }, {
                            backgroundColor: "#3e95cd",
                            data: [Company_Avg_Activity_FY15.replace(/,/g,""),NPAT_AllocEq_FY15X.replace(/,/g,""),TotalLimits_EOP_FY15.replace(/,/g,""),Deposits_EOP_FY15x.replace(/,/g,"")]
                        }
                    ]},
                    options: {
                        legend: { display: false },
                        title: {
                            display: true,
                            text: 'Predicted world population (millions) in 2050'
                        }
                    }
                });
                $("#ROE_FY14").keyup(function(e){ 
                    piechat.data.datasets[0].data = [$("#ROE_FY14").val().replace(/%/g,""),$("#ROE_FY15").val().replace(/%/g,"")];
    	            piechat.update();   
                });
                $("#ROE_FY15").keyup(function(e){ 
                    piechat.data.datasets[0].data = [$("#ROE_FY14").val().replace(/%/g,""),$("#ROE_FY15").val().replace(/%/g,"")];
    	            piechat.update(); 
                });
                $("#RWAFY14").keyup(function(e){ 
                    barchart.data.datasets[0].data = [$("#RWAFY14").val().replace(/,/g,""),$("#REVENUE_FY14").val().replace(/,/g,""),$("#RWAFY15").val().replace(/,/g,""),$("#REVENUE_FY15").val().replace(/,/g,"")];
    	            barchart.update();   
                });
                $("#REVENUE_FY14").keyup(function(e){ 
                    barchart.data.datasets[0].data = [$("#RWAFY14").val().replace(/,/g,""),$("#REVENUE_FY14").val().replace(/,/g,""),$("#RWAFY15").val().replace(/,/g,""),$("#REVENUE_FY15").val().replace(/,/g,"")];
    	            barchart.update(); 
                });
                $("#RWAFY15").keyup(function(e){ 
                    barchart.data.datasets[0].data = [$("#RWAFY14").val().replace(/,/g,""),$("#REVENUE_FY14").val().replace(/,/g,""),$("#RWAFY15").val().replace(/,/g,""),$("#REVENUE_FY15").val().replace(/,/g,"")];
    	            barchart.update();  
                });
                $("#REVENUE_FY15").keyup(function(e){ 
                    barchart.data.datasets[0].data = [$("#RWAFY14").val().replace(/,/g,""),$("#REVENUE_FY14").val().replace(/,/g,""),$("#RWAFY15").val().replace(/,/g,""),$("#REVENUE_FY15").val().replace(/,/g,"")];
    	            barchart.update();  
                });
                $("#TotalLimits_EOP_FY14").keyup(function(e){ 
    	            horizontal.data.datasets[0].data = [$("#Company_Avg_Activity_FY14").val().replace(/,/g,""),NPAT_AllocEq_FY14.replace(/,/g,""),$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),Deposits_EOP_FY14.replace(/,/g,"")];
                    horizontal.data.datasets[1].data = [$("#Company_Avg_Activity_FY15").val().replace(/,/g,""),NPAT_AllocEq_FY15X.replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,""),Deposits_EOP_FY15x.replace(/,/g,"")];
    	            horizontal.update();
                    myLineChart.data.datasets[0].data = [$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,"")];
    	            myLineChart.update(); 
                });
                $("#TotalLimits_EOP_FY15").keyup(function(e){ 
    	            horizontal.data.datasets[0].data = [$("#Company_Avg_Activity_FY14").val().replace(/,/g,""),NPAT_AllocEq_FY14.replace(/,/g,""),$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),Deposits_EOP_FY14.replace(/,/g,"")];
                    horizontal.data.datasets[1].data = [$("#Company_Avg_Activity_FY15").val().replace(/,/g,""),NPAT_AllocEq_FY15X.replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,""),Deposits_EOP_FY15x.replace(/,/g,"")];
    	            horizontal.update();
                    myLineChart.data.datasets[0].data = [$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,"")];
    	            myLineChart.update();   
                });
                $("#Company_Avg_Activity_FY14").keyup(function(e){ 
                    horizontal.data.datasets[0].data = [$("#Company_Avg_Activity_FY14").val().replace(/,/g,""),NPAT_AllocEq_FY14.replace(/,/g,""),$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),Deposits_EOP_FY14.replace(/,/g,"")];
                    horizontal.data.datasets[1].data = [$("#Company_Avg_Activity_FY15").val().replace(/,/g,""),NPAT_AllocEq_FY15X.replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,""),Deposits_EOP_FY15x.replace(/,/g,"")];
    	            horizontal.update(); 
                });
                $("#Company_Avg_Activity_FY15").keyup(function(e){ 
                    horizontal.data.datasets[0].data = [$("#Company_Avg_Activity_FY14").val().replace(/,/g,""),NPAT_AllocEq_FY14.replace(/,/g,""),$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),Deposits_EOP_FY14.replace(/,/g,"")];
                    horizontal.data.datasets[1].data = [$("#Company_Avg_Activity_FY15").val().replace(/,/g,""),NPAT_AllocEq_FY15X.replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,""),Deposits_EOP_FY15x.replace(/,/g,"")];
    	            horizontal.update();
                });
            </script>

	<!-- end: BODY -->
