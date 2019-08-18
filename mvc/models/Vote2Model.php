SELECT rounds_number FROM rounds order by rounds_id DESC LIMIT 1

SELECT * FROM users
WHERE user_id in (
    SELECT round_users_user_id FROM round_users
WHERE round_users_round_id = (SELECT rounds_id FROM rounds order by rounds_id DESC LIMIT 1)


)


<?php

  class VoteModel extends BaseModel{
    //get name and pic from DB
    public function vote($id){

     return $this->database->getRows("
      SELECT * FROM users
      WHERE user_id in (SELECT round_users_user_id FROM round_users
      WHERE round_users_round_id = (SELECT rounds_id FROM rounds ORDER BY rounds_id
      DESC LIMIT 1
    ))
     ");

      }

      public function getCurrentRound() {
        $rounds_count = $this->database->result("SELECT COUNT(*) as count FROM rounds");
        $round_number = $rounds_count->count + 1;
        return $round_number;
      }


    }


    //SELECT rounds_number FROM rounds order by rounds_id DESC LIMIT 1
?>
