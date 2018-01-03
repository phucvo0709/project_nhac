<?php
/* Smarty version 3.1.30, created on 2017-11-05 07:41:45
  from "C:\wamp64\www\project_nhac\smarty\templates\body\song.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fec0b9db5e74_71552405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e232d1d3b7979c220949a30075946b9bfcd0047' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\smarty\\templates\\body\\song.tpl',
      1 => 1509867700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fec0b9db5e74_71552405 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/script_song.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function() {
    var id = <?php echo $_smarty_tpl->tpl_vars['doc_bai_hat']->value->id;?>
;
    audioElement = new Audio();
    setTrack(id, false);
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


    $(".volumeBarSong .progressBar").mousedown(function(){
        mouseDown = true; //cho phép đặt chuột xuống
    });
    $(".volumeBarSong .progressBar").mousemove(function(e){
        if(mouseDown == true){ 
            datLaiAmThanh(e, this);
        }
    });
    $(".volumeBarSong .progressBar").mouseup(function(e){
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
function nextSong() {
    if(repeat == true) {
        audioElement.setTime(0);
        playSong();
        return;
    }
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


function setTrack(trackId, newPlaylist, play) {
    
    pauseSong();
    $.post("models/ajax/getSongJson.php", { songId: trackId }, function(data) {

        var track = JSON.parse(data);
        
        $(".trackNameBar span").text(track.tenBaiHat);
        $(".trackView span").text("Lượt nghe: "+track.luotNghe);
        $.post("models/ajax/getCaSiJson.php", { artistId: track.caSi }, function(data) {
                var artist = JSON.parse(data)
                
                $(".artistNameBar a").text(artist.tenCaSi);
                $(".artistNameBar a").attr("href", "casi.php?id="+artist.id);
                $('.albumImg').attr("src", artist.anhCaSi);
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
                                    <img class="albumImg" src="https://zmp3-photo-2.zadn.vn/thumb/240_240/avatars/7/3/73688444a73a76169d03b689a7e785cf_1404904575.jpg" alt="album">
                                    </span>
                                    <div class="item-right">
                                        <span class="trackView">
                                                <span>1000</span>
                                        </span>
                                        <span class="dangBoi">
                                            Đăng bởi: <a href="thanh_vien.php?id=<?php echo $_smarty_tpl->tpl_vars['doc_bai_hat']->value->dangBoi;?>
"><?php echo $_smarty_tpl->tpl_vars['thanhVien']->value->ten;?>
</a>
                                        </span>
                                    </div>
                                    <div class="trackInfoBar">
                                        <span class="trackNameBar">
                                            <span>Nhạc</span> 
                                            <?php if (isset($_SESSION['phanQuyen'])) {?>
                                                <?php if ($_SESSION['dangBoi'] == $_smarty_tpl->tpl_vars['dangBoi']->value) {?>
                                                    <a href="sua.php?id=<?php echo $_smarty_tpl->tpl_vars['doc_bai_hat']->value->id;?>
&caSi=<?php echo $_smarty_tpl->tpl_vars['doc_bai_hat']->value->caSi;?>
&album=<?php echo $_smarty_tpl->tpl_vars['doc_bai_hat']->value->album;?>
&theLoai=<?php echo $_smarty_tpl->tpl_vars['doc_bai_hat']->value->theLoai;?>
" class="fa fa-pencil-square-o"></a>
                                                <?php }?>
                                                <?php if ($_SESSION['phanQuyen'] == '1') {?>
                                                    <a href="xoa_bai_hat.php?id=<?php echo $_smarty_tpl->tpl_vars['doc_bai_hat']->value->id;?>
" class="fa fa-trash"></a>
                                                <?php }?>
                                            <?php }?>
                                        </span>
                                        <span class="artistNameBar">
                                            <a href="casi.php">Ca sĩ</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="bar-nhac-giua col-12">
                                <div class="content playerControls">
                                    <div class="buttons">
                                        <button class="controlButton repeat" onclick="setRepeatSong()" title="Lặp lại bài hát">
                                            <img src="public/images/icons/repeat.png" alt="Lặp lại bài hát">
                                        </button>
                                        <button class="controlButton play" onclick="playSong()" title="Nghe nhạc">
                                            <img src="public/images/icons/play.png" alt="Nghe nhạc">
                                        </button>
                                        <button class="controlButton pause" title="Tạm dừng" onclick="pauseSong()" style="display: none;">
                                            <img src="public/images/icons/pause.png" alt="Tạm dừng">
                                        </button>
                                        <div class="volumeBarSong">
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
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="item_lien_quan">
                <h2 class="title_item_bai_hat w3-text-teal">Bài hát cùng thể loại</h2>
                <ul class="w3-ul w3-card-4">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lien_quan_the_loai']->value, 'lqtl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lqtl']->value) {
?>
                    <li class="w3-bar">
                        <a href="song.php?id=<?php echo $_smarty_tpl->tpl_vars['lqtl']->value->id;?>
"><i class="fa fa-play w3-bar-item w3-circle w3-hide-small" aria-hidden="true" style="width:85px"></i></a>
                    <div class="w3-bar-item">
                        <a class="item_bai_hat" href="bai-hat/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['lqtl']->value->tenBaiHat);?>
/<?php echo $_smarty_tpl->tpl_vars['lqtl']->value->id;?>
.htm"><?php echo $_smarty_tpl->tpl_vars['lqtl']->value->tenBaiHat;?>
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
            <div class="item_lien_quan">
                <h2 class="title_item_bai_hat w3-text-teal">Bài hát cùng ca sĩ</h2>
                <ul class="w3-ul w3-card-4">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lien_quan_ca_si']->value, 'lqcs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lqcs']->value) {
?>
                    <li class="w3-bar">
                        <a href="song.php?id=<?php echo $_smarty_tpl->tpl_vars['lqcs']->value->id;?>
"><i class="fa fa-play w3-bar-item w3-circle w3-hide-small" aria-hidden="true" style="width:85px"></i></a>
                    <div class="w3-bar-item">
                         <a class="item_bai_hat" href="bai-hat/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['lqcs']->value->tenBaiHat);?>
/<?php echo $_smarty_tpl->tpl_vars['lqcs']->value->id;?>
.htm"><?php echo $_smarty_tpl->tpl_vars['lqcs']->value->tenBaiHat;?>
</a><br>
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
    <?php }
}
