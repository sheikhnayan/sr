$(document).ready(function(){
    console.log("I am clicked")
    // jQuery methods go here...
    $('.paid__btn').click(function(){
        $('.agrohi-popup-container').addClass('show-agrohi-popup');
    })

    $('.agrohi-popup-cancel__btn').click(function(){
        $('.agrohi-popup-container').removeClass('show-agrohi-popup');
    })

    $('.pending').click(function(){

        if ($(this).is(':first-child')) {
            // It's the first one, so you can do something here
            // For example, add a class to the first element
            $('.pending:last-child').addClass('nobg');
            $(this).removeClass('nobg');
        }else if($(this).is(':last-child')) {
            // It's the last one, so you can do something here
            $('.pending:first-child').addClass('nobg');
            $(this).removeClass('nobg');
        }
        
        // Check if this element is the first one with the class "pending"
        
    });
    
    

    $('.agrohi-popup-confirm__btn').click(function(){
        $('.agrohi-popup-container').removeClass('show-agrohi-popup');
    })

    $('.view__btn').click(function(){
        $('.onagrohi-popup-container').addClass('show-onagrohi-popup');
    })

    $('.onagrohi-popup-confirm__btn').click(function(){
        $('.onagrohi-popup-container').removeClass('show-onagrohi-popup');
    })

    $('.onagrohi-popup-cancel__btn').click(function(){
        $('.onagrohi-popup-container').removeClass('show-onagrohi-popup');
    })
  });