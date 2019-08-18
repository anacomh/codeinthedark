<?php

    class RoundsController extends BaseController{

        public function index(){
            $rounds_model = $this->loadModel('Rounds');
            $this->data('rounds', $rounds_model->getAll() );
            $this->data('rounds_distinct', $rounds_model->getRounds() );
            $this->view('rounds');
        }


        public function viewer(){
            $rounds_model = $this->loadModel('Rounds');
            $this->data('rounds', $rounds_model->turnViewer($this->id) );
            $this->redirect('rounds');

        }


        public function player(){
            $rounds_model = $this->loadModel('Rounds');
            $this->data('rounds', $rounds_model->turnPlayer($this->id) );
            $this->redirect('rounds');
        }

        public function search(){

          if(isset($_POST['search'])){

              $users_model = $this->loadModel('Rounds');
              $this->data( 'rounds' , $users_model->search( $_POST['search'] ) );

            }else{

              $this->redirect('rounds');

            }

            $this->view('rounds');
        }

        public function trash(){
            $rounds_model = $this->loadModel('Rounds');
            $rounds_model->trash( $this->id  );
            $this->redirect('rounds');

        }

        public function clean(){
            $rounds_model = $this->loadModel('Rounds');
            $rounds_model->clean();
            $this->redirect('rounds');
        }


        public function cleanround(){
            $rounds_model = $this->loadModel('Rounds');
            $rounds_model->cleanround($this->id);
            $this->redirect('rounds');
        }

    }


 ?>
