<?php


    class LoginController extends BaseController{

        public function index(){

            $this->view('login',false,false);

        }

        public function login(){

            if( $this->user->login($_POST['username'],$_POST['password']) == true ){
                $this->redirect('users');
            }else{
                $this->redirect('login');
            }

        }

        public function logout(){

            unset($_SESSION['admin-username']);
            $this->redirect('login');

        }

    }



 ?>
