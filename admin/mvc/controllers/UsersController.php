<?php

    class UsersController extends BaseController{

        public function index(){
            $users_model = $this->loadModel('Users');
            $this->data('users_count',$users_model->countUsers());
            $this->data('viewers_count',$users_model->countViewers());
            $this->data('players_count',$users_model->countPlayers());
            $this->data('confirmed_count',$users_model->countConfirmed());
            $this->data('users', $users_model->getAll() );
            $this->view('users');
        }


        public function viewer(){
            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->turnViewer($this->id) );
            $this->redirect('users');

        }


        public function player(){
            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->turnPlayer($this->id) );
            $this->redirect('users');
        }

        public function confirm(){
            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->confYes($this->id) );
            $this->redirect('users');
        }

        public function noconfirm(){
            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->confNo($this->id) );
            $this->redirect('users');
        }

        public function confirma(){
            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->confYes($this->id) );
            $this->redirect('users/detail/'.$this->id);
        }

        public function noconfirma(){
            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->confNo($this->id) );
            $this->redirect('users/detail/'.$this->id);
        }

        public function drawn(){
            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->drawnYes($this->id) );
            $this->redirect('users');
        }

        public function nodrawn(){
            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->drawnNo($this->id) );
            $this->redirect('users');
        }

        public function lucky(){
            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->drawnYes($this->id) );
            $this->redirect('users/detail/'.$this->id);
        }

        public function nolucky(){
            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->drawnNo($this->id) );
            $this->redirect('users/detail/'.$this->id );
        }


        public function search(){

          if(isset($_POST['search'])){

              $users_model = $this->loadModel('Users');
              $this->data( 'users' , $users_model->search( $_POST['search'] ) );

            }else{

              $this->redirect('users');

            }

            $this->view('users');
        }

        public function detail(){

            $users_model = $this->loadModel('Users');
            $this->data('users', $users_model->getDetail( $this->id) );
            $this->view('usersDetail');

        }

        public function trash(){
            $users_model = $this->loadModel('Users');
            $users_model->trash( $this->id  );
            $this->redirect('users');

        }

        public function update(){

            //Load Model Users
            $users_model = $this->loadModel('Users');
            if(isset($_POST['name'])){
            $users_model->update( $this->id,$_POST['name'],$_POST['email'],$_POST['facebook'],$_FILES['image'] );}
            $this->redirect('users');
        }

        public function create(){

            $users_model = $this->loadModel('Users');
            $new_id = $users_model->create();
            $this->redirect('users/detail/'.$new_id);
        }

    }


 ?>
