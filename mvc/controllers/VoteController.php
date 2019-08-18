<?php class VoteController extends BaseController{

      public function index(){
        $vote_model = $this->loadModel('Vote');
        // save data for view
        //var_dump($vote_model->getPlayer($this->id));
        //die();
        $round = $vote_model->getCurrentRound();

        if(is_object($round)){
            $this->saveData('players', $vote_model->getPlayers($round->rounds_id) );
            $this->saveData('current_round', $vote_model->getCurrentRound());
        }

        //load View
        $this->loadView('round');
      }// Close index function

      public function winner(){

          $vote_model = $this->loadModel('Vote');

          if( !$vote_model->winnerExists() ){
              header('location:'.BASE_URL.'vote');
          }

          $round = $vote_model->getCurrentRound();
          $round_id = $round->rounds_id;
          $round_number = $round->rounds_number;
          $this->saveData('winner', $vote_model->getWinner($round_id) );
          $this->saveData('current_round', $round->rounds_number );
          $final = $round->round_final === 1 ? 1 : 0;
          $this->saveData('final',$final);

          //load View
          $this->loadView('winner');

      }// Close index function

      public function addVote(){
        $vote_model = $this->loadModel('Vote');
        $options_model = $this->loadModel('Options');
        $vote_model->addVote( $this->id, $_GET['round_id'], $options_model->getOption('max_votes') );
        //$this->saveData('vote', $vote_model->addVote($this->id,$_GET['round_id']), $options_model->getOption('max_votes') );
        //header('Location:'.BASE_URL.'vote');
      }

} ?>
