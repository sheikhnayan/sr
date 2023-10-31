$(document).ready(function () {
  
    $("#tabs-nav li:first-child").addClass("active");
    $(".tab-content").hide();
    $(".tab-content:first").show();
  
  
    $(".dashboard_tab-content").hide();
    $(".dashboard_tab-content:first").show();
  
    // Click function
    $("#activity-tabs li").click(function () {
      $("#activity-tabs li").removeClass("dashboard_tab-active");
      $(this).addClass("dashboard_tab-active");
      $(".dashboard_tab-content").hide();
      console.log(this);
      var activeTab = $(this).find("a").attr("href");
      // console.log(activeTab)
      $(activeTab).fadeIn();
      return false;
    });
  
  
  });
  
  
  $(".js-btn-modal").on("click", function () {
    $("#overlay").fadeIn();
    $(".js-modal").fadeIn();
  });
  
  $(".js-close-btn").on("click", function () {
    $("#overlay").fadeOut();
    $(".js-modal").fadeOut();
  });
  