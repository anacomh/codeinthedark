/*
*	AJAX VOTE
*
*/

var vote_count = 0;
var can_vote = true;

$('.vote-link').on('click',function(e){

    //Prevent navigation to link
    e.preventDefault();

    if(can_vote == true){


        can_vote = false;
        vote_count++;
        setTimeout(function(){ can_vote = true;},5000);

        console.log(vote_count);

        $('.vote-link i').css({'transition':'5s'});
        $('.vote-link i').css({'transform':'rotateY('+(vote_count*1440)+'deg) translate(-50%,-50%)'});

        //Get href
        var href = $(this).attr('href');
        var round_id = $(this).attr('data-round-id');
        //Ajax request to the same href
        $.get(href,{'round_id':round_id},function(response){

        });
    }

});
