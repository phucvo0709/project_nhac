$(document).ready(function() {
    var newPlaylist = {$jsonArray};
    audioElement = new Audio();
    console.log(audioElement)
    setTrack(newPlaylist[0], newPlaylist, false);
    capnhatAmLuong(audioElement.audio)
    $(".nhac-dang-choi").on("mousedown touchstart mousemove touchmove", function(e){
        e.preventDefault();
    })
    $(".playbackBar .progressBar").mousedown(function(){
        mouseDown = true; //cho phép đặt chuột xuống
    });
    $(".playbackBar .progressBar").mousemove(function(e){
        if(mouseDown == true){ // Nếu cho phép đặt chuột xuống
            //đặt lại thời gian của bài hát, tùy thuộc vào vị trí của chuột
            datLaiThoiGian(e, this);
        }
    });
    $(".playbackBar .progressBar").mouseup(function(e){
            datLaiThoiGian(e, this);
    })


    $(".volumeBar .progressBar").mousedown(function(){
        mouseDown = true; //cho phép đặt chuột xuống
    });
    $(".volumeBar .progressBar").mousemove(function(e){
        if(mouseDown == true){ 
            datLaiAmThanh(e, this);
        }
    });
    $(".volumeBar .progressBar").mouseup(function(e){
            datLaiAmThanh(e, this);
    })


    $(document).mouseup(function(){
            mouseDown = false; 
    });
});

function datLaiAmThanh(mouse, progressBar){
    var percentage = mouse.offsetX / $(progressBar).width();
        if(percentage >= 0 && percentage <= 1){
                audioElement.audio.volume = percentage;
        }
}

function datLaiThoiGian(mouse, progressBar){ //mouse = , progressBar = this
    var percentage = mouse.offsetX / $(progressBar).width() * 100; //Tính phần trăm
    var seconds = audioElement.audio.duration * (percentage/100); //Tính số giay bằng thời gian bài hát * (phần trăm/100)
    audioElement.setTime(seconds); //Gọi set phương thức lại thời gian trong script.js
}
function prevSong(){
    if(audioElement.audio.currentTime>=5 || currentIndex == 0){
        audioElement.setTime(0);
    }else{
        currentIndex = currentIndex-1;
        setTrack(currentPlaylist[currentIndex], currentPlaylist, true)
    }
}
function nextSong() {
    if(repeat == true) {
        audioElement.setTime(0);
        playSong();
        return;
    }

    if(currentIndex == currentPlaylist.length - 1) {
        currentIndex = 0;
    }
    else {
        currentIndex++;
    }

    var trackToPlay = shuffle ? shufflePlaylist[currentIndex] : currentPlaylist[currentIndex];
    setTrack(trackToPlay, currentPlaylist, true);
}
function setRepeatSong(){
    //Nếu repeat = true thì repeat trong function = false và ngược lại
    repeat = !repeat;
    var imageRepeat = repeat ? "repeat-active.png":"repeat.png";
    $(".repeat img").attr("src","images/icons/"+imageRepeat);
}
function setMute(){
    audioElement.audio.muted = !audioElement.audio.muted;
    var imageMute = audioElement.audio.muted ? "volume-mute.png":"volume.png";
    $(".volume img").attr("src","images/icons/"+imageMute);
}
function setShuffle(){
    shuffle = !shuffle;
    var imageNgauNhien = shuffle?"shuffle-active.png":"shuffle.png";
    $(".shuffle img").attr("src","images/icons/"+imageNgauNhien);
    console.log(shufflePlaylist)
    console.log(currentPlaylist)
    if(shuffle == true){
        //Ngẫu nhiên bài hát trong playlist
        shuffleArray(shufflePlaylist);
        currentIndex = shufflePlaylist.indexOf(audioElement.currentlyPlaying.id);
    }else{
        currentIndex = currentPlaylist.indexOf(audioElement.currentlyPlaying.id);
    }

}
function shuffleArray(a) {
    var j, x, i;
    for (i = a.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        x = a[i];
        a[i] = a[j];
        a[j] = x;
    }
}

function setTrack(trackId, newPlaylist, play) {
    if(newPlaylist != currentPlaylist) {
        currentPlaylist = newPlaylist;
        shufflePlaylist = currentPlaylist.slice();
        shuffleArray(shufflePlaylist);
    }

    if(shuffle == true) {
        currentIndex = shufflePlaylist.indexOf(trackId);
    }
    else {
        currentIndex = currentPlaylist.indexOf(trackId);
    }
    pauseSong();

    $.post("models/ajax/getSongJson.php", { songId: trackId }, function(data) {

        var track = JSON.parse(data);
        $(".trackNameBar span").text(track.tenBaiHat);

        $.post("models/ajax/getCaSiJson.php", { artistId: track.caSi }, function(data) {
                var artist = JSON.parse(data)
                $(".artistNameBar").text(artist.tenCaSi);
        });
        $.post("models/ajax/getAlbumJson.php", { albumId: track.album }, function(data) {
                var album = JSON.parse(data)
                $('.albumImg').attr("src", album.artworkPath);
        });
        audioElement.setTrack(track);
        playSong();
        if(play == true) {
            playSong();
        }
    });

}
function playSong() {
    if(audioElement.audio.currentTime == 0) {
        $.post("models/ajax/updateLuotNgheJson.php", { songId: audioElement.currentlyPlaying.id });
    }

    $(".controlButton.play").hide();
    $(".controlButton.pause").show();
    audioElement.play();
}
function pauseSong() {
    $(".controlButton.play").show();
    $(".controlButton.pause").hide();
    audioElement.pause();
}