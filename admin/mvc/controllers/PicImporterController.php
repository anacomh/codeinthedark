<?php

    class PicImporterController extends BaseController{

        public function index(){

        $users_model = $this->loadModel('Users');
        $this->data('users', $users_model->getAll());

        $this->view('pic_importer');



        }

    }


 ?>
