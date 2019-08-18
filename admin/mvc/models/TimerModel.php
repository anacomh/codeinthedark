<?php

    class TimerModel extends BaseModel{

        public function getAll(){
             return $this->database->getRows("SELECT * FROM users WHERE user_status=1 ORDER BY rand()");
        }
    } // fecha a class

 ?>
