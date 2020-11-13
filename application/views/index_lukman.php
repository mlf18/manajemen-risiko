
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | SHARED ON THEMELOCK.COM</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/theme-custom.css">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
		<!-- Head Libs -->
		<script src="<?php echo base_url();?>assets/vendor/modernizr/modernizr.js"></script>

        <style>
            .bg-disabled{
                background-color:#d2d2d4;
            }
			.bg-secondary {
				background: #828181;
				color: white;
			}
        </style>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="http://inspektorat.menpan.go.id/isma/main.php" class="logo">
						<img src="<?php echo base_url();?>assets/images/logo_isma.ico" height="35" alt="ISMA" /><span style="display:inline-block; font-size:25px; color:black">INSPEKTORAT SISTEM MANAJEMEN AUDIT</span>
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<span class="separator"></span>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo base_url();?>assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="<?php echo base_url();?>assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<?php include "menu.php";?>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<!-- start: page -->
					<?php include $content;?>
					<!-- end: page -->
				</section>
			</div>

			<!-- <aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="<?php echo base_url();?>assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="<?php echo base_url();?>assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="<?php echo base_url();?>assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="<?php echo base_url();?>assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside> -->
			
		</section>

		<!-- Vendor -->
		<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url();?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/raphael/raphael.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/morris/morris.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/gauge/gauge.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url();?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url();?>assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url();?>assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="<?php echo base_url();?>assets/javascripts/dashboard/examples.dashboard.js"></script>
        <script src="<?php echo base_url();?>assets/javascripts/ui-elements/examples.modals.js"></script>
		<script>
			$("button.btn-danger[type='submit']").click(function(){
				return confirm("Apakah anda yakin ?");
			})
		</script>
		<?php
		if(function_exists("custom_footer")){
			custom_footer();
		}
		?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.min.js"></script>
		<script>
			var randomScalingFactor = function() {
				return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
			};
			var randomColor = function(opacity) {
				return 'rgba(' + Math.round(Math.random() * 255) + ',' + Math.round(Math.random() * 255) + ',' + Math.round(Math.random() * 255) + ',' + (opacity || '.3') + ')';
			};
			function setChart(dataI){
			// console.log(dataI);
			var data = {
			datasets: dataI
			};
			data.datasets.forEach(function(dataset) {
			// dataset.borderColor = randomColor(0.4);
			// dataset.backgroundColor = randomColor(0.1);
			// dataset.pointBorderColor = randomColor(0.7);
			// dataset.pointBackgroundColor = randomColor(0.5);
			dataset.pointRadius= 10;
			dataset.pointHoverRadius= 10;
			dataset.pointBorderWidth = 1;
			});

			var ctx = document.getElementById("myChart").getContext("2d");
			window.myScatter = new Chart(ctx, {
				type: 'scatter',
			data: data,
			options: {
				scales: {
				xAxes: [{
					position: 'bottom',
					gridLines: {
					
					},
					scaleLabel: {
					display: true,
					labelString: 'level dampak'
					},
					ticks: {
						min: 0,
						max: 5,
						stepSize:1
					}
				}],
				yAxes: [{
					position: 'left',
					gridLines: {
					
					},
					scaleLabel: {
					display: true,
					labelString: 'level kemungkinan'
					},
					ticks: {
						min: 0,
						max: 5,
						stepSize:1
					}
				}]
				},
				tooltips: {
						callbacks: {
							label: function(tooltipItem, data) {
								var label = data.datasets[tooltipItem.datasetIndex].label || '';
								var x = tooltipItem.xLabel+0.5;
								var y = tooltipItem.yLabel+0.5;
								if (label) {
									label += ': ';
								}
								label += "("+x+","+y+")";
								return label;
							}
						}
					},
				annotation: {
				drawTime: "afterDraw",
				events: ['dblclick'],
				annotations: [
					{
						id: 'low-i',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 0,
						xMax: 4,
						yMin: 0,
						yMax: 1,
						backgroundColor: 'rgba(112, 112, 107, 0.3)',
						borderColor: 'rgba(112, 112, 107, 0.3)',
						borderWidth: 1
					},
					{
						id: 'low-ii',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 0,
						xMax: 2,
						yMin: 1,
						yMax: 2,
						backgroundColor: 'rgba(112, 112, 107, 0.3)',
						borderColor: 'rgba(112, 112, 107, 0.3)',
						borderWidth: 1
					},
					{
						id: 'low-iii',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 0,
						xMax: 1,
						yMin: 2,
						yMax: 4,
						backgroundColor: 'rgba(112, 112, 107, 0.3)',
						borderColor: 'rgba(112, 112, 107, 0.3)',
						borderWidth: 1
					}
					,
					{
						id: 'mid-i',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 4,
						xMax: 5,
						yMin: 0,
						yMax: 2,
						backgroundColor: 'rgba(245, 242, 66, 0.3)',
						borderColor: 'rgba(245, 242, 66, 0.3)',
						borderWidth: 1
					}
					,
					{
						id: 'mid-ii',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 2,
						xMax: 4,
						yMin: 1,
						yMax: 2,
						backgroundColor: 'rgba(245, 242, 66, 0.3)',
						borderColor: 'rgba(245, 242, 66, 0.3)',
						borderWidth: 1
					}	
					,
					{
						id: 'mid-iii',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 1,
						xMax: 4,
						yMin: 2,
						yMax: 3,
						backgroundColor: 'rgba(245, 242, 66, 0.3)',
						borderColor: 'rgba(245, 242, 66, 0.3)',
						borderWidth: 1
					}
					,
					{
						id: 'mid-iv',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 1,
						xMax: 3,
						yMin: 3,
						yMax: 4,
						backgroundColor: 'rgba(245, 242, 66, 0.3)',
						borderColor: 'rgba(245, 242, 66, 0.3)',
						borderWidth: 1
					},	
					{
						id: 'mid-v',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 0,
						xMax: 2,
						yMin: 4,
						yMax: 5,
						backgroundColor: 'rgba(245, 242, 66, 0.3)',
						borderColor: 'rgba(245, 242, 66, 0.3)',
						borderWidth: 1
					},
					{
						id: 'high-i',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 4,
						xMax: 5,
						yMin: 2,
						yMax: 3,
						backgroundColor: 'rgba(255, 0, 0, 0.3)',
						borderColor: 'rgba(255, 0, 0, 0.3)',
						borderWidth: 1
					}
					,
					{
						id: 'high-ii',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 3,
						xMax: 5,
						yMin: 3,
						yMax: 4,
						backgroundColor: 'rgba(255, 0, 0, 0.3)',
						borderColor: 'rgba(255, 0, 0, 0.3)',
						borderWidth: 1
					}	
					,
					{
						id: 'high-iii',
						type: 'box',
						xScaleID: 'x-axis-1',
						yScaleID: 'y-axis-1',
						xMin: 2,
						xMax: 5,
						yMin: 4,
						yMax: 5,
						backgroundColor: 'rgba(255, 0, 0, 0.3)',
						borderColor: 'rgba(255, 0, 0, 0.3)',
						borderWidth: 1
					}					
					]
				}
			}
			});	
			}
			var risiko;
			$(document).ready(function(){
				var id_mr = $("input[name=id_mr]").val();
				console.log(id_mr);
				if(id_mr){
				$.ajax({
					type: "POST",
					url: 'http://localhost/manajemen-risiko/index.php/manajemen_risiko/getrisiko/'+id_mr, // target element(s) to be updated with server response 
					dataType:'json',
					success : function(responses){ 
						console.log(responses);
						var input= [];
						var i =0;
						var lanjut;
						for(let response of responses){
							ld=response.level_dampak;
							lk=response.level_kemungkinan;
							lanjut = true;
							if (response.level_kemungkinan == null){
								lanjut=false;
							}
							if (response.level_dampak == null){
								lanjut=false;
							}
							if(lanjut){
								var color = "rgba(255, 0, 0, 0.5)";
								if(lk*ld <= 4){
									color = "rgba(112, 112, 107, 0.5)";
								}else if(lk*ld >4 && lk*ld <=12){
									color = "rgba(235, 222, 52, 0.8)";
								}
								var obj = {
									label : response.kejadian,
									data : [{
										x:ld-0.5,
										y:lk-0.5
									}],
									borderColor : color,
									backgroundColor : color,
									pointBorderColor : color,
									pointBackgroundColor : color
								};
								input[i]=obj;
								i=i+1;
							}
						}
						setChart(input);
					}
				})};
			})
			function toggleKegiatan(event,id) {
				var x = document.getElementById(id);
				// var icon = event.target.querySelector("i");
				// console.log(event);
				// if(icon.classList.contains("fa-plus")){
					
				// 	console.log(icon.classList);
				// }
				if (x.style.display === "none") {
					x.style.display = "";
				} else {
					x.style.display = "none";
				}
			}
			function toggleRisiko(id) {
				var x = document.getElementById(id);
				var b = document.getElementById("bTogKegiatan");
				if (x.style.display === "none") {
					x.style.display = "";
				} else {
					x.style.display = "none";
				}
			}
			function tmbhIndikator(id){
				$("#"+id).append('<input type="text" name="indikator_organisasi[]" class="form-control" placeholder="Kegiatan" pattern=".{1,254}">');
			}
		</script>
	</body>
</html>