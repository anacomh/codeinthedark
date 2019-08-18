
var socket = io.connect('https://dark-socket.herokuapp.com');

socket.on('connect', function() {
    console.log('Client has connected to the server!');
});


 $('#start-vote,#resume-vote,#stop-vote').click(function(){
     setTimeout(function(){
         socket.emit('change-page', 'vote' );
     },500);
 });

 $('#finish').click(function(){
     setTimeout(function(){
         socket.emit('change-page', 'vote/winner' );
     },500);
 });

$('#round-start').click(function(e){
    e.preventDefault();
    var href = $(this).attr('href');
    socket.emit('change-page', 'vote' );
    setTimeout(function(){
        window.location = href;
    },500);

});
