<?php

    class HomeController extends BaseController{

        public function index(){
          $users_model = $this->loadModel('Users');
          $this->data('users_count',$users_model->countUsers());
          $this->data('viewers_count',$users_model->countViewers());
          $this->data('players_count',$users_model->countPlayers());
          $this->data('confirmed_count',$users_model->countConfirmed());
          $this->data('users', $users_model->getAll() );
          $this->view('users');
        }

    }


 ?>
