video = document.querySelector(".video");
if(video){
    var video;
var display;

window.onload = function() {
	video = document.querySelector(".video");
    btnPause = document.querySelector('.main-video-pause');
    btnPlay = document.querySelector('.main-video-play');
};

function play() {
    btnPause.style.display = "block";
    btnPlay.style.display = "none";
    video.play();
}

function pause() {
    btnPause.style.display = "none";
    btnPlay.style.display = "block";
    video.pause();
}

function soundoff(){
    document.querySelector('.main-video__button-off').style.display = "none"
    document.querySelector('.main-video__button-on').style.display = "block"
    video.muted = true;
}

function soundon(){
    document.querySelector('.main-video__button-off').style.display = "block"
    document.querySelector('.main-video__button-on').style.display = "none"
    video.muted = false;
}
}