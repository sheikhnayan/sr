$(document).ready(function () {
  // Navigation

  feather.replace();
  const links = document.querySelectorAll(".navigation__link");

  links.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      if (!link.classList.contains("active")) {
        const active = document.querySelector(".navigation__link.active");
        if (active !== null) {
          active.classList.remove("active");
        }
        link.classList.add("active");

        // Delay opening the page by 1 second
        setTimeout(() => {
          window.location.href = link.getAttribute("href");
        }, 500); // 1000 milliseconds = 1 second
      }
    });
  });
  // $('.product__details-container').hide();
  // Product-details-popup
  $(".product-details-popup").click(function () {
    $(".product__details-container").addClass("show");
  });

  $(".popup__cancel").click(function () {
    $(".product__details-container").removeClass("show");
  });

  $(".product__confirm-btn").click(function () {
    $(".product__details-container").removeClass("show");
  });

  //
  $("#amount-minus").click(function () {
    var previousValue = parseInt(
      $(".product__handler-amount").val().match(/\d+/)[0]
    );
    if (!isNaN(previousValue)) {
      $(".product__handler-amount").val(previousValue - 1 + "%");
    }
  });

  $("#amount-plus").click(function () {
    var previousValue = parseInt(
      $(".product__handler-amount").val().match(/\d+/)[0]
    );
    if (!isNaN(previousValue)) {
      $(".product__handler-amount").val(previousValue + 1 + "%");
    }
  });

  // Product
  $(".profile__card").click(function () {
    $(".baki-container-popup").addClass("show");
  });
  $(".product__deny-btn").click(function () {
    $(".baki-container-popup").removeClass("show");
  });
  $(".product__accept-btn").click(function () {
    $(".baki-container-popup").removeClass("show");
  });

  // Hide all tab content except the first one
  // $(".Inventory-tab-content:not(:first-of-type)").hide();
  // $(".Inventory-tab-content:first-of-type").show();

  // Set the first tab as active
  $("#Inventory-tab-1").addClass("active");
  // Handle tab clicks
  $(".Inventory-tab").click(function () {
    // Hide all tab content
    $(".Inventory-tab-content").hide();

    // Show the selected tab content
    var clickedTabId = $(this).attr("id");
    $("#" + clickedTabId.replace("Inventory-tab", "Inventory-content")).show();

    // Update the active tab's appearance
    $(".Inventory-tab").removeClass("active");
    $(this).addClass("active");

    // Remove classes starting with "active" from all tabs
    $(".Inventory-tab").removeClass(function (index, className) {
      return (className.match(/(^|\s)active\d+/g) || []).join(" ");
    });

    // Set a class like "active1" for the clicked tab
    $(this).addClass("active1");
  });

  // console.log("ok");
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


  // Dashboard Chart

  const dashboardStatisticsChartData = {
    labels: ["Mon", "Tue"],
    datasets: [
      {
        label: "Weekly Sales",
        data: [3500, 3000],
        backgroundColor: ["rgba(56, 189, 248, 1)", "#fafafb"],
        borderWidth: 1,
        cutout: "80%",
      },
    ],
  };
  var stackedText = {
    id: "stackedText",
    afterDatasetsDraw(chart, args, options) {
      const {
        ctx,
        data,
        chartArea: { top, bottom, left, right, width, height },
      } = chart;
      ctx.save();
      ctx.font = "700 25px Inter";
      ctx.fillStyle = "#222950";
      ctx.textAlign = "center";
      ctx.fillText("৳" + data.datasets[0].data[0], width / 2, height / 2 + 20);
      // width = "141px";
      // height = "141px"
      ctx.font = "400 15px Inter";
      ctx.fillStyle = "#595F84";
      ctx.textAlign = "center";
      ctx.fillText("Total", width / 2, height / 2 + top + -20);
    },
  };
  // config
  const dashboardStatisticsChartConfig = {
    type: "doughnut",
    data: dashboardStatisticsChartData,
    options: {
      plugins: {
        legend: {
          display: false,
        },
      },
    },
    plugins: [stackedText],
  };

  // render init block
  const myChart = new Chart(
    document.getElementById("dashboard-statistics-chart"),
    dashboardStatisticsChartConfig
  );




  const datapoints = [10, 20, 15, 40, 50, 30, 25];
  const dashboardChart = document.getElementById("dashboard-chart");

  const data = {
    labels: ["Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
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

  new Chart(dashboardChart, {
    type: "line",
    data: data,
    options: {
      responsive: true,
      scaleLineColor: "rgba(0,0,0,0)",
      scales: {
        x: {
          type: "category",
          labels: ["Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
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

  const datapoints2 = [10, 20, 20, 60, 50, 30, 26];
  const dashboardChart2 = document.getElementById("dashboard-chart2");

  const data2 = {
    labels: ["Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [
      {
        label: "Cubic interpolation (monotone)",
        data: datapoints2,
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

  const tooltipLine2 = {
    id: "tooltipLine2",
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

  new Chart(dashboardChart2, {
    type: "line",
    data: data2,
    options: {
      responsive: true,
      scaleLineColor: "rgba(0,0,0,0)",
      scales: {
        x: {
          type: "category",
          labels: ["Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
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
    plugins: [tooltipLine2],
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
});
