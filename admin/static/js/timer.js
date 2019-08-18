var interval;
var timer;
var currentTime;
var minutes;
var seconds;

function startTimer(duration){
  timer = duration, minutes, seconds;
  clearInterval(interval);
  interval = setInterval(function (){
    minutes = parseInt(timer / 60, 10);
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    $('#timer').html(minutes + ":" + seconds);

    if(--timer < 0){
      socket.emit('change-page', 'vote' );
      clearInterval(interval);
      $.get(base_url+'admin/socket/turnvoteoff',function(){
      });
    }
  }, 1000);
}

function resumeTimer(currentTime){
  clearInterval(interval);
  interval = setInterval(function (){
    minutes = parseInt(timer / 60, 10);
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    $('#timer').html(minutes + ":" + seconds);

    if(--timer < 0){
      socket.emit('change-page', 'vote' );
      clearInterval(interval);
      $.get(base_url+'/admin/socket/turnvoteoff',function(){
      });
    }
  }, 1000);

}

$('#stop').click(function(){
  currentTime = timer;
  clearInterval(interval);
});

$('#resume').click(function(){
  resumeTimer(currentTime);
});

// start battle
$('#start').click(function(){
  var fifteenMin = 60 * 15;
  startTimer(fifteenMin);
});

// start vote battle
$('#start-vote').click(function(){
  $.get(base_url+'/admin/socket/turnvoteon',function(){});
  var fifteenMin = 60 * 2;
  startTimer(fifteenMin);
});

$('#stop-vote').click(function(){
  $.get(base_url+'/admin/socket/turnvoteoff',function(){});
  currentTime = timer;
  clearInterval(interval);
});

$('#resume-vote').click(function(){
  $.get(base_url+'/admin/socket/turnvoteon',function(){});
  resumeTimer(currentTime);
});

$('#finish').click(function(e){
  e.preventDefault();
   var href = $(this).attr('href');
  $.get(base_url+'/admin/socket/turnvoteoff',function(){
      window.location = href;
  });


});
