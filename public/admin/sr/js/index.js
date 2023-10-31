$(document).ready(function () {
  // Show the first tab and hide the rest
  console.log($("#tabs-nav li:first-child").addClass("active"));
  $("#tabs-nav li:first-child").addClass("active");
  $(".tab-content").hide();
  $(".tab-content:first").show();

  // Click function
  $("#tabs-nav li").click(function () {
    $("#tabs-nav li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content").hide();
    console.log(this);
    var activeTab = $(this).find("a").attr("href");
    // console.log(activeTab)
    $(activeTab).fadeIn();
    return false;
  });


  $("#sr_activity-tabs li:first-child a").addClass("sr_tab-active");
  $(".sr_tab-content").hide();
  $(".sr_tab-content:first").show();

  // Click function
  $("#sr_activity-tabs li").click(function () {
    $("#sr_activity-tabs li").removeClass("sr_tab-active");
    $(this).addClass("sr_tab-active");
    $(".sr_tab-content").hide();
    console.log(this);
    var activeTab = $(this).find("a").attr("href");
    // console.log(activeTab)
    $(activeTab).fadeIn();
    return false;
  });



  // Show the first tab and hide the rest
  $("#tabs-nav-order li:first-child").addClass("active");
  $(".tab-content-order").hide();
  $(".tab-content-order:first").show();

  // Click function
  $("#tabs-nav-order li").click(function () {
    $("#tabs-nav-order li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content-order").hide();
    console.log(this);
    var activeTab = $(this).find("a").attr("href");
    // console.log(activeTab)
    $(activeTab).fadeIn();
    return false;
  });

  // Show the first tab and hide the rest
  $("#tabs-nav-route li:first-child").addClass("active");
  $(".tab-content-route").hide();
  $(".tab-content-route:first").show();

  // Click function
  $("#tabs-nav-route li").click(function () {
    $("#tabs-nav-route li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content-route").hide();
    console.log(this);
    var activeTab = $(this).find("a").attr("href");
    // console.log(activeTab)
    $(activeTab).fadeIn();
    return false;
  });


  // Show the first tab and hide the rest
  $("#tabs-nav-summary li:first-child").addClass("active");
  $(".tab-content-summary").hide();
  $(".tab-content-summary:first").show();

  // Click function
  $("#tabs-nav-summary li").click(function () {
    $("#tabs-nav-summary li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content-summary").hide();
    console.log(this);
    var activeTab = $(this).find("a").attr("href");
    // console.log(activeTab)
    $(activeTab).fadeIn();
    return false;
  });

  // $("#tabs-nav li:first-child").addClass("active");
  // $(".tab-content").hide();
  // $(".tab-content:first").show();

  // // Click function
  // $("#tabs-nav li").click(function () {
  //   $("#tabs-nav li").removeClass("active");
  //   $(this).addClass("active");
  //   $(".tab-content").hide();
  //   console.log(this);
  //   var activeTab = $(this).find("a").attr("href");
  //   // console.log(activeTab)
  //   $(activeTab).fadeIn();
  //   return false;
  // });

  const analyticsChart = document.getElementById("analyticsChart");
  // console.log(analyticsChart)
  const data = {
    datasets: [
      {
        label: "My First Dataset",
        data: [100, 50, 100],
        backgroundColor: [
          "rgb(255, 99, 132)",
          "rgb(54, 162, 235)",
          "rgb(255, 205, 86)",
        ],
        hoverOffset: 4,
      },
    ],
  };

  // const doughnutLabel = {
  //   id: 'doughnutLabel',

  // }

  new Chart(analyticsChart, {
    type: "doughnut",
    data: data,
    options: {
      cutout: 100,
      // cutoutPercentage: 40,
      borderRadius: 30,
      // barPercentage: 10,
      // categoryPercentage: 10
      spacing: -8,
      borderWidth: 0,
    },
    // plugins:[doughnutLabel]
  });

  const DATA_COUNT = 6;
  const labels = [];
  for (let i = 0; i < DATA_COUNT; ++i) {
    labels.push(i.toString());
  }
  const datapoints = [0, 20, 20, 60, 50, 30];
  const data2 = {
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [
      {
        label: "Cubic interpolation (monotone)",
        data: datapoints,
        borderColor: "#2563EB",
        fill: false,
        cubicInterpolationMode: "monotone",
        tension: 0.4,
        pointRadius: 4,
        pointHoverRadius: 10,
        pointHoverBackgroundColor: "#007AFF",
        pointHoverBorderColor: "white",
        pointHoverBorderWidth: 4,
      },
    ],
  };

  const dashboardChart = document.getElementById("dashboard-chart");

  const tooltipLine = {
    id: "tooltipLine",
    beforeDraw: (chart) => {
      if (chart.tooltip._active && chart.tooltip._active.length) {
        // console.log(chart)
        const ctx = chart.ctx;
        // // ctx.save();
        const activePoint = chart.tooltip._active[0];
        // // console.log(activePoint)
        ctx.beginPath();
        // ctx.setLineDash([5,7]);
        ctx.moveTo(activePoint.element.x, activePoint.element.y);
        ctx.lineTo(activePoint.element.x, chart.chartArea.bottom);
        ctx.lineWidth = 2;
        ctx.strokeStyle = "#CBD5E1";
        ctx.stroke();
        ctx.restore();
      }
    },
  };

  class Custom extends Chart.LineController {
    draw() {
      super.draw(arguments);
      const ctx = this.chart.ctx;
      let _stroke = ctx.stroke;
      ctx.stroke = function () {
        ctx.save();
        ctx.shadowColor = "black";
        ctx.shadowBlur = 10;
        ctx.shadowOffsetX = 20;
        ctx.shadowOffsetY = 20;
        _stroke.apply(this, arguments);
        ctx.restore();
      };
    }
  }

  Custom.id = "shadowLine";
  Custom.defaults = Chart.LineController.defaults;

  Chart.register(Custom);

  new Chart(dashboardChart, {
    type: "line",
    data: data2,
    options: {
      responsive: true,
      scaleLineColor: "rgba(0,0,0,0)",
      scales: {
        x: {
          type: "category",
          labels: ["January", "February", "March", "April", "May", "June"],
          display: true,
          title: {
            display: true,
          },
          grid: {
            display: false,
          },
        },
        y: {
          // beginAtZero: false,
          display: true,
          suggestedMin: "-10k",
          suggestedMax: "200k",
        },
      },
      plugins: {
        legend: {
          display: false, //This will do the task
        },
      },
    },
    plugins: [tooltipLine],
  });
});

// Bar Chart
const topSellChart = document.getElementById("top-sell-chart");
const topSellChartContext = topSellChart.getContext("2d");
const gradientBg = topSellChartContext.createLinearGradient(0, 0, 0, 350);

gradientBg.addColorStop(0, "#BAD8FF");
gradientBg.addColorStop(1, "rgba(219, 234, 254, 0.46)");
// const barLabels = Utils.months({count: 7});
const barData = {
  labels: ["S", "M", "T", "W", "T", "F"],
  datasets: [
    {
      label: "My First Dataset",
      data: [65, 59, 80, 81, 56, 55, 40],
      backgroundColor: gradientBg,

      borderRadius: 8,
      hoverBackgroundColor: "#007AFF",
    },
  ],
};

new Chart(topSellChart, {
  type: "bar",
  data: barData,
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
      x: {
        grid: {
          display: false,
        },
      },
    },
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});
