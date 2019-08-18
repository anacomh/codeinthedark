var socket = io.connect('https://dark-socket.herokuapp.com');

socket.on('connect', function() {
    console.log('Client has connected to the server!');
});

$('.voting_page').click(function(){

    socket.emit('voting_count', $(this).attr('data-page') );

    $('.page-button').removeClass('active-button');
    $(this).addClass('active-button');

});
