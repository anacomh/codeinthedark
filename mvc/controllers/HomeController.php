<?php class HomeController extends BaseController{

      public function index(){

        $vote_model = $this->loadModel('Vote');
        $round = $vote_model->getCurrentRound();

        //$this->saveData('vote', $vote_model->getVoteVisibility($round->rounds_id) );

        //load View
        $this->loadView('home');
      }// Close index function

      public function citd2017(){
        //load View
        $this->loadView('home2017');
      }// Close index function

} ?>
