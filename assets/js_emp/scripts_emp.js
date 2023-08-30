//BAR CHART CODE

var barChartOptions = {
    series: [
    {
        name: 'TOTAL CALLS',
        data: [44,55,57,56,61]
    },{
        name: 'ISSUES RESOLVED ',
        data: [76,85,101,98,87]
    },{
        name: 'TRANSFERED CALLS',
        data: [35,41,36,26,45]
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
    categories: ['Mon', 'Tue', 'Wed', 'Thr','Fri'],
  },
  yaxis: {
    title:{
        text:'CALLS',
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
// AREA2 CHART
//***************//
var area2ChartOptions = {
    series: [{
    name: 'ISSUES RESOLVED',
    data: [44, 55, 31, 47, 31, 43, 26]
  }, {
    name: 'PENDING PROBLEMS',
    data: [55, 69, 45, 61, 43, 54, 37]
  }],
    chart: {
        height: 350,
        type: 'area',
        toolbar: {
            show: false,
        },
    },
    colors: ["#4f35a1","#246dec"],
    dataLabels: {
        enabled: false,
    },
  
  
  stroke: {
    curve: 'smooth'
  },
  
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul"],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'ISSUES RESOLVED',
      },
    },
    {
      opposite: true,
      title: {
        text: 'PENDING PROBLEMS',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  }
  };
  
  var area2Chart = new ApexCharts(document.querySelector("#area2-chart"), area2ChartOptions);
  area2Chart.render();