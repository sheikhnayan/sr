$(document).ready(function(){
    console.log("I am clicked")
    // jQuery methods go here...
    $('.edit').click(function(){
        $('.product-popup-container').addClass('show-popup');
    })

    $('.confirm__btn').click(function(){
        $('.product-popup-container').removeClass('show-popup');

    })
  });