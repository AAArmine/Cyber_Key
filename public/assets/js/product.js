
$(document).ready(function () {
    // video
    var video = document.getElementById('video');
    var btn = document.getElementById('playStop');

    $('.play_button').click(function () {
        if (video.paused) {
            video.play();
            $(this).html('<i class="far fa-pause-circle"></i>');
        } else {
            video.pause();
            $(this).html('<i class="far fa-play-circle"></i>');
        }
    });


    // testimonials
    var tes_el_items = $('.eight_testimonials .testimonial_fl');
    var tes_el_legth=tes_el_items.length;


    if(tes_el_legth < 1){
        $('.eight_testimonials').css('display', 'none');
    }else{
        for (var i = 0; i < tes_el_legth; i++) {
            if(i==0){
                tes_el_items.eq(i).addClass('disp_block');
                
            }
        }
    }


    // $('.right_testimonial').on('click', function (){
    //     for (var i = 0; i < tes_el_legth; i++) {
    //         if (tes_el_items.eq(i).hasClass('disp_block')) {
    //             tes_el_items.eq(i).removeClass('disp_block');
    //             tes_el_items.eq(i+1).addClass('disp_block');
    //             return false; !!!
    //         }
    //     }
    // });  
});
$(document).on('click','.right_testimonial', function(){
    var tes_el_items = $('.eight_testimonials .testimonial_fl');
    var tes_el_items_length = tes_el_items.length;

    var displayed_item_index = tes_el_items.index($('.disp_block'));
    // console.log(displayed_item_index);
    if(displayed_item_index < tes_el_items_length-1){
    
    tes_el_items.eq(displayed_item_index).toggleClass('disp_block');
    tes_el_items.eq( displayed_item_index + 1).toggleClass('disp_block')
    } 
});
$(document).on('click','.left_testimonial', function(){
    var tes_el_items = $('.eight_testimonials .testimonial_fl');
    var tes_el_items_length = tes_el_items.length;

    var displayed_item_index = tes_el_items.index($('.disp_block'));
    // console.log(displayed_item_index);
    if(displayed_item_index > 0){
    
    tes_el_items.eq(displayed_item_index).toggleClass('disp_block');
    tes_el_items.eq( displayed_item_index - 1).toggleClass('disp_block')
    } 
});
