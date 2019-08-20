<div class="flex-video widescreen">
    <div class="curtain"></div>
    <div id="player"></div>
</div>

<script>

    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var checkInt;
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '360',
            width: '640',
            videoId: '<?php the_field('video_institucional', 93); ?>',
            events: {						    
            'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerStateChange(event) {

        if (event.data == YT.PlayerState.ENDED) {
            document.querySelector('.flex-video > .curtain').style.display = 'block';
        }

        if (event.data == YT.PlayerState.PAUSED) {
            document.querySelector('.flex-video > .curtain').style.display = 'block';
        }
    }

    function stopVideo() {
        player.stopVideo();
    }

    var btnPlay = document.querySelector('.flex-video > .curtain')
    btnPlay.addEventListener('click', function(){
        this.style.display = 'none'
        player.playVideo();
    })
</script>