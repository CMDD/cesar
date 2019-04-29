var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        width: '640',
        height: '360',
        videoId: 'k6iAtCOZvzQ',
        playerVars: {
            modestbranding: 0,
            controls: 0,
            showinfo: 0,
            rel: 0
        },
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

var init = false;
function onPlayerReady(event) {
    event.target.setVolume(100);
    init = true;
}

var done = false;
function onPlayerStateChange(event) {
    
    if (event.data == YT.PlayerState.PLAYING && !done) {
        if ( init ) {
            $('.blocker').addClass('playing init').removeClass('paused');
            setTimeout(function(){ $('.blocker').removeClass('init'); }, 3000);
            init = false;
        } else {
            $('.blocker').addClass('playing').removeClass('paused');
            done = true;
        }
    } else {
        $('.blocker').addClass('paused').removeClass('playing init');
        done = false;
    }
    
}

$('.blocker .playpause').on('click', function (e) {
    e.preventDefault();
    if ( $('.blocker').hasClass('paused') ){
        player.playVideo();
    }else{
        player.pauseVideo();
    }
});


$('.comments').on('click', '.reply', function(e){
    
    e.preventDefault();
    $('.reply-form').fadeOut('fast').remove();
    var box_html = $('<div class="reply-form"><form><textarea class="form-control" rows="3"></textarea><button type="submit" class="btn">Responder</button><button type="submit" class="btn cancel">Cancelar</button></form></div>');
    box_html.hide();
    $(this).parent().parent().parent().append(box_html);
    box_html.fadeIn('fast');
    return false;
    
});

$('.comments').on('click', '.cancel', function(e){
    
    e.preventDefault();
    $('.reply-form').fadeOut('fast').remove();
    return false;
    
});

$('.comments').on('click', '.delete', function(e){
    
    e.preventDefault();
    $(this).parent().parent().parent().fadeOut('fast').remove();
    return false;
    
});


$( '.image .inputfile' ).each( function() {
    
    var label = $(this).next('label'),
        options = $(this).parent().parent().find('.options, .save');
    
    $(this).on( 'change', function( e ) {
        
        var fileName = '';
        if( e.target.value ) {
            fileName = e.target.value.split( '\\' ).pop();
            label.find( 'span' ).html(fileName);
            options.fadeIn(300);
        }
    });
    
});
