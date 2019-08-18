<?php
    class SocketModel extends BaseModel{
      public function getCurrentRound() {
        return $this->database->getSingleRow("SELECT * FROM `rounds` ORDER BY rounds_number DESC limit 1");
      }

      public function turnVoteOn($round_id){
        //var_dump($round_id);
        //exit;
          $this->database->query("UPDATE round_users SET round_users_votes_vis = 1 WHERE round_users_round_id = '$round_id'");
      }

      public function turnVoteOff($round_id){

        $this->database->query("UPDATE round_users SET round_users_votes_vis = 0 WHERE round_users_round_id = '$round_id'");
      }



    }

 ?>
