$(".js-btn-modal").on("click", function () {
  $("#overlay").fadeIn();
  $(".js-modal").fadeIn();
});

$(".js-close-btn").on("click", function () {
  $("#overlay").fadeOut();
  $(".js-modal").fadeOut();
});
$("#overlay").on("click", function () {
  $("#overlay").fadeOut();
  $(".js-modal").fadeOut();
});

$(".js-btn-profile-modal").on("click", function () {

  data = $(this).data('id');

  $.ajax({
    url: "/company/edit/"+data,
    type: 'GET',
    dataType: 'json', // added data type
    success: function(res) {
        logo = 'storage/'+res.logo;

        $('.sr__name').html(res.name);
        $('.sr__img').attr('src',logo);
        $('.sr__name').val(res.name);
        $('.sr__email').val(res.email);
        $('.sr__update').attr('action','/company/update/'+res.id);
    }
});

  $("#overlay").fadeIn();
  $(".js-profile-modal").fadeIn();
});

$(".js-profile-close-btn").on("click", function () {
  $("#overlay").fadeOut();
  $(".js-profile-modal").fadeOut();
});
$("#overlay").on("click", function () {
  $("#overlay").fadeOut();
  $(".js-profile-modal").fadeOut();
});
