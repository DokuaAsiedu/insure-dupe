<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dashboard</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.00">
		<link rel="stylesheet" href="./styles/nav-styles.css">
		<link rel="stylesheet" href="./styles/header-styles.css">
		<link rel="stylesheet" href="./styles/dashboard-styles.css">
		<!-- <link rel="stylesheet" href="./styles/index-styles.css"> -->
		<link rel="stylesheet" href="./styles/common-styles.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.js" integrity="sha512-6HrPqAvK+lZElIZ4mZ64fyxIBTsaX5zAFZg2V/2WT+iKPrFzTzvx6QAsLW2OaLwobhMYBog/+bvmIEEGXi0p1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
	</head>
	<body>
		<div class="cont">
			<?php include "./components/header.php" ?>
			<main class="main-area">
				<?php include "./components/nav-panel.php" ?>
				<div id="dashboard-area">
					<div id="dash" class="flex flex-row justify-start align-center">
						<p id="dash-text">Dashboard</p>
						<!-- <div class="flex flex-row justify-end"> -->
							<button class="shift-end">1 April 2023 - 30 June 2023</button>
							<button>Settings</button>
							<button class="black-bg white-font">Export</button>
						<!-- </div> -->
						
					</div>
					<div id="graph-area">
						<div id="payg-graph" class="dash-border-style">
							<h3 id="analytics-title">PAYG Analytics</h3>
							<canvas id="payg-canvas" width="400" height="200">
							</canvas>
						</div>
						<div id="sale-leads" class="dash-border-style">
							<div class="flex flex-row justify-between">
								<h3>Sales By Leads</h3>
								<span></span>
							</div>
							<!-- <div class="leads-canvas-cont"> -->
								<canvas id="leads-canvas" width="200" height="200"></canvas>
								<ul class="legend">
									<li class="flex flex-row align-start justify-start">
										<div class="legend-point black-bg"></div>
										<div class="flex flex-column align-start stats-cont">
											<p class="gray-font agent">Broker</p>
											<p class="pie-percent">33%</p>
										</div>
									</li>
									<li class="flex flex-row align-start justify-start">
										<div class="legend-point pie-dark-gray"></div>
										<div class="flex flex-column justify-between align-start stats-cont">
											<p class="gray-font agent">Corporate Agent</p>
											<p class="pie-percent">13%</p>
										</div>
									</li>
									<li class="flex flex-row align-start justify-start">
										<div class="legend-point pie-light-gray"></div>
										<div class="flex flex-column justify-between align-start stats-cont">
											<p class="gray-font agent">Agent</p>
											<p class="pie-percent">54%</p>
										</div>
									</li>
								</ul>
								
								<div id="leads-summary">
									<p id="conv-rate" class="bold">9.87%</p>
									<p id="conv-par" class="gray-font">Conversion Rate</p>
									<p id="percent-change" class="bold"><span id="inc-icon" class="rotate-45">&#11198;</span>+18%</p>
								</div>
							<!-- </div> -->
						</div>
						<div id="payg-totals">
							<div class="totals-card flex flex-column justify-between align-center brownish-bg">
								<p class="bold">PAYG Sales</p>
								<div class="flex flex-row justify-start align-center">
									<!-- <div class="circle"></div> -->
									<svg height="30" width="30">
										<circle cx="15" cy="15" r="10" fill="white" />
									</svg>
									<p><span class="cedi-value">456K</span><span class="cedi-tag">GHS</span></p>
								</div>
							</div>
							<div class="totals-card flex flex-column justify-between blueish-bg">
								<p class="bold">Active Policy holders</p>
								<div class="flex flex-row justify-start align-center">
									<!-- <div class="circle"></div> -->
									<svg height="30" width="30">
										<circle cx="15" cy="15" r="10" fill="white" />
									</svg>
									<p><span class="cedi-value">326</span></p>
								</div>
							</div>
							<div class="totals-card flex flex-column justify-between orangeish-bg">
								<p class="bold">Lorem Ipsum</p>
								<div class="flex flex-row justify-start align-center">
									<!-- <div class="circle"></div> -->
									<svg height="30" width="30">
										<circle cx="15" cy="15" r="10" fill="white" />
									</svg>
									<p><span class="cedi-value">326</span></p>
								</div>
							</div>
						</div>
						<div id="intermediary" class="dash-border-style bold">
							<h3>Top Intermediary</h3>
							<p class="flex flex-row justify-between gray-font inter-bottom-border">
								<span>Name</span>
								<span>No. of Customers</span>
							</p>
							<ol>
								<li>
									<p class="flex flex-row justify-between">
										<span>Peter Ayensu</span>
										<span>104</span>
									</p>
									<p class="flex flex-row justify-between gray-font agent-det">
										<span>Corporate Agent</span>
										<span>GHS 234,567,980.00</span>
									</p>
								</li>
								<li>
									<p class="flex flex-row justify-between">
										<span>Peter Ayensu</span>
										<span>104</span>
									</p>
									<p class="flex flex-row justify-between gray-font agent-det">
										<span>Corporate Agent</span>
										<span>GHS 234,567,980.00</span>
									</p>
								</li>
								<li>
									<p class="flex flex-row justify-between">
										<span>Peter Ayensu</span>
										<span>104</span>
									</p>
									<p class="flex flex-row justify-between gray-font agent-det">
										<span>Corporate Agent</span>
										<span>GHS 234,567,980.00</span>
									</p>
								</li>
								<li>
									<p class="flex flex-row justify-between">
										<span>Peter Ayensu</span>
										<span>104</span>
									</p>
									<p class="flex flex-row justify-between gray-font agent-det">
										<span>Corporate Agent</span>
										<span>GHS 234,567,980.00</span>
									</p>
								</li>
								<li>
									<p class="flex flex-row justify-between">
										<span>Peter Ayensu</span>
										<span>104</span>
									</p>
									<p class="flex flex-row justify-between gray-font agent-det">
										<span>Corporate Agent</span>
										<span>GHS 234,567,980.00</span>
									</p>
								</li>
							</ol>
						</div>
						<div id="sales-funnel" class="dash-border-style flex flex-column justify-start align-center">
							<h3 class="align-self-start">Sales Funnel</h3>
							<div id="funnel-card-cont">
								<div class="funnel-card flex flex-column align-stretch">
									<p class="funnel-desc">Total Applications</p>
									<p class="funnel-number">434</p>
									<!-- <div class="canvas-cont"> -->
										<canvas id="total-appl" class="funnel-canvas"></canvas>
									<!-- </div> -->
								</div>
								<div class="funnel-card flex flex-column align-stretch">
									<p class="funnel-desc">Pending Approvals</p>
									<p class="funnel-number">326</p>
									<!-- <div class="canvas-cont"> -->
										<canvas id="pending-appl" class="funnel-canvas"></canvas>
									<!-- </div> -->
								</div>
								<div class="funnel-card flex flex-column align-stretch">
									<p class="funnel-desc">Approval Applications</p>
									<p class="funnel-number">200</p>
									<!-- <div class="canvas-cont"> -->
										<canvas id="approval-appl" class="funnel-canvas"></canvas>
									<!-- </div> -->
								</div>
								<div class="funnel-card flex flex-column align-stretch">
									<p class="funnel-desc">Declined Applications</p>
									<p class="funnel-number">13</p>
									<!-- <div class="canvas-cont"> -->
										<canvas id="declined-appl" class="funnel-canvas"></canvas>
									<!-- </div> -->
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</main>
		</div>
		<script src="./scripts/coordinates.js"></script>
		<script src="./scripts/chart-script.js"></script>
	</body>
	
</html>