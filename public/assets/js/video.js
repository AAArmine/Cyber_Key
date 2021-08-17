// video
//     !!!!!!!When using jQuery, you'll need to use 'get' first:

$('.playStop_abs').on('click', function () {
    var video = $(this).parent().find('.video_item');
    console.log(video);

    if (video.get(0).paused) {
        video.get(0).play();
        $(this).html('<i class="far fa-pause-circle"></i>');
    } else {
        video.get(0).pause();
        $(this).html('<i class="far fa-play-circle"></i>');
    }
});