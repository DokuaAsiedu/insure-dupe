// PAYG
var salesData = salesPoints.map((item, index, arr) => ({x: item[0], y: item[1] * 1550}));
// console.log(salesData)

var targetData = targetPoints.map((item, index, arr) => {
	// console.log(arr[arr.length - 1 - index][1]);
	// break;
	return {x: arr[arr.length - 1 - index][0], y: arr[arr.length - 1 - index][1] * 1550}
});
// console.log(targetData)

const totalAppl = totalPoints.map(item => {
	return {x: item[0], y: item[1]}
})

const pendingAppl = pendingPoints.map(item => {
	return {x: item[0], y: item[1]}
})

const approvalAppl = approvalPoints.map(item => {
	return {x: item[0], y: item[1]}
})

const declinedAppl = declinedPoints.map(item => {
	return {x: item[0], y: item[1]}
})

new Chart("payg-canvas", {
	type: "line",
	data: {
		datasets: [
			{
				label: "Sales",
				pointRadius: 0,
				borderColor: 'rgba(25, 25, 112, 1)',
				pointBackgroundColor: "rgba(25, 25, 112, 1)",
				data: salesData,
				tension: 0.5,
			},
			{
				label: "Target",
				pointRadius: 0,
				borderColor: 'rgba(0, 150, 255, 1)',
				pointBackgroundColor: "rgba(0, 150, 255, 1)",
				data: targetData,
				tension: 0.5,
				borderDash: [5, 5],
			}
		]
	},
	options: {
		responsive: true,
		scales: {
			x: {
				type: "time",
				time: {
					unit: "month"
				},
				reverse: true
			},
			y: {
				ticks: {
					callback: (value, index, ticks) => {
						let returned = (value / 1000) < 1 ? value : (value / 1000) + "K";
						return returned
					}
				},
				grid: {
					display: false
				}
			}
		},
		plugins: {
			tooltip: {
				enabled: false
			},
			legend: {
				display: true,
				labels: {
					usePointStyle: true,
					pointStyle: "circle",
					radius: 1
					// position: 'bottom'
				},
				align: "end",
				position: "top",
				font: {
					size: 8
				},
				fullSize: false,
				maxWidth: 5
			},
			// title: {
			// 	display: true,
			// 	text: "PAYG Analytics",
			// 	align: "start",
			// 	position: "top",
			// 	fullSize: false,
			// 	// padding: {
			// 	// 	top: 30
			// 	// },
			// 	font: {
			// 		size: 20
			// 	},
			// 	maxWidth: 5
				
			// }
		}
	}
});


// Sales Leads
new Chart("leads-canvas", {
	type: "doughnut",
	data: {
		labels: [
			'Broker',
			'Corporate Agent',
			'Agent'
		],
		datasets: [{
		label: 'Sales Leads',
		data: [33, 13, 54],
		backgroundColor: [
			'black',
			'rgba(169, 169, 169, 1)',
			'rgba(220, 220, 220, 1)'
		],
		hoverOffset: 4,
		cutout: "80%"
	}]
	},
	options: {
		responsive: true,
		// maintainAspectRatio: false,
		// aspectRatio: 1.5,
		plugins: {
			tooltip: {
				enabled: false
			},
			legend: {
				display: false,
				align: 'center',
				position: "right",
				labels: {
					usePointStyle: true,
					pointStyle: "circle",
					padding: 40
				}
			}
		}
	}
})


new Chart('total-appl', {
	type: "line",
	data: {
		datasets: [
			{
				borderColor: "#191970",
				data: totalAppl,
				tension: 0.5,
				pointRadius: 0,
				borderWidth: 0.45,
			}
		]
	},
	options: {
		responsive: true,
		// maintainAspectRatio: false,
		scales: {
			x: {
				type: "linear",
				display: false
			},
			y: {
				display: false
			}
		},
		plugins: {
			tooltip: {
				enabled: false
			},
			legend: {
				display: false
			}
		}
	}
})

new Chart('pending-appl', {
	type: "line",
	data: {
		datasets: [
			{
				borderColor: "#191970",
				data: pendingAppl,
				tension: 0.5,
				pointRadius: 0,
				borderWidth: 0.45,
			}
		]
	},
	options: {
		responsive: true,
		// maintainAspectRatio: false,
		scales: {
			x: {
				type: "linear",
				display: false
			},
			y: {
				display: false
			}
		},
		plugins: {
			tooltip: {
				enabled: false
			},
			legend: {
				display: false
			}
		}
	}
})

new Chart('approval-appl', {
	type: "line",
	data: {
		datasets: [
			{
				borderColor: "#191970",
				data: approvalAppl,
				tension: 0.5,
				pointRadius: 0,
				borderWidth: 0.45,
			}
		]
	},
	options: {
		responsive: true,
		// maintainAspectRatio: false,
		scales: {
			x: {
				type: "linear",
				display: false
			},
			y: {
				display: false
			}
		},
		plugins: {
			tooltip: {
				enabled: false
			},
			legend: {
				display: false
			}
		}
	}
})

new Chart('declined-appl', {
	type: "line",
	data: {
		datasets: [
			{
				borderColor: "#191970",
				data: declinedAppl,
				tension: 0.5,
				pointRadius: 0,
				borderWidth: 0.45,
			}
		]
	},
	options: {
		// maintainAspectRatio: false,
		// aspectRatio: 2/1,
		responsive: true,
		scales: {
			x: {
				type: "linear",
				display: false
			},
			y: {
				display: false
			}
		},
		plugins: {
			tooltip: {
				enabled: false
			},
			legend: {
				display: false
			}
		}
	}
})