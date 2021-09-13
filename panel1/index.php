
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
document.getElementById("panel").className = "nav-link active"; 
document.getElementById("panel1").className = "nav-link active";
document.getElementById("panid").text="panel1";
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
energiR["Panel1"] = Highcharts.chart("container-kr", Highcharts.merge(gaugeOptions, configEnergiR));
energis["Panel1"] = Highcharts.chart("container-ks", Highcharts.merge(gaugeOptions, configEnergiS));
energit["Panel1"] = Highcharts.chart("container-kt", Highcharts.merge(gaugeOptions, configEnergiT));
energitotal["Panel1"] = Highcharts.chart("container-ktot", Highcharts.merge(gaugeOptions, configEnergiTotal));
volts["Panel1"] = Highcharts.chart("container-vs", Highcharts.merge(gaugeOptions, configVoltageS));
voltr["Panel1"] = Highcharts.chart("container-vr", Highcharts.merge(gaugeOptions, configvoltr));
voltt["Panel1"] = Highcharts.chart("container-vt", Highcharts.merge(gaugeOptions, configVoltageT));
dayatotal["Panel1"] = Highcharts.chart("container-ptot", Highcharts.merge(gaugeOptions, configDayaTotal));
currentr["Panel1"] = Highcharts.chart("container-cr", Highcharts.merge(gaugeOptions, configCurrentR));
currents["Panel1"] = Highcharts.chart("container-cs", Highcharts.merge(gaugeOptions, configCurrentS));
currentt["Panel1"] = Highcharts.chart("container-ct", Highcharts.merge(gaugeOptions, configCurrentT));
//fungsi line
var elementnya = document.getElementById('pemakaian-chart');
var datanya = {
    labels: ["1", "2", "3", "4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],
    datasets: [
        {
            label: "Pemakaian Bulan ini",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [],
        },
        {
            label: "Pemakaian bulan Lalu",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(179, 179, 179, o.4)",
            borderColor: "rgba(179, 179, 179, 1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(179, 179, 179, 1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(179, 179, 179, 1)",
            pointHoverBorderColor: "rgba(179, 179, 179, 1)",
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
const lindat='fun2.php';
$(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		gauge();
    line();
		selesai();
	}, 200);
}
async function gauge(){
    const datbar = await fetch(data);
    const jadi = await datbar.json();
    energiR["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['energir']));
    energis["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['energis']));
    energit["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['energit']));
    energitotal["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['energitotal']));
    dayatotal["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['dayatotal']));
    voltr["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['voltr']));
    volts["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['volts']));
    voltt["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['voltt']));
    currentr["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['currentr']));
    currents["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['currents']));
    currentt["Panel1"].series[0].points[0].update(parseFloat(jadi[0]['currentt']));
}
async function line(){
  const ld= await fetch(lindat);
  const jadi2= await ld.json();
  let skrg=[];
  let skrg2=[];
  let lalu=[];
  let lalu2=[];
  for (let i = 0; i <jadi2.length; i++) {
    
 //bulan ini
 var xl= jadi2[i]['tanggal'];
 var lx=xl.split('-');
 var yx = lx[2].split(' ');
    if (lx[1]==<?php $bul=date('m'); echo (int)$bul;?>) {
      for (let x = 1; x < 32; x++) {
        if (yx[0]==x) {
          skrg[x-1]=jadi2[i]['energitotal'];
        }
      }
    }
    //bulan lalu
    else if (lx[1]==<?php $bul=date('m'); echo (int)$bul-1;?>) {
      for (let x = 1; x < 32; x++) {
        if (yx[0]==x) {
          lalu[x-1]=jadi2[i]['energitotal'];
        }
      }
    }
  }
// dekvar
for (let j =0; j <skrg.length ; j++) {
        if (j==0) {
            skrg2[j]=parseInt(skrg[j]);
        }
        else{
            skrg2[j]=skrg[j]-skrg[j-1];
        }
    }
    for (let r =0; r <lalu.length ; r++) {
        if (r==0) {
            lalu2[r]=parseInt(lalu[r]);
        }
        else{
            lalu2[r]=lalu[r]-lalu[r-1];
        }
    }
    for (let z = 0; z < 31; z++) {
    myLineChart.data.datasets[0].data[z]=skrg2[z]*1444.44;
    myLineChart.data.datasets[1].data[z]=lalu2[z]*1444.44;
    myLineChart.update();
    }
    var tskrg=0;
    var tlalu=0;
    for (let o = 0; o < skrg2.length; o++) {
        tskrg += skrg2[o];
    }
    for (let q = 0; q < lalu2.length; q++) {
        tlalu += lalu2[q];
    }
b1=document.getElementById("bln");
b2=document.getElementById("bln2");
b3=document.getElementById("prog");
b1.innerHTML = tskrg*1444.44;
b2.innerHTML = tlalu*1444.44;
var prs=(tskrg/tlalu)*100;
b3.style.width=prs+"%";

}
</Script>
</html>