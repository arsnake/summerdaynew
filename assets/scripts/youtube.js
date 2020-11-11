class YoutubePlayer {

    constructor() {
        this.player = '';
        this.id = '';
        this.inited = false;
    }

    createScript() {
        const tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        const firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    }

    setId(id) {
        this.id = id;
    }
    getId(){
        return this.id;
    }
    getInited() {
        return this.inited;
    }

    getPlayer() {
        return this.player;
    }


    onYouTubeIframeAPIReady() {
        this.player = new YT.Player('player-container', {
            videoId: this.getId(),
            playerVars:
                {
                    'autoplay': 0,
                    'controls': 0,
                    'rel': 0,
                    'showinfo': 0,
                },
            events: {
                'onReady': (ev) => {
                    const player = this.getPlayer();
                    player.playVideo();
                }
            }
        });

    }

    readyYoutube(){
        if((typeof YT !== "undefined") && YT && YT.Player){
            this.onYouTubeIframeAPIReady();
            this.inited = true;
        }else{
            setTimeout(() => {
                this.readyYoutube();
            }, 100);
        }
    }

    playVideo() {
        this.player.playVideo();
    }

    stopVideo() {
        this.player.stopVideo();
    }


    init() {
        if(this.getInited() === false ) {
            this.createScript();
            this.readyYoutube();
        } else {
            this.playVideo();
        }
    }

}


class VideoModal {
    constructor() {
        this.button = document.querySelector('.c-play');
        this.modal = document.querySelector('.c-video-modal');
        this.player = new YoutubePlayer();

        this.init();
    }
    playOnDemand() {
        this.player.init();
    }

    init() {
        if(this.button && this.modal) {
            const button = this.button;
            const modal = this.modal;

            const id = modal.getAttribute('data-video-id');

            if(id.length > 0) {
                const close = modal.querySelector('.c-video-modal__close');

                button.addEventListener('click', () => {
                    this.player.setId(id);
                    modal.classList.add('is-active');
                    this.playOnDemand();

                });

                close.addEventListener('click', () => {
                    modal.classList.remove('is-active');
                    this.player.stopVideo();
                });
            }
        } else {
            console.log({
                name: 'VideoPlayer Error',
                message: 'Cant find button or modal'
            });
        }
    }
}

new VideoModal();

( function( $ ) {
    $(document).on('ready', function(){
        var hero_height =  $(window).innerHeight();
        $('.m-hero').css('height', hero_height + 'px');
    });
} )( jQuery );