//BAR CHART CODE

var barChartOptions = {
    series: [
    {
        name: 'TOTAL CALLS',
        data: [44,55,57,56,61,58,63,60,66]
    },{
        name: 'SOLVED ISSUES',
        data: [76,85,101,98,87,105,81,114,94]
    },{
        name: 'TRANSFERED CALLS',
        data: [35,41,36,26,45,48,52,52,41]
    }
],
    chart: {
    type: 'bar',
    height: 350,
    toolbar: {
        show: false,
    },
  },
  colors: [
    '#2e7d32',
    '#2962ff',
    '#d50000',
  ],
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '55%',
      endingShape: 'rounded',
    },
  },
  dataLabels: {
    enabled: false
  },
  stroke:{
    show: true,
    width:2,
    colors: ['transparent']
  },
  xaxis: {
    categories: ['Feb', 'Mar', 'Apr', 'May','Jun', 'Jul', 'Aug','Sep', 'Oct'],
    labels:{
        style:{
            colors:"#f5f7ff",
        },
    },
  },
  yaxis: {
    title:{
        text:'CALLS',
        style:{
            color:"#f5f7ff",
        },
    },
    labels:{
        style:{
            colors:"#f5f7ff",
        },
    },
  },
  fill:{
    opacity: 1
  },
  grid:{
    borderColor:"#55596e",
    yaxis:{
        lines:{
            show: true,
        },
    },
    xaxis:{
        lines:{
            show: true,
        },
    },
  },
  legend:{
    labels:{
        colors:"#f5f7ff",
    },
    show: true,
    position: "bottom",
  },
  tooltip:{
    y:{
        formatter: function (val){
            return '' + val + ''
        }
    }
  }
};

  var barchart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
  barchart.render();



 //***************//
  // AREA CHART
  //***************//


  var areaChartOptions = {
    series: [{
        name: 'TOTAL CALLS',
        data: [31, 55, 31, 47, 31, 43, 26, 41, 31],
    }, {
        name: 'PENDING PROBLEMS',
        data: [55, 69, 45, 61, 43, 54, 37, 52, 44],
    }],
    chart: {
        type: "area",
        background: "transparent",
        height: 350,
        stacked: false,
        toolbar:{
            show: false,
        },
    },
  colors:["#00ab57","#d50000"],
  labels:["Jan", "Feb","Mar","Apr","May","Jun","Jul"],
  dataLabels:{
    enabled: false,
  },
  fill:{
    gradient:{
        opacityFrom: 0.4,
        opacityTo: 0.1,
        shadeIntensity:1,
        stops:[0,100],
        type: "vertical",
    },
    type:"gradient",
 },
  grid:{
    borderColor:"#55596e",
    yaxis:{
        lines:{
            show: true,
        },
    },
    xaxis:{
        lines:{
            show: true,
        },
    },
  },
  legend:{
    labels:{
        colors:"#f5f7ff",
    },
    show: true,
    position:"bottom",
  },
  markers:{
    size:6,
    strokeColors:"#1b2635",
    strokeWidth:3,
  },
  stroke:{
    curves:"smooth",
  },
  xaxis:{
    axisBorder:{
        color:"#55596e",
        show: true,
    },
    axisTicks:{
        color:"#55596e",
        show: true,
    },
    labels:{
        offsetY:5,
        style:{
            colors:"#f5f7ff",
        },
    },
  },
  yaxis: 
  [
    {
      title: {
        text: "TOTAL CALLS",
        style:{
            color:"#f5f7ff",
        },
      },
      labels:{
        style:{
            colors:"f5f7ff",
        },
      },
    },
    {
      opposite: true,
      title: {
        text: "PENDING PROBLEMS",
        style:{
            color:"#f5f7ff",
        },
      },
      labels:{
        style:{
            colors:"#f5f7ff",
        },
      },
    },
  ],
  tooltip: {
   shared: true,
   intersect: false,
   theme: "dark",
  }
};

  var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
  areaChart.render();