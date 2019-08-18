<?php

    class SocketController extends BaseController{

        public function index(){
          $this->view('socket','header','footer');
        }

        public function turnVoteOn(){

          $socket_model = $this->loadModel('Socket');
          //
          $round = $socket_model->getCurrentRound();
          $round_id = $round->rounds_id;
          //var_dump($round);
          //exit;
          $this->data('voteon', $socket_model->turnVoteOn($round_id) );
          $this->view('socket');
        }

        public function turnVoteOff(){

          $socket_model = $this->loadModel('Socket');
          //
          $round = $socket_model->getCurrentRound();
          $round_id = $round->rounds_id;
          //var_dump($round);
          //exit;
          $this->data('voteoff', $socket_model->turnVoteOff($round_id) );
          $this->view('socket');
        }



    }


 ?>
