
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
document.title ="Dashboard";
document.getElementById("tom1").disabled = true;
document.getElementById("tom2").disabled = true;
document.getElementById("panid").text="";
document.getElementById("laporan").innerHTML = "Laporan Rata-Rata Panel";
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
energiR["dashboard"] = Highcharts.chart("container-kr", Highcharts.merge(gaugeOptions, configEnergiR));
energis["dashboard"] = Highcharts.chart("container-ks", Highcharts.merge(gaugeOptions, configEnergiS));
energit["dashboard"] = Highcharts.chart("container-kt", Highcharts.merge(gaugeOptions, configEnergiT));
energitotal["dashboard"] = Highcharts.chart("container-ktot", Highcharts.merge(gaugeOptions, configEnergiTotal));
volts["dashboard"] = Highcharts.chart("container-vs", Highcharts.merge(gaugeOptions, configVoltageS));
voltr["dashboard"] = Highcharts.chart("container-vr", Highcharts.merge(gaugeOptions, configvoltr));
voltt["dashboard"] = Highcharts.chart("container-vt", Highcharts.merge(gaugeOptions, configVoltageT));
dayatotal["dashboard"] = Highcharts.chart("container-ptot", Highcharts.merge(gaugeOptions, configDayaTotal));
currentr["dashboard"] = Highcharts.chart("container-cr", Highcharts.merge(gaugeOptions, configCurrentR));
currents["dashboard"] = Highcharts.chart("container-cs", Highcharts.merge(gaugeOptions, configCurrentS));
currentt["dashboard"] = Highcharts.chart("container-ct", Highcharts.merge(gaugeOptions, configCurrentT));
//fungsi line
var elementnya = document.getElementById('pemakaian-chart');
var datanya = {
    labels: [],
    datasets: [
        {
            label: "V r",
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
            label: "V s",
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
            label: "V t",
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
        }/*,
        {
            label: "V Panel4",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(255,128,0, o.4)",
            borderColor: "rgba(255,128,0, 1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(255,128,0, 1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(255,128,0, 1)",
            pointHoverBorderColor: "rgba(255,128,0, 1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [],
        },
        {
            label: "V Panel5",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(102,255,255, o.4)",
            borderColor: "rgba(102,255,255, 1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(102,255,255, 1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(102,255,255, 1)",
            pointHoverBorderColor: "rgba(102,255,255, 1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [],
        },
        {
            label: "V Panel6",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(0,51,102, o.4)",
            borderColor: "rgba(0,51,102, 1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(0,51,102, 1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(0,51,102, 1)",
            pointHoverBorderColor: "rgba(0,51,102, 1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [],
        },
        {
            label: "V Panel7",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(178,102,255, o.4)",
            borderColor: "rgba(178,102,255, 1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(178,102,255, 1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(178,102,255, 1)",
            pointHoverBorderColor: "rgba(178,102,255, 1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [],
        },
        {
            label: "V Panel8",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(255,51,255, o.4)",
            borderColor: "rgba(255,51,255, 1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(255,51,255, 1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(255,51,255, 1)",
            pointHoverBorderColor: "rgba(255,51,255, 1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [],
        },
        {
            label: "V Panel9",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(32,32,32, o.4)",
            borderColor: "rgba(32,32,32, 1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(32,32,32, 1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(32,32,32, 1)",
            pointHoverBorderColor: "rgba(32,32,32, 1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [],
        }
        */
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
<?php for ($i=1; $i <10 ; $i++) { 
  echo "const data$i= '../panel$i/fun.php';";
}?>

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
        myLineChart.data.datasets[3].data=[];
        myLineChart.data.datasets[4].data=[];
        myLineChart.data.datasets[5].data=[];
        myLineChart.data.datasets[6].data=[];
        myLineChart.data.datasets[7].data=[];
        myLineChart.data.datasets[8].data=[];
    }
    let Genergir=[];
    let Genergis=[];
    let Genergit=[];
    let Genergitotal=[];
    let Gdayatotal=[];
    let Gvoltr=[];
    let Gvolts=[];
    let Gvoltt=[];
    let Gcurrentr=[];
    let Gcurrents=[];
    let Gcurrentt=[];
    var Genergirt=0;
    var Genergist=0;
    var Genergitt=0;
    var Genergitotalt=0;
    var Gdayatotalt=0;
    var Gvoltrt=0;
    var Gvoltst=0;
    var Gvolttt=0;
    var Gcurrentrt=0;
    var Gcurrentst=0;
    var Gcurrenttt=0;
    <?php
    for ($z=1; $z <10 ; $z++) { 
    echo "const datbar$z = await fetch(data$z);";
    echo "const jadi$z = await datbar$z.json();";
    echo "Genergir.push(parseFloat(jadi$z[0]['energir']));";
    echo "Genergis.push(parseFloat(jadi$z[0]['energis']));";
    echo "Genergit.push(parseFloat(jadi$z[0]['energit']));";
    echo "Genergitotal.push(parseFloat(jadi$z[0]['energitotal']));";
    echo "Gdayatotal.push(parseFloat(jadi$z[0]['dayatotal']));";
    echo "Gvoltr.push(parseFloat(jadi$z[0]['voltr']));";
    echo "Gvolts.push(parseFloat(jadi$z[0]['volts']));";
    echo "Gvoltt.push(parseFloat(jadi$z[0]['voltt']));";
    echo "Gcurrentr.push(parseFloat(jadi$z[0]['currentr']));";
    echo "Gcurrents.push(parseFloat(jadi$z[0]['currents']));";
    echo "Gcurrentt.push(parseFloat(jadi$z[0]['currentt']));";
    }
    ?>
    for (let index = 0; index < Genergir.length; index++) {
      Genergirt += Genergir[index];
    }
    for (let index = 0; index < Genergis.length; index++) {
      Genergist += Genergis[index];
    }
    for (let index = 0; index < Genergit.length; index++) {
      Genergitt += Genergit[index];
    }
    for (let index = 0; index < Genergitotal.length; index++) {
      Genergitotalt += Genergitotal[index];
    }
    for (let index = 0; index < Gdayatotal.length; index++) {
      Gdayatotalt += Gdayatotal[index];
    }
    for (let index = 0; index < Gvoltr.length; index++) {
      Gvoltrt += Gvoltr[index];
    }
    for (let index = 0; index < Gvolts.length; index++) {
      Gvoltst += Gvolts[index];
    }
    for (let index = 0; index < Gvoltt.length; index++) {
      Gvolttt += Gvoltt[index];
    }
    for (let index = 0; index < Gcurrentr.length; index++) {
      Gcurrentrt += Gcurrentr[index];
    }
    for (let index = 0; index < Gcurrents.length; index++) {
      Gcurrentst += Gcurrents[index];
    }
    for (let index = 0; index < Gcurrentt.length; index++) {
      Gcurrenttt += Gcurrentt[index];
    }
    //gauge
    energiR["dashboard"].series[0].points[0].update(parseFloat(Genergirt/9);
    energis["dashboard"].series[0].points[0].update(parseFloat(Genergist/9);
    energit["dashboard"].series[0].points[0].update(parseFloat(Genergitt/9);
    energitotal["dashboard"].series[0].points[0].update(parseFloat(Genergitotalt/9);
    dayatotal["dashboard"].series[0].points[0].update(parseFloat(Gdayatotalt/9);
    voltr["dashboard"].series[0].points[0].update(parseFloat(Gvoltrt/9);
    volts["dashboard"].series[0].points[0].update(parseFloat(Gvoltst/9);
    voltt["dashboard"].series[0].points[0].update(parseFloat(Gvolttt/9);
    currentr["dashboard"].series[0].points[0].update(parseFloat(Gcurrentrt/9);
    currents["dashboard"].series[0].points[0].update(parseFloat(Gcurrentst/9);
    currentt["dashboard"].series[0].points[0].update(parseFloat(Gcurrenttt/9);
    //line
    myLineChart.data.labels.push(<?=date('H:i:s')?>);
    myLineChart.data.datasets[0].data.push(Gvoltrt);
    myLineChart.data.datasets[1].data.push(Gvoltst);
    myLineChart.data.datasets[2].data.push(Gvolttt);
    myLineChart.update();
}
</Script>
</html>