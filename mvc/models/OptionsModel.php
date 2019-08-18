<?php

    class OptionsModel extends BaseModel{

        public function getOption($key){
            return $this->database->getSingleRow("SELECT * FROM options WHERE option_key = '$key'")->option_value;
        }

    }

 ?>
