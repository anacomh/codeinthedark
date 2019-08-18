<?php

    class OptionsController extends BaseController{

        public function index(){

            $options_model = $this->loadModel('Options');
            $this->data('options',$options_model->getAll());
            $this->view('options');
        }

        public function save(){
            $options_model = $this->loadModel('Options');
            if( isset($_POST['options']) && is_array($_POST['options']) ){
                foreach($_POST['options'] as $key=>$value){
                    $options_model->setOption($key,$value);
                }
            }
            header('location:'.BASE_URL.'admin/options/');
        }

    }


 ?>
