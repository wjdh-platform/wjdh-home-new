/**
 * Grid theme for Highcharts JS
 * @author Torstein Honsi
 */

Highcharts.theme = {
	colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
	chart: {
		backgroundColor: {
			linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
			stops: [
				[0, 'rgb(255, 255, 255)'],
				[1, 'rgb(240, 240, 255)']
			]
		},
		borderWidth: 2,
		plotBackgroundColor: 'rgba(255, 255, 255, .9)',
		plotShadow: true,
		plotBorderWidth: 1
	},
	title: {
		style: {
			color: '#000',
			font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
		}
	},
	subtitle: {
		style: {
			color: '#666666',
			font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
		}
	},
	xAxis: {
		gridLineWidth: 1,
		lineColor: '#000',
		tickColor: '#000',
		labels: {
			style: {
				color: '#000',
				font: '11px Trebuchet MS, Verdana, sans-serif'
			}
		},
		title: {
			style: {
				color: '#333',
				fontWeight: 'bold',
				fontSize: '12px',
				fontFamily: 'Trebuchet MS, Verdana, sans-serif'

			}
		}
	},
	yAxis: {
		minorTickInterval: 'auto',
		lineColor: '#000',
		lineWidth: 1,
		tickWidth: 1,
		tickColor: '#000',
		labels: {
			style: {
				color: '#000',
				font: '11px Trebuchet MS, Verdana, sans-serif'
			}
		},
		title: {
			style: {
				color: '#333',
				fontWeight: 'bold',
				fontSize: '12px',
				fontFamily: 'Trebuchet MS, Verdana, sans-serif'
			}
		}
	},
	legend: {
		itemStyle: {
			font: '9pt Trebuchet MS, Verdana, sans-serif',
			color: 'black'

		},
		itemHoverStyle: {
			color: '#039'
		},
		itemHiddenStyle: {
			color: 'gray'
		}
	},
	labels: {
		style: {
			color: '#99b'
		}
	},

	navigation: {
		buttonOptions: {
			theme: {
				stroke: '#CCCCCC'
			}
		}
	}
};

Highcharts.theme = {
	title: {
		style: {
			fontFamily: '"Open Sans",Calibri, Arial,"Microsoft JhengHei","PMingLiU", sans-serif',
			fontWeight: '600',
			fontSize:'16px'
		}
	},
	subtitle: {
		style: {
			fontFamily: '"Open Sans",Calibri, Arial,"Microsoft JhengHei","PMingLiU", sans-serif'
		}
	},
	labels:{
		style: {
			fontFamily: '"Open Sans",Calibri, Arial,"Microsoft JhengHei","PMingLiU", sans-serif',
			fontSize:'12px'
		}
	},
	xAxis: {
		labels: {
			style: {
				fontFamily: '"Open Sans",Calibri, Arial,"Microsoft JhengHei","PMingLiU", sans-serif'
			}
		},
		title: {
			style: {
				fontFamily: '"Open Sans",Calibri, Arial,"Microsoft JhengHei","PMingLiU", sans-serif'

			}
		}
	},
	yAxis: {
		labels: {
			style: {
				fontFamily: '"Open Sans",Calibri, Arial,"Microsoft JhengHei","PMingLiU", sans-serif'
			}
		},
		title: {
			style: {
				fontFamily: '"Open Sans",Calibri, Arial,"Microsoft JhengHei","PMingLiU", sans-serif'
			}
		}
	},
	legend: {
		itemStyle: {
			fontFamily: '"Open Sans",Calibri, Arial,"Microsoft JhengHei","PMingLiU", sans-serif',
			fontSize:'12px'
		}
	},
	credits: {
		enabled: false
	}
};


// Apply the theme
var highchartsOptions = Highcharts.setOptions(Highcharts.theme);
