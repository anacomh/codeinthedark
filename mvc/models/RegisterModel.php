<?php

    class RegisterModel extends BaseModel{

        public function create($name,$facebook,$email,$status){

          //Escape inserted values
          $name = $this->database->escape($name);
          $facebook = $this->database->escape($facebook);
          $email = $this->database->escape($email);
          $status = $this->database->escape($status);

          //Check if non of the required fields are empty
          if( $name == '' || $email == '' || $status == '' ){
              return array('error'=>1, 'msg' => 'Please fill out all required fields');
          }

          //Check if inserted email is a valid email address
          if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
              return array('error'=>2, 'msg' => 'Please insert a valid email address');
          }

          //Check if email already exists in database
          $email_check = $this->database->getRows("SELECT * FROM users WHERE user_email = '$email'");

          if(count($email_check) > 0){
             return array('error'=>3, 'msg' => 'The inserted email is already registered');
          }

          //Insert register data into DB
          $new_id = $this->database->insert("INSERT INTO users (user_name, user_facebook, user_email, user_status)
          VALUES ('$name',
                  '$facebook',
                  '$email',
                  '$status')"
          );

         return array('error'=>0, 'msg' => '');
        }


        public function getMessage(){
            if( !isset($_SESSION['register_msg']) ){
                return false;
            }

            return $_SESSION['register_msg'];
        }

        private function setMessage($message){
            if(!isset($_SESSION)){
                return;
            }

            $_SESSION['register_message'] = $message;

        }


      }// close model


 ?>
