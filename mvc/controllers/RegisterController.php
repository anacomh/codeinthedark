<?php

    class RegisterController extends BaseController{

      public function index(){

          //Load Model Users
          $register_model = $this->loadModel('Register');

          // // See if it's returnig correctly the $_POST values
          // echo $_POST['name'];
          // echo '<br>';
          // echo $_POST['facebook'];
          // echo '<br>';
          // echo $_POST['email'];
          // echo '<br>';
          // echo $_POST['status'];

          // See if it was set
          if(!isset($_POST['name'])){
              $this->redirect('home');
          }

          $message = $register_model->create( $_POST['name'], $_POST['facebook'], $_POST['email'], $_POST['status'] );
          echo json_encode($message);


      }

  }



 ?>
