<?php

    class OptionsModel extends BaseModel{

        public function getAll(){
            $results= $this->database->getRows("SELECT * FROM options");
            $options = array();
            foreach($results as $result){
                $options[$result->option_key] = $result->option_value;
            }
            $options = (object) $options;
            return $options;
        }

        public function getOption($key){
            return $this->database->getSingleRow("SELECT * FROM options WHERE option_key = '$key'")->option_value;
        }

        public function setOption($key,$value){
            $this->database->query("UPDATE options SET option_value = '$value' WHERE option_key = '$key'");
        }

    }

 ?>
