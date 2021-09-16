
<!DOCTYPE html>
<html lang="en">
<?php include '../head.php' ?>
<?php include("../koneksi.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <?php include '../isiatas.php' ?>
    <?php include '../laporan.php' ?>
    <?php include '../kebutuhan.php'?>
</body>
<Script> 
document.title ="panel8";
document.getElementById("panel").className = "nav-link active"; 
document.getElementById("panel8").className = "nav-link active";
document.getElementById("panid").text="panel8";
document.getElementById("laporan").innerHTML = "Laporan Panel 8";
var energiR = [],energis = [], volts = [], voltr = [], voltt = [], energit = [],dayatotal=[],energitotal=[],currentr=[],currents=[],currentt=[]; 
    var gaugeOptions = {
      chart: {
        type: 'solidgauge'
      },

      title: null,

      pane: {
        center: ['50%', '85%'],
        size: '100%',
        startAngle: -90,
        endAngle: 90,
        background: {
          backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
          innerRadius: '60%',
          outerRadius: '100%',
          shape: 'arc'
        }
      },

      exporting: {
        enabled: false
      },

      tooltip: {
        enabled: false
      },

      // the value axis
      yAxis: {
        stops: [
          [0.1, '#55BF3B'], // green
          [0.5, '#DDDF0D'], // yellow
          [0.9, '#DF5353'] // red
        ],
        lineWidth: 0,
        tickWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
          y: -70
        },
        labels: {
          y: 16
        }
      },

      plotOptions: {
        solidgauge: {
          dataLabels: {
            y: 5,
            borderWidth: 0,
            useHTML: true
          }
        }
      }
    };
    var configEnergiR = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:red;font-weight:bold";>Energi R</span>'
        }
      },
      credits: {
        enabled: false
      },
      series: [{
        name: 'Energi R',
        data: [50],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">KWh R</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' KWh R'
        }
      }]
    };
    var configEnergiS = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:orange;font-weight:bold";>Energi S</span>'
        }
      },

      credits: {
        enabled: false
      },

      series: [{
        name: 'Energi S',
        data: [1],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">' +
            'kWh S' +
            '</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' KWh S'
        }
      }]
    };
    var configDayaTotal = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:blue;font-weight:bold";>Daya Total</span>'
        }
      },

      credits: {
        enabled: false
      },

      series: [{
        name: 'Daya Total',
        data: [1],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">' +
            'Ptotal' +
            '</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: 'PTotal'
        }
      }]
    };
    //bar
    var configVoltageS = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:orange;font-weight:bold";>Voltage S</span>'
        }
      },

      credits: {
        enabled: false
      },

      series: [{
        name: 'Voltage S',
        data: [1],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">' +
            'Vs' +
            '</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' Vs'
        }
      }]
    };
    var configvoltr = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:red;font-weight:bold";>Voltage R</span>'
        }
      },

      credits: {
        enabled: false
      },

      series: [{
        name: 'Voltage R',
        data: [1],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">' +
            'Vr' +
            '</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' Vr'
        }
      }]
    };
    var configEnergiTotal = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:blue;font-weight:bold";>Energi Total</span>'
        }
      },

      credits: {
        enabled: false
      },

      series: [{
        name: 'Energi Total',
        data: [1],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">' +
            'Kwh Tot' +
            '</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' Kwh Tot'
        }
      }]
    };
    var configCurrentR = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:red;font-weight:bold";>Current R</span>'
        }
      },

      credits: {
        enabled: false
      },

      series: [{
        name: 'Current R',
        data: [1],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">' +
            'I R' +
            '</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' I R'
        }
      }]
    };
    var configCurrentS = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:orange;font-weight:bold";>Current S</span>'
        }
      },

      credits: {
        enabled: false
      },

      series: [{
        name: 'Current S',
        data: [1],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">' +
            'I S' +
            '</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' I S'
        }
      }]
    };
    var configCurrentT = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:green;font-weight:bold";>Current T</span>'
        }
      },

      credits: {
        enabled: false
      },

      series: [{
        name: 'Current T',
        data: [1],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">' +
            'I T' +
            '</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' I T'
        }
      }]
    };
    var configVoltageT = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:green;font-weight:bold";>Voltage T</span>'
        }
      },

      credits: {
        enabled: false
      },

      series: [{
        name: 'Voltage T',
        data: [1],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">' +
            'Vt' +
            '</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' Vt'
        }
      }]
    };
    //
    var configEnergiT = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: '<span style="color:green;font-weight:bold";>Energi T</span>'
        }
      },

      credits: {
        enabled: false
      },

      series: [{
        name: 'Energi T',
        data: [1],
        dataLabels: {
          format: '<div style="text-align:center">' +
            '<span style="font-size:20px">{y:.1f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">' +
            'KWh T' +
            '</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' KWh T'
        }
      }]
    };
energiR["panel8"] = Highcharts.chart("container-kr", Highcharts.merge(gaugeOptions, configEnergiR));
energis["panel8"] = Highcharts.chart("container-ks", Highcharts.merge(gaugeOptions, configEnergiS));
energit["panel8"] = Highcharts.chart("container-kt", Highcharts.merge(gaugeOptions, configEnergiT));
energitotal["panel8"] = Highcharts.chart("container-ktot", Highcharts.merge(gaugeOptions, configEnergiTotal));
volts["panel8"] = Highcharts.chart("container-vs", Highcharts.merge(gaugeOptions, configVoltageS));
voltr["panel8"] = Highcharts.chart("container-vr", Highcharts.merge(gaugeOptions, configvoltr));
voltt["panel8"] = Highcharts.chart("container-vt", Highcharts.merge(gaugeOptions, configVoltageT));
dayatotal["panel8"] = Highcharts.chart("container-ptot", Highcharts.merge(gaugeOptions, configDayaTotal));
currentr["panel8"] = Highcharts.chart("container-cr", Highcharts.merge(gaugeOptions, configCurrentR));
currents["panel8"] = Highcharts.chart("container-cs", Highcharts.merge(gaugeOptions, configCurrentS));
currentt["panel8"] = Highcharts.chart("container-ct", Highcharts.merge(gaugeOptions, configCurrentT));
//fungsi line
var elementnya = document.getElementById('pemakaian-chart');
var datanya = {
    labels: [],
    datasets: [
        {
            label: "Vr",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(255,0,0,0.4)",
            borderColor: "rgba(255,0,0,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(255,0,0,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(255,0,0,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [],
        },
        {
            label: "vs",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(255,255,0, o.4)",
            borderColor: "rgba(255,255,0, 1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(255,255,0, 1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(255,255,0, 1)",
            pointHoverBorderColor: "rgba(255,255,0, 1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [],
        },
        {
            label: "vt",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(0,255,0, o.4)",
            borderColor: "rgba(0,255,0, 1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(0,255,0, 1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(0,255,0, 1)",
            pointHoverBorderColor: "rgba(0,255,0, 1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [],
        }
    ]
};
//fungsi gambar
var option = {
	showLines: true
};
var myLineChart = Chart.Line(elementnya,{
	data:datanya,
  options:option
});
//data
const data= 'fun.php';
$(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		gauge();
		selesai();
	}, 200);
}
async function gauge(){
    if (myLineChart.data.labels.length==20) {
        myLineChart.data.labels=[];
        myLineChart.data.datasets[0].data=[];
        myLineChart.data.datasets[1].data=[];
        myLineChart.data.datasets[2].data=[];
    }
    const datbar = await fetch(data);
    const jadi = await datbar.json();
    var tg=jadi[0]['tanggal'];
    var a= tg.split(" ");
    var b=a[1];
    energiR["panel8"].series[0].points[0].update(parseFloat(jadi[0]['energir']));
    energis["panel8"].series[0].points[0].update(parseFloat(jadi[0]['energis']));
    energit["panel8"].series[0].points[0].update(parseFloat(jadi[0]['energit']));
    energitotal["panel8"].series[0].points[0].update(parseFloat(jadi[0]['energitotal']));
    dayatotal["panel8"].series[0].points[0].update(parseFloat(jadi[0]['dayatotal']));
    voltr["panel8"].series[0].points[0].update(parseFloat(jadi[0]['voltr']));
    volts["panel8"].series[0].points[0].update(parseFloat(jadi[0]['volts']));
    voltt["panel8"].series[0].points[0].update(parseFloat(jadi[0]['voltt']));
    currentr["panel8"].series[0].points[0].update(parseFloat(jadi[0]['currentr']));
    currents["panel8"].series[0].points[0].update(parseFloat(jadi[0]['currents']));
    currentt["panel8"].series[0].points[0].update(parseFloat(jadi[0]['currentt']));
    myLineChart.data.labels.push(b);
    myLineChart.data.datasets[0].data.push(jadi[0]['voltr']);
    myLineChart.data.datasets[1].data.push(jadi[0]['volts']);
    myLineChart.data.datasets[2].data.push(jadi[0]['voltt']);
    myLineChart.update();
}
</Script>
</html>