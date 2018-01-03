var currentPlaylist = [];
var shufflePlaylist = [];
var tempPlaylist = [];
var audioElement;
var mouseDown = false;
var currentIndex = 0; //index bài hát hiện tại
var repeat = false;
var shuffle = false;
var userLoggedIn;


function formatTime(duration){
	var time = Math.round(duration); //làm tròn thời gian
	var phut = Math.floor(time / 60); //làm tròn xuống (thời gian / 60 = phut)
	var giay = time - (phut * 60); 
	var extraZero = (giay < 10)?"0":""; // nếu số giay nhỏ hơn 10 thì thêm số 0

	return phut + ":" + extraZero + giay;
}
function capNhatThoiGian(audio){
	$(".current").text(formatTime(audio.currentTime)); //Lấy thời gian hiện hành của bản nhạc trong audio
	$(".remaining").text(formatTime(audio.duration - audio.currentTime));

	var progress = audio.currentTime / audio.duration * 100;//lấy thời gian hiện tại chia cho thời gian bài hát * 100 để tính %;
	$(".playbackBar .progress").css("width", progress + "%");
}
function capnhatAmLuong(audio){
	var volume = audio.volume * 100;//lấy thời gian hiện tại * 100 để tính %;
	$(".volumeBar .progress").css("width", volume + "%");
	$(".volumeBarSong .progress").css("width", volume + "%");
}
function Audio() {

	this.currentlyPlaying;

	//tạo element audio
	this.audio = document.createElement('audio');
	//kết thúc bài hát sẽ sang bài hát kế tiếp
	this.audio.addEventListener("ended", function(){
		window.location.assign("album.php?id="+audioElement.currentlyPlaying.album)
	})

	//gọi class audio get duration bài hát
	this.audio.addEventListener("canplay", function(){
		var duration = formatTime(this.duration)
		$(".progressTime.remaining").text(duration);
	})

	this.audio.addEventListener("timeupdate", function(){
		if(this.duration){//nếu có thời gian nhạc
			capNhatThoiGian(this);// this = lấy đối tượng this.audio
		}
	})
	this.audio.addEventListener("volumechange", function(){
		capnhatAmLuong(this)
	})
	this.setTrack = function(track) {
		this.currentlyPlaying = track;
		this.audio.src = track.path;
	}

	this.play = function() {
		this.audio.play();
	}

	this.pause = function() {
		this.audio.pause();
	}

	this.setTime = function(seconds) {
		this.audio.currentTime = seconds; //set lại thời gian của bài hát 
	}
}