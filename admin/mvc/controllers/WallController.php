<?php /**
 *
 */
class WallController extends BaseController
{

  public function index(){
      $wall_model = $this->loadModel('Wall');

      $round_number = $wall_model->getCurrentRound() != null ? $wall_model->getCurrentRound()->rounds_number + 1 : 1;
      $this->data('current_round', $round_number );

      $players = $wall_model->getEligiblePlayers();
      $this->data('players', $players );

      $this->view('wall','wallheader','wallfooter');
  }

  public function timer(){
    $wall_model = $this->loadModel('Wall');
    $users_model = $this->loadModel('Users');

    $round = $wall_model->getCurrentRound();

    $this->data('current_round', $round->rounds_number );
    $this->data('users', $users_model->getUsersByRound($round->rounds_id) );
    $final = $round->round_final === 1 ? 1 : 0;
    $this->data('final',$final);

    $this->view('timer','wallheader','wallfooter');
  }

  public function vote(){

    $wall_model = $this->loadModel('Wall');
    $users_model = $this->loadModel('Users');
    $options_model  = $this->loadModel('Options');

    $round = $wall_model->getCurrentRound();

    $this->data('current_round', $round->rounds_number );
    $this->data('users', $users_model->getUsersByRound($round->rounds_id) );

    $final = $round->round_final === 1 ? 1 : 0;
    $this->data('final',$final);
    $this->data('max_votes',$options_model->getOption('max_votes'));

    $this->view('timerVote','wallheader','wallfooter');
  }

  public function winner(){
    $wall_model = $this->loadModel('Wall');
    $round = $wall_model->getCurrentRound();
    $round_id = $round->rounds_id;

    $round_number = $round->rounds_number;
    //var_dump($round_id);
    $this->data('winner', $wall_model->getWinner($round_id) );
    $this->data('current_round', $round->rounds_number );
    $final = $round->round_final === 1 ? 1 : 0;
    $this->data('final',$final);
    $this->view('timerWinner','wallheader','wallfooter');
  }

  public function createRound(){
    $wall_model = $this->loadModel('Wall');
    $round_id = $wall_model->createOrUpdateRound( $_POST['round'], $_POST['players'] );
    echo json_encode($round_id);
  }

  public function updateScore(){
    $wall_model = $this->loadModel('Wall');
    $users_model = $this->loadModel('Users');


    $round = $wall_model->getCurrentRound();

    $users = $users_model->getUsersByRound($round->rounds_id);

    echo json_encode($users);
  }

  public function generateFinal(){

     $wall_model = $this->loadModel('Wall');
     $players = $wall_model->generateFinal();
    /* $this->data('players',$players);

     $round_number = $wall_model->getCurrentRound()->rounds_number;
     $this->data('current_round', $round_number );

     $this->view('wallFinal','wallheader','wallfooter');*/

     header('location:'.BASE_URL.'admin/wall/final');

  }

  public function final(){

      $wall_model = $this->loadModel('Wall');
      $round_number = $wall_model->getCurrentRound()->rounds_number;
      $this->data('current_round', $round_number );

      $round = $wall_model->getCurrentRound();
      $players = $this->loadModel('Users')->getUsersByRound($round->rounds_id);
      $this->data('players',$players);

      $this->view('wallFinal','wallheader','wallfooter');

  }

}

?>
