<?php
/* Smarty version 3.1.30, created on 2017-11-06 18:16:09
  from "/home/wikicach/public_html/smarty/templates/body/album.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a004479a58cf0_33143145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fa148e10f1c45d6f4b8d477c2cb8a50715e2007' => 
    array (
      0 => '/home/wikicach/public_html/smarty/templates/body/album.tpl',
      1 => 1509966967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a004479a58cf0_33143145 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/script.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function() {
    var newPlaylist = <?php echo $_smarty_tpl->tpl_vars['jsonArray']->value;?>
;
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
    $(".repeat img").attr("src","public/images/icons/"+imageRepeat);
}
function setMute(){
    audioElement.audio.muted = !audioElement.audio.muted;
    var imageMute = audioElement.audio.muted ? "volume-mute.png":"volume.png";
    $(".volume img").attr("src","public/images/icons/"+imageMute);
}
function setShuffle(){
    shuffle = !shuffle;
    var imageNgauNhien = shuffle?"shuffle-active.png":"shuffle.png";
    $(".shuffle img").attr("src","public/images/icons/"+imageNgauNhien);
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
        $(".trackNameBar a").attr("href", "song.php?id="+track.id);
        $(".trackView span").text("Lượt nghe: "+track.luotNghe);
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                $(".playerControls").css("display", "none");
	            $(".playerMobile").css("display", "block");
	            $(".playerMobile audio").attr("src", track.path);
        }
        $.post("models/ajax/getCaSiJson.php", { artistId: track.caSi }, function(data) {
                var artist = JSON.parse(data)
                $(".artistNameBar a").text(artist.tenCaSi);
                $(".artistNameBar a").attr("href", "casi.php?id="+artist.id);
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
<?php echo '</script'; ?>
>
    <div class="wrapper-page">
        <div class="wrap-body container">
            <div class="row">
                <div class="bar-nhac col-12 col-lg-8">
                    <div class="nhac-dang-choi">
                        <div class="row">
                            <div class="bar-nhac-trai col-12 col-sm-6 col-md-12 col-lg-12">
                                <div class="content">
                                    <span class="albumLink">
                                    <img class="albumImg" src="<?php echo $_smarty_tpl->tpl_vars['hien_thi']->value->artworkPath;?>
" alt="album">
                                    </span>
                                    <div class="item-right">
                                        <span class="trackView">
                                                <span>Chưa có bài hát</span>

                                        </span>
                                        <span class="dangBoi">
                                            Đăng bởi: <a href="thanh_vien.php?id=<?php echo $_smarty_tpl->tpl_vars['hien_thi']->value->dangBoi;?>
"><span> <?php echo $_smarty_tpl->tpl_vars['thanhVien']->value->ten;?>
</span></a>
                                        </span><br>
                                        <?php if (isset($_SESSION['phanQuyen'])) {?>
                                            <?php if ($_SESSION['dangBoi'] == $_smarty_tpl->tpl_vars['dangBoi']->value) {?>
                                                <a href="them.php" class="fa fa-plus"></a>
                                                <a href="sua_album.php?id=<?php echo $_smarty_tpl->tpl_vars['hien_thi']->value->id;?>
&caSi=<?php echo $_smarty_tpl->tpl_vars['hien_thi']->value->caSi;?>
&theLoai=<?php echo $_smarty_tpl->tpl_vars['hien_thi']->value->theLoai;?>
" class="fa fa-pencil-square-o"></a>
                                            <?php }?>
                                            <?php if ($_SESSION['phanQuyen'] == '1') {?>
                                                <a href="xoa_album.php?id=<?php echo $_smarty_tpl->tpl_vars['hien_thi']->value->id;?>
" class="fa fa-trash"></a>
                                            <?php }?>
                                        <?php }?>
                                    </div>
                                    <div class="trackInfoBar">
                                        <span class="trackNameBar">
                                            <a href="#"><span><?php echo $_smarty_tpl->tpl_vars['hien_thi']->value->tenAlbum;?>
</span></a>
                                        </span>
                                        <span class="artistNameBar">
                                            <a href="casi.php?id=<?php echo $_smarty_tpl->tpl_vars['hien_thi']->value->caSi;?>
"><?php echo $_smarty_tpl->tpl_vars['hien_thi']->value->tenCaSi;?>
</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="bar-nhac-giua col-12 col-sm-6 col-md-8 col-lg-8">
                                <div class="content playerControls">
                                    <div class="buttons">
                                        <button class="controlButton shuffle" onclick="setShuffle()" title="Ngẫu nhiên bài hát">
                                            <img src="public/images/icons/shuffle.png" alt="Ngẫu nhiên bài hát">
                                        </button>
                                        <button class="controlButton previous" onclick="prevSong()" title="Quay lại">
                                            <img src="public/images/icons/previous.png" alt="Quay lại">
                                        </button>
                                        <button class="controlButton play" onclick="playSong()" title="Nghe nhạc">
                                            <img src="public/images/icons/play.png" alt="Nghe nhạc">
                                        </button>
                                        <button class="controlButton pause" title="Tạm dừng" onclick="pauseSong()" style="display: none;">
                                            <img src="public/images/icons/pause.png" alt="Tạm dừng">
                                        </button>
                                        <button class="controlButton next" onclick="nextSong()" title="Tiếp theo">
                                            <img src="public/images/icons/next.png" alt="Tiếp theo">
                                        </button>
                                        <button class="controlButton repeat" onclick="setRepeatSong()" title="Lặp lại bài hát">
                                            <img src="public/images/icons/repeat.png" alt="Lặp lại bài hát">
                                        </button>
                                    </div>
                                    <div class="playbackBar">
                                        <span class="progressTime current">0:00</span>
                                        <div class="progressBar">
                                            <div class="progressBarbg">
                                                <div class="progress"></div>
                                            </div>
                                        </div>
                                        <span class="progressTime remaining">0:00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bar-nhac-phai col-2 col-md-4 col-lg-4">
                                <div class="volumeBar">
                                    <button class="controlButton volume" onclick="setMute()" title="Âm lượng">
                                        <img src="public/images/icons/volume.png" alt="Âm lượng">
                                    </button>
                                    <div class="progressBar">
                                        <div class="progressBarbg">
                                            <div class="progress">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content playerMobile" style="margin:10px 10px 5px 10px; display:none";>
                        <audio controls>
                          <source src="" type="audio/mpeg">
                          Your browser does not support the audio element.
                        </audio>
                    </div>
                    <ul class="danh-sach-nhac">
                        <li>
                            <div class="item-danh-sach">
                                <div class="row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_bai_hat']->value, 'dbh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dbh']->value) {
?>
                                    <div class="col-12 col-sm-8 col-md-10 col-lg-10">
                                        <h3 class="title-item" onclick='setTrack("<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
",<?php echo $_smarty_tpl->tpl_vars['jsonArray']->value;?>
,true)'>
                                                <span><?php echo $_smarty_tpl->tpl_vars['dbh']->value->tenBaiHat;?>
</span>
                                        </h3>
                                    </div>
                                    <div class="ca-si-danh-sach col-sm-4 col-md-2 col-lg-2">
                                        <p class="singer-name">
                                               <i class="fa fa-headphones fa-1"><?php echo $_smarty_tpl->tpl_vars['dbh']->value->luotNghe;?>
</i>
                                               <?php if (isset($_SESSION['phanQuyen'])) {?>
                                                    <?php if ($_SESSION['phanQuyen'] == '1') {?>
                                                        <a href="album.php?delete=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
&id=<?php echo $_smarty_tpl->tpl_vars['hien_thi']->value->id;?>
" class="fa fa-trash"></a>
                                                    <?php }?>
                                                <?php }?>
                                        </p>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php echo '<script'; ?>
>
                                tempPlaylist = <?php echo $_smarty_tpl->tpl_vars['jsonArray']->value;?>

                                <?php echo '</script'; ?>
>
                                </div>
                            </div>  
                        </li>
                    </ul>
                </div>
                <div class="item_lien_quan">
                <h2 class="title_item_bai_hat w3-text-teal">Album cùng thể loại</h2>
                <ul class="w3-ul w3-card-4">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lien_quan_the_loai']->value, 'lqtl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lqtl']->value) {
?>
                    <li class="w3-bar">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['lqtl']->value->artworkPath;?>
" class="w3-bar-item w3-circle w3-hide-small" style="width:86px">
                    <div class="w3-bar-item">
                        <a class="item_bai_hat" href="playlist/<?php echo $_smarty_tpl->tpl_vars['lqtl']->value->id;?>
/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['lqtl']->value->tenAlbum);?>
.htm"><?php echo $_smarty_tpl->tpl_vars['lqtl']->value->tenAlbum;?>
</a><br>
                        <a class="item_ca_si" href="casi.php?id=<?php echo $_smarty_tpl->tpl_vars['lqtl']->value->caSi;?>
"><?php echo $_smarty_tpl->tpl_vars['lqtl']->value->tenCaSi;?>
</a>
                    </div>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            </div>
        </div>
    </div><?php }
}
