<?php class VoteModel extends BaseModel{

  public function getCurrentRound() {
    return $this->database->getSingleRow("SELECT * FROM `rounds` ORDER BY rounds_number DESC limit 1");
  }

    public function getUsersByRound($round_id) {
      return $this->database->getRows("SELECT * FROM users WHERE user_id in (SELECT round_users_user_id FROM round_users WHERE round_users_round_id = '$round_id')");
    }


    //get name and pic from DB
    public function getPlayers($id){
      return $this->database->getRows(
        "SELECT * FROM round_users left join users on round_users.round_users_user_id = users.user_id WHERE round_users.round_users_round_id = '$id'"
      );
    }

    public function updateUsersVisibilityByRound($round_id, $visibility)
    {
      $this->database->query("UPDATE round_users set round_users_votes_vis = '$visibility' WHERE round_users_round_id = '$round_id'");
    }

    public function getVoteVisibility($round_id)
    {
      return $this->database->getRows("SELECT round_users_votes_vis from round_users WHERE round_users_round_id = '$round_id' limit 1");
    }

    public function addVote( $id , $round_id, $max_votes = 666 ){

     $round = $this->database->getSingleRow("SELECT * FROM round_users WHERE round_users_round_id = '$round_id' ANd round_users_user_id = '$id'");

     if($round->round_users_votes_vis != 1){
         return;
     }

     $now = date('Y-m-d H:i:s');

      $sql = "
          UPDATE
              round_users
          SET
              round_users_votes = CASE WHEN round_users_votes < '$max_votes' THEN round_users_votes + 1 ELSE '$max_votes' END
          WHERE
              round_users_user_id = '$id' AND round_users_round_id = '$round_id' AND round_users_votes_vis = 1
      ";

       $this->database->query($sql);

       $this->database->query("UPDATE round_users SET  round_users_last_vote = '$now' WHERE round_users_user_id = '$id' AND round_users_round_id = '$round_id' AND round_users_votes_vis = 1");


    }

    /*
    * Copied from admin wall model
    */
    /*public function getCurrentRound() {
      return $this->database->getSingleRow("SELECT * FROM rounds ORDER BY rounds_id DESC LIMIT 1");
    }*/

    public function getWinner($round_id){
      return $this->database->getRows("SELECT * FROM round_users left join users on round_users.round_users_user_id = users.user_id WHERE round_users.round_users_round_id = '$round_id' ORDER BY round_users_votes DESC LIMIT 1");
    }

    public function winnerExists(){
        $round = $this->getCurrentRound();

        $users = $this->database->getRows("SELECT * FROM round_users WHERE round_users_round_id = '$round->rounds_id' AND round_users_votes > 0 AND round_users_votes_vis = 0");

        if(count($users) > 0){
            $is_winner = true;
        }else{
            $is_winner = false;
        }

        return $is_winner;
    }

    public function teste(){

    $sql = "
        UPDATE
            round_users
        SET
            round_users_votes = CASE WHEN round_users_votes < 25 THEN round_users_votes + 1 ELSE 25 END
        WHERE round_users_id = 2795
    ";

    $this->database->query($sql);

    $user = $this->database->getSingleRow("SELECT * FROM round_users WHERE round_users_id = 2795");
    print_r($user);
    }


  } //SELECT rounds_number FROM rounds order by rounds_id DESC LIMIT 1





?>
