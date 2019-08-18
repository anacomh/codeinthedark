
var socket = io.connect('https://dark-socket.herokuapp.com');

socket.on('connect', function() {
    console.log('Client has connected to the server!');
});

socket.on('change-page', function(msg){
  window.location = '?page='+msg;
});
