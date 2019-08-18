<?php


    class User{

        private $database;
        private $auth;
        private $details;

        //Constructor
        public function __construct($database){

            $this->database = $database;

            $this->checkAuth();

        }

        //Login Try
        public function login($username,$password){

            $username = $this->database->escape($username);
            // $password = hash('sha256',$this->database->escape($password));
            // Há de deixar o password com criptografia (anah)
            $password = $this->database->escape($password);

            $user = $this->database->getSingleRow("SELECT * FROM login WHERE login_email = '$username' AND login_pass = '$password' ");

            if( count($user) > 0 ){
                $_SESSION['admin-username'] = $user->login_email;
                return true;
            }else{
                return false;
            }


        }

        //Check if user is authenticated
        private function checkAuth(){
            if(isset($_SESSION['admin-username'])){
                $this->auth =  true;
                $this->fetchUserDetails();
            }else{
                $this->auth = false;
            }
        }

        //Return if user is authenticated
        public function isAuth(){
            return $this->auth;
        }

        //Get user details from DB
        private function fetchUserDetails(){
            $this->details = $this->database->getSingleRow("SELECT * FROM login WHERE login_email = '".$_SESSION['admin-username']."'");
        }

        //Get user getDetails
        public function getDetails(){
            return $this->details;
        }




    }



?>
