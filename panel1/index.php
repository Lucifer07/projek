
<!DOCTYPE html>
<html lang="en">
<?php include '../head.php' ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <?php include '../isiatas.php' ?>
    <?php include '../laporan.php' ?>
    <?php include '../kebutuhan.php'?>
</body>
<Script> 
document.getElementById("panel").className = "nav-link active"; 
document.getElementById("panel1").className = "nav-link active";
document.getElementById("panid").text="panel1";
document.getElementById("laporandaya").innerHTML = "<strong> Laporan Panel 1</strong>";
document.getElementById("laporan").innerHTML = "Laporan Panel 1";
var energiR = [],energis = [], volts = [], voltr = [], voltt = [], energit = [],dayatotal=[],energitotal=[]; 
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
          text: 'Energi R'
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
          text: 'Energi S'
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
          text: 'Daya Total'
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
          text: 'Voltage S'
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
          text: 'Voltage R'
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
          text: 'Energi Total'
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
    var configVoltageT = {
      yAxis: {
        min: 0,
        max: 1000,
        title: {
          text: 'Voltage T'
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
          text: 'Energi T'
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
energiR["Panel1"] = Highcharts.chart("container-kr", Highcharts.merge(gaugeOptions, configEnergiR));
energis["Panel1"] = Highcharts.chart("container-ks", Highcharts.merge(gaugeOptions, configEnergiS));
energit["Panel1"] = Highcharts.chart("container-kt", Highcharts.merge(gaugeOptions, configEnergiT));
energitotal["Panel1"] = Highcharts.chart("container-ktot", Highcharts.merge(gaugeOptions, configEnergiTotal));
volts["Panel1"] = Highcharts.chart("container-vs", Highcharts.merge(gaugeOptions, configVoltageS));
voltr["Panel1"] = Highcharts.chart("container-vr", Highcharts.merge(gaugeOptions, configvoltr));
voltt["Panel1"] = Highcharts.chart("container-vt", Highcharts.merge(gaugeOptions, configVoltageT));
dayatotal["Panel1"] = Highcharts.chart("container-ptot", Highcharts.merge(gaugeOptions, configDayaTotal));
const data= 'fun.php';
$(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		getdata();
		selesai();
	}, 200);
}
async function getdata(){
    const datbar = await fetch(data);
    const jadi = await datbar.json();
    energiR["Panel1"].series[0].points[0].update(parseInt(jadi[0]['energir']));
    energis["Panel1"].series[0].points[0].update(parseInt(jadi[0]['energis']));
    energit["Panel1"].series[0].points[0].update(parseInt(jadi[0]['energit']));
    energitotal["Panel1"].series[0].points[0].update(parseInt(jadi[0]['energitotal']));
    dayatotal["Panel1"].series[0].points[0].update(parseInt(jadi[0]['dayatotal']));
    voltr["Panel1"].series[0].points[0].update(parseInt(jadi[0]['voltr']));
    volts["Panel1"].series[0].points[0].update(parseInt(jadi[0]['volts']));
    voltt["Panel1"].series[0].points[0].update(parseInt(jadi[0]['voltt']));
}
</Script>
</html>