
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
document.title ="Dash";
document.getElementById("tom1").disabled = true;
document.getElementById("tom2").disabled = true;
document.getElementById("panid").text="";
document.getElementById("laporan").innerHTML = "Laporan Panel 1";
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
energiR["Dash"] = Highcharts.chart("container-kr", Highcharts.merge(gaugeOptions, configEnergiR));
energis["Dash"] = Highcharts.chart("container-ks", Highcharts.merge(gaugeOptions, configEnergiS));
energit["Dash"] = Highcharts.chart("container-kt", Highcharts.merge(gaugeOptions, configEnergiT));
energitotal["Dash"] = Highcharts.chart("container-ktot", Highcharts.merge(gaugeOptions, configEnergiTotal));
volts["Dash"] = Highcharts.chart("container-vs", Highcharts.merge(gaugeOptions, configVoltageS));
voltr["Dash"] = Highcharts.chart("container-vr", Highcharts.merge(gaugeOptions, configvoltr));
voltt["Dash"] = Highcharts.chart("container-vt", Highcharts.merge(gaugeOptions, configVoltageT));
dayatotal["Dash"] = Highcharts.chart("container-ptot", Highcharts.merge(gaugeOptions, configDayaTotal));
currentr["Dash"] = Highcharts.chart("container-cr", Highcharts.merge(gaugeOptions, configCurrentR));
currents["Dash"] = Highcharts.chart("container-cs", Highcharts.merge(gaugeOptions, configCurrentS));
currentt["Dash"] = Highcharts.chart("container-ct", Highcharts.merge(gaugeOptions, configCurrentT));
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
const link= '../panel1/fun.php';
const link1='../panel2/fun.php';
const link2='../panel3/fun.php';
const link3='../panel4/fun.php';
const link4='../panel2/fun.php';
const link5='../panel5/fun.php';
const link6='../panel6/fun.php';
const link7='../panel7/fun.php';
const link8='../panel8/fun.php';
const link9='../panel9/fun.php';
let dataenergir=[0,0];
let dataenergis=[0,0];
let dataenergit=[0,0];
let dataenergitotal=[0,0];
let datavoltr=[0,0];
let datavolts=[0,0];
let datavoltt=[0,0];
let datacurrentr=[0,0];
let datacurrents=[0,0];
let datacurrentt=[0,0];
let datadayatotal=[0,0];
var henergir=0;
var henergis=0;
var henergit=0;
var hvoltr=0;
var hvolts=0;
var hvoltt=0;
var hcurrentr=0;
var hcurrents=0;
var hcurrentt=0;
var henergitotal=0;
var hdayatotal=0;
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
    //p1
    const datbar = await fetch(link);
    const jadi = await datbar.json();
    dataenergir[0]=parseFloat(jadi[0]['energir']);
    dataenergis[0]=parseFloat(jadi[0]['energis']);
    dataenergit[0]=parseFloat(jadi[0]['energit']);
    datavoltr[0]=parseFloat(jadi[0]['voltr']);
    datavolts[0]=parseFloat(jadi[0]['volts']);
    datavoltt[0]=parseFloat(jadi[0]['voltt']);
    datacurrentr[0]=parseFloat(jadi[0]['currentr']);
    datacurrents[0]=parseFloat(jadi[0]['currents']);
    datacurrentt[0]=parseFloat(jadi[0]['currentt']);
    dataenergitotal[0]=parseFloat(jadi[0]['energitotal']);
    datadayatotal[0]=parseFloat(jadi[0]['dayatotal']);
    //p2
    const datbar1 = await fetch(link1);
    const jadi1 = await datbar1.json();
    dataenergir[1]=parseFloat(jadi1[0]['energir']);
    dataenergis[1]=parseFloat(jadi1[0]['energis']);
    dataenergit[1]=parseFloat(jadi1[0]['energit']);
    datavoltr[1]=parseFloat(jadi1[0]['voltr']);
    datavolts[1]=parseFloat(jadi1[0]['volts']);
    datavoltt[1]=parseFloat(jadi1[0]['voltt']);
    datacurrentr[1]=parseFloat(jadi1[0]['currentr']);
    datacurrents[1]=parseFloat(jadi1[0]['currents']);
    datacurrentt[1]=parseFloat(jadi1[0]['currentt']);
    dataenergitotal[1]=parseFloat(jadi1[0]['energitotal']);
    datadayatotal[1]=parseFloat(jadi1[0]['dayatotal']);
    /*
    //p3
    const datbar2 = await fetch(link2);
    const jadi2 = await datbar2.json();
    dataenergir[2]=parseFloat(jadi2[0]['energir']);
    dataenergis[2]=parseFloat(jadi2[0]['energis']);
    dataenergit[2]=parseFloat(jadi2[0]['energit']);
    datavoltr[2]=parseFloat(jadi2[0]['voltr']);
    datavolts[2]=parseFloat(jadi2[0]['volts']);
    datavoltt[2]=parseFloat(jadi2[0]['voltt']);
    datacurrentr[2]=parseFloat(jadi2[0]['currentr']);
    datacurrents[2]=parseFloat(jadi2[0]['currents']);
    datacurrentt[2]=parseFloat(jadi2[0]['currentt']);
    dataenergitotal[2]=parseFloat(jadi2[0]['energitotal']);
    datadayatotal[2]=parseFloat(jadi2[0]['dayatotal']);
    //p4
    const datbar3 = await fetch(link3);
    const jadi3 = await datbar3.json();
    dataenergir[3]=parseFloat(jadi3[0]['energir']);
    dataenergis[3]=parseFloat(jadi3[0]['energis']);
    dataenergit[3]=parseFloat(jadi3[0]['energit']);
    datavoltr[3]=parseFloat(jadi3[0]['voltr']);
    datavolts[3]=parseFloat(jadi3[0]['volts']);
    datavoltt[3]=parseFloat(jadi3[0]['voltt']);
    datacurrentr[3]=parseFloat(jadi3[0]['currentr']);
    datacurrents[3]=parseFloat(jadi3[0]['currents']);
    datacurrentt[3]=parseFloat(jadi3[0]['currentt']);
    dataenergitotal[3]=parseFloat(jadi3[0]['energitotal']);
    datadayatotal[3]=parseFloat(jadi3[0]['dayatotal']);
    //p5
    const datbar4 = await fetch(link4);
    const jadi4 = await datbar4.json();
    dataenergir[4]=parseFloat(jadi4[0]['energir']);
    dataenergis[4]=parseFloat(jadi4[0]['energis']);
    dataenergit[4]=parseFloat(jadi4[0]['energit']);
    datavoltr[4]=parseFloat(jadi4[0]['voltr']);
    datavolts[4]=parseFloat(jadi4[0]['volts']);
    datavoltt[4]=parseFloat(jadi4[0]['voltt']);
    datacurrentr[4]=parseFloat(jadi4[0]['currentr']);
    datacurrents[4]=parseFloat(jadi4[0]['currents']);
    datacurrentt[4]=parseFloat(jadi4[0]['currentt']);
    dataenergitotal[4]=parseFloat(jadi4[0]['energitotal']);
    datadayatotal[4]=parseFloat(jadi4[0]['dayatotal']);
    //p6
    const datbar5 = await fetch(link5);
    const jadi5 = await datbar5.json();
    dataenergir[5]=parseFloat(jadi5[0]['energir']);
    dataenergis[5]=parseFloat(jadi5[0]['energis']);
    dataenergit[5]=parseFloat(jadi5[0]['energit']);
    datavoltr[5]=parseFloat(jadi5[0]['voltr']);
    datavolts[5]=parseFloat(jadi5[0]['volts']);
    datavoltt[5]=parseFloat(jadi5[0]['voltt']);
    datacurrentr[5]=parseFloat(jadi5[0]['currentr']);
    datacurrents[5]=parseFloat(jadi5[0]['currents']);
    datacurrentt[5]=parseFloat(jadi5[0]['currentt']);
    dataenergitotal[5]=parseFloat(jadi5[0]['energitotal']);
    datadayatotal[5]=parseFloat(jadi5[0]['dayatotal']);
    //p7
    const datbar6 = await fetch(link6);
    const jadi6 = await datbar6.json();
    dataenergir[6]=parseFloat(jadi6[0]['energir']);
    dataenergis[6]=parseFloat(jadi6[0]['energis']);
    dataenergit[6]=parseFloat(jadi6[0]['energit']);
    datavoltr[6]=parseFloat(jadi6[0]['voltr']);
    datavolts[6]=parseFloat(jadi6[0]['volts']);
    datavoltt[6]=parseFloat(jadi6[0]['voltt']);
    datacurrentr[6]=parseFloat(jadi6[0]['currentr']);
    datacurrents[6]=parseFloat(jadi6[0]['currents']);
    datacurrentt[6]=parseFloat(jadi6[0]['currentt']);
    dataenergitotal[6]=parseFloat(jadi6[0]['energitotal']);
    datadayatotal[6]=parseFloat(jadi6[0]['dayatotal']);
    //p8
    const datbar7 = await fetch(link7);
    const jadi7 = await datbar7.json();
    dataenergir[7]=parseFloat(jadi7[0]['energir']);
    dataenergis[7]=parseFloat(jadi7[0]['energis']);
    dataenergit[7]=parseFloat(jadi7[0]['energit']);
    datavoltr[7]=parseFloat(jadi7[0]['voltr']);
    datavolts[7]=parseFloat(jadi7[0]['volts']);
    datavoltt[7]=parseFloat(jadi7[0]['voltt']);
    datacurrentr[7]=parseFloat(jadi7[0]['currentr']);
    datacurrents[7]=parseFloat(jadi7[0]['currents']);
    datacurrentt[7]=parseFloat(jadi7[0]['currentt']);
    dataenergitotal[7]=parseFloat(jadi7[0]['energitotal']);
    datadayatotal[7]=parseFloat(jadi7[0]['dayatotal']);
    //p9
    const datbar8 = await fetch(link8);
    const jadi8 = await datbar8.json();
    dataenergir[8]=parseFloat(jadi8[0]['energir']);
    dataenergis[8]=parseFloat(jadi8[0]['energis']);
    dataenergit[8]=parseFloat(jadi8[0]['energit']);
    datavoltr[8]=parseFloat(jadi8[0]['voltr']);
    datavolts[8]=parseFloat(jadi8[0]['volts']);
    datavoltt[8]=parseFloat(jadi8[0]['voltt']);
    datacurrentr[8]=parseFloat(jadi8[0]['currentr']);
    datacurrents[8]=parseFloat(jadi8[0]['currents']);
    datacurrentt[8]=parseFloat(jadi8[0]['currentt']);
    dataenergitotal[8]=parseFloat(jadi8[0]['energitotal']);
    datadayatotal[8]=parseFloat(jadi8[0]['dayatotal']);
    */
    var har= Date();
    var tim=har.split(" ");
    var wak=tim[4];
    //hitunh data
    for (let i = 0; i < dataenergir.length; i++) {
        henergir += dataenergir[i];
        henergis += dataenergis[i];
        henergit += dataenergit[i];
        hvoltr += datavoltr[i];
        hvolts += datavolts[i];
        hvoltt += datavoltt[i];
        hcurrentr += datacurrentr[i];
        hcurrents += datacurrents[i];
        hcurrentt += datacurrentt[i];
        henergitotal += dataenergitotal[i];
        hdayatotal += datadayatotal[i];
    };
    energiR["Dash"].series[0].points[0].update(henergir/9);
    energis["Dash"].series[0].points[0].update(henergis/9);
    energit["Dash"].series[0].points[0].update(henergit/9);
    energitotal["Dash"].series[0].points[0].update(henergitotal/9);
    dayatotal["Dash"].series[0].points[0].update(hdayatotal/9);
    voltr["Dash"].series[0].points[0].update(hvoltr/9);
    volts["Dash"].series[0].points[0].update(hvolts/9);
    voltt["Dash"].series[0].points[0].update(hvoltt/9);
    currentr["Dash"].series[0].points[0].update(hcurrentr/9);
    currents["Dash"].series[0].points[0].update(hcurrents/9);
    currentt["Dash"].series[0].points[0].update(hcurrents/9);
    myLineChart.data.labels.push(wak);
    myLineChart.data.datasets[0].data.push(hvoltr/9);
    myLineChart.data.datasets[1].data.push(hvolts/9);
    myLineChart.data.datasets[2].data.push(hvoltt/9);
    myLineChart.update()
    henergir =0;
    henergis =0;
    henergit =0;
    hvoltr =0;
    hvolts =0;
    hvoltt =0;
    hcurrentr =0;
    hcurrents =0;
    hcurrentt =0;
    henergitotal =0;
    hdayatotal =0;
}
</Script>
</html>