$(document).ready(function(){

    console.log("ok")
     // Dashboard Profile Chart
  const DashoboardProfileStatisticsChartData = {
    labels: ["Mon", "Tue"],
    datasets: [
      {
        label: "Weekly Sales",
        data: [80, 30, 40],
        backgroundColor: ["#007AFF", "#FFD66B", "#fafafb"],
        borderWidth: 1,
        cutout: "80%",
      },
    ],
  };
  var stackedText2 = {
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
      ctx.fillText(data.datasets[0].data[0] + "%", width / 2, height / 2 + 20);
      // width = "141px";
      // height = "141px"
      ctx.font = "400 15px Inter";
      ctx.fillStyle = "#595F84";
      ctx.textAlign = "center";
      ctx.fillText("Total", width / 2, height / 2 + top + -20);
    },
  };
  // config
  const DashoboardProfileStatisticsChartConfig = {
    type: "doughnut",
    data: DashoboardProfileStatisticsChartData,
    options: {
      plugins: {
        legend: {
          display: false,
        },
      },
    },
    plugins: [stackedText2],
  };

  // render init block
  const DashoboardProfilemyChart = new Chart(
    document.getElementById("dashboard-profile-statistics-chart"),
    DashoboardProfileStatisticsChartConfig
  );

})