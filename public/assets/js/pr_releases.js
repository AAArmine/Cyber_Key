// nav first
var sertItems = $('.our_news-item1');

var sertItemsLength = sertItems.length;
// 500 poxel !!!!!
if (screen.width > 768) {
    if ($('#or_ne-1')) {
        $('#or_ne-1').css('display', 'block');
    }
    if ($('#or_ne-2')) {
        $('#or_ne-2').css('display', 'block');
    }
    if ($('#or_ne-3')) {
        $('#or_ne-3').css('display', 'block');
    }
    var nav_item = sertItemsLength -2;
    var ceil_nav_item = Math.ceil(nav_item);

    if (nav_item <= 1) {

        document.getElementById('display_none').style.visibility = "hidden";
        $('.special-offers-flex').css('justify-content', 'space-around');

    } else {
        for (var i = 1; i < ceil_nav_item; i++) {
            $('.or_neBorder').append('<div class="or_neBorder_item or_neBorder_item_' + i + '"></div>');
        }
    }


    var bord_items = $('.or_neBorder_item');
    $('.right_or_ne').click(function () {
        var plusK = 0;
        for (var i = 0; i < bord_items.length; i++) {

            // !!!!!!!! .eq(i)
            if (bord_items.eq(i).hasClass('or_neBorder_bottom')) {
                plusK = i + 1;
                if (plusK < bord_items.length) {
                    $(bord_items[i]).removeClass('or_neBorder_bottom');
                }
            }
        }
        if (plusK !== bord_items.length) {
            sertItems.hide();

            sertItems.eq(plusK * 1).show();
            sertItems.eq(plusK * 1 + 1).show();
            sertItems.eq(plusK * 1 + 2).show();

            $(bord_items[plusK]).addClass('or_neBorder_bottom');
        }
    });

    $('.left_or_ne').click(function () {
        var minusK = 0;
        for (var i = 0; i < bord_items.length; i++) {
            if (bord_items.eq(i).hasClass('or_neBorder_bottom')) {
                minusK = i - 1;
                if (minusK >= 0) {
                    $(bord_items[i]).removeClass('or_neBorder_bottom');
                }
            }
        }
        $(bord_items[minusK]).addClass('or_neBorder_bottom');
        if (minusK !== -1) {
            sertItems.hide();
            sertItems.eq(minusK * 1).show();
            sertItems.eq(minusK * 1 + 1).show();
            sertItems.eq(minusK * 1 + 2).show();
        }
    });

}else{
    if ($('#or_ne-1')) {
        $('#or_ne-1').css('display', 'block');
    }
    var nav_item = sertItemsLength;
    var ceil_nav_item = Math.ceil(nav_item);

    if (nav_item <= 1) {

        document.getElementById('display_none').style.visibility = "hidden";
        $('.special-offers-flex').css('justify-content', 'space-around');

    } else {
        for (var i = 1; i < ceil_nav_item; i++) {
            $('.or_neBorder').append('<div class="or_neBorder_item or_neBorder_item_' + i + '"></div>');
        }
    }


    var bord_items = $('.or_neBorder_item');
    $('.right_or_ne').click(function () {
        var plusK = 0;
        for (var i = 0; i < bord_items.length; i++) {

            // !!!!!!!! .eq(i)
            if (bord_items.eq(i).hasClass('or_neBorder_bottom')) {
                plusK = i + 1;
                if (plusK < bord_items.length) {
                    $(bord_items[i]).removeClass('or_neBorder_bottom');
                }
            }
        }
        if (plusK !== bord_items.length) {
            sertItems.hide();

            sertItems.eq(plusK * 1).show();

            $(bord_items[plusK]).addClass('or_neBorder_bottom');
        }
    });

    $('.left_or_ne').click(function () {
        var minusK = 0;
        for (var i = 0; i < bord_items.length; i++) {
            if (bord_items.eq(i).hasClass('or_neBorder_bottom')) {
                minusK = i - 1;
                if (minusK >= 0) {
                    $(bord_items[i]).removeClass('or_neBorder_bottom');
                }
            }
        }
        $(bord_items[minusK]).addClass('or_neBorder_bottom');
        if (minusK !== -1) {
            console.log(minusK);
            sertItems.hide();
            sertItems.eq(minusK * 1).show();
        }
    });
    
}

