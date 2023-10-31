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

});
