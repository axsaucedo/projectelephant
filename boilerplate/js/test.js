window.onload = function(){

var gotStream = function(stream) {
  var audioContext = 'AudioContext' in window ? new AudioContext() :
    (('webkitAudioContext' in window) ? new webkitAudioContext() : null);
  if (audioContext) {
  	alert('ok');
    var mediaStreamSource = audioContext.createMediaStreamSource(stream);
    mediaStreamSource.connect(audioContext.destination);
  } else {
  	alert('not');
  }
}

navigator.webkitGetUserMedia({audio:true}, gotStream);

};