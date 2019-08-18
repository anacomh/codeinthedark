<?php

    class WallModel extends BaseModel{

        public function getAll(){
             return $this->database->getRows("SELECT * FROM users WHERE user_status=1 AND user_confirm=1 ORDER BY rand()");
             // adicionar where user CONFIRM
        }

        public function getEligiblePlayers(){

            $users =  $this->database->getRows("SELECT * FROM users WHERE user_status=1 AND user_confirm=1 AND user_id not in (SELECT round_users_user_id FROM round_users) ORDER BY rand()");

          return $users;

        }

        public function getCurrentRound() {
          return $this->database->getSingleRow("SELECT * FROM rounds ORDER BY rounds_id DESC LIMIT 1");
        }

        public function createRound($players){

          $rounds_count = $this->database->result("SELECT COUNT(*) as count FROM rounds");
          $round_number = $rounds_count->count + 1;

          $round_id = $this->database->insert("INSERT INTO rounds (rounds_number) VALUES ('$round_number')");

          foreach($players as $player){
            $this->database->insert("INSERT INTO round_users (round_users_round_id,round_users_user_id) VALUES ('$round_id','$player')");
          }

          return $round_id;

          /*foreach($players as $player){
              $this->database->
          }*/
        }


        public function createOrUpdateRound($round_number, $players){

          $round = $this->database->getSingleRow("SELECT rounds_id FROM rounds WHERE rounds_number = '$round_number'");
          $round_id = isset($round->rounds_id) ? $round->rounds_id : '';

          if($round_id == "")
          {
            $round_id = $this->database->insert("INSERT INTO rounds (rounds_number) VALUES ('$round_number')");
          } else {
            $this->database->query("DELETE FROM round_users WHERE round_users_round_id = $round_id");
          }

          foreach($players as $player){
            $this->database->insert("INSERT INTO round_users (round_users_round_id,round_users_user_id) VALUES ('$round_id','$player')");
          }

          return $round_id;
        }

        public function getWinner($round_id){
          return $this->database->getRows("SELECT * FROM round_users left join users on round_users.round_users_user_id = users.user_id WHERE round_users.round_users_round_id = '$round_id' ORDER BY round_users_votes DESC,round_users_last_vote  LIMIT 1");
        }

        public function generateFinal(){

            //$winners = $this->database->getRows("SELECT MAX(round_users_votes),round_users_user_id FROM round_users GROUP BY round_users_round_id");

            $rounds = $this->database->getRows("SELECT * FROM rounds LIMIT 0,4");
            $winners = array();
            foreach($rounds as $round){
                $winners[] = $this->database->getSingleRow("SELECT * FROM round_users JOIN users ON round_users_user_id = user_id WHERE round_users_round_id = '$round->rounds_id' ORDER BY round_users_votes DESC LIMIT 0,1");
            }

            $player_ids = array();
            foreach($winners as $winner){
                $player_ids[] = $winner->user_id;
            }

            $round_id = $this->createRound($player_ids);
            $this->database->query("UPDATE rounds SET round_final = 1 WHERE rounds_id = '$round_id' ");

            return $winners;

        }

    } // fecha a class

 ?>
