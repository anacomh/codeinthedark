<?php

    class RoundsModel extends BaseModel{

        public function getAll(){
             return $this->database->getRows("SELECT users.user_id, users.user_name, users.user_status, users.user_pic, round_users.round_users_votes, rounds.rounds_id, rounds.rounds_number FROM users INNER JOIN round_users ON users.user_id=round_users.round_users_user_id JOIN rounds ON rounds.rounds_id=round_users.round_users_round_id WHERE user_trash=0 ORDER BY rounds_number");
        }

        public function getRounds(){
             return $this->database->getRows("SELECT DISTINCT rounds_number, rounds_id FROM rounds");
        }

        public function turnViewer($id){
            $id = $this->database->escape($id);
            $this->database->query("UPDATE users SET user_status = 0 WHERE user_id = '$id' ");
        }

        public function turnPlayer($id){
            $id = $this->database->escape($id);
            $this->database->query("UPDATE users SET user_status = 1 WHERE user_id = '$id' ");
        }

        public function search($search){
          return $this->database->getRows("SELECT users.user_name, users.user_status, users.user_pic, rounds.rounds_number, round_users.round_users_votes FROM users JOIN round_users ON users.user_id=round_users.round_users_user_id JOIN rounds ON rounds.rounds_id=round_users.round_users_round_id WHERE user_trash = 0 AND rounds_number != 0 AND (user_name LIKE '%$search%')");
        }

        public function trash($id){
            $id = $this->database->escape($id);
            $this->database->query("UPDATE users SET user_trash = 1 WHERE user_id = '$id' ");
        }

        public function clean(){
            $this->database->query("DELETE FROM rounds");
            $this->database->query("DELETE FROM round_users ");
        }

        public function cleanround($id){
            $id = $this->database->escape($id);
            $this->database->query("DELETE FROM rounds WHERE rounds_id = '$id' ");
            $this->database->query("DELETE FROM round_users WHERE round_users_round_id = '$id' ");
        }

        public function createFinal(){
          return $this->database->getRows("SELECT * FROM round_users left join users on round_users.round_users_user_id = users.user_id WHERE round_users.round_users_round_id = '$round_id' ORDER BY round_users_votes DESC LIMIT 1");
        }

    }

 ?>
