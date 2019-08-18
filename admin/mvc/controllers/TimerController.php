<?php class TimerController extends BaseController {

  public function index(){
    $wall_model = $this->loadModel('Wall');
    $users_model = $this->loadModel('Users');

    $round = $wall_model->getCurrentRound();
    $final = $round->round_final === 1 ? 1 : 0;
    $this->data('final',$final);

    $this->data('current_round', $round->rounds_number );
    $this->data('users', $users_model->getUsersByRound($round->rounds_id) );

    $this->view('timer','wallheader','wallfooter');
  }

  public function vote(){
    $this->view('timerVote','wallheader','wallfooter');
  }

  public function winner(){
    $this->view('timerWinner','wallheader','wallfooter');
  }



}

?>
