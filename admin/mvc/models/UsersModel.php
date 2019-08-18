<?php

    class UsersModel extends BaseModel{

        public function getAll(){
             return $this->database->getRows("SELECT * FROM users where user_trash = 0");
        }

        public function turnViewer($id){
            $id = $this->database->escape($id);
            $this->database->query("UPDATE users SET user_status = 0 WHERE user_id = '$id' ");
        }

        public function turnPlayer($id){
            $id = $this->database->escape($id);
            $this->database->query("UPDATE users SET user_status = 1 WHERE user_id = '$id' ");
        }

        public function confYes($id){
            $id = $this->database->escape($id);
            $this->database->query("UPDATE users SET user_confirm = 0 WHERE user_id = '$id' ");
        }

        public function confNo($id){
            $id = $this->database->escape($id);
            $this->database->query("UPDATE users SET user_confirm = 1 WHERE user_id = '$id' ");
        }

        public function drawnYes($id){
            $id = $this->database->escape($id);
            $this->database->query("UPDATE users SET user_drawn = 1 WHERE user_id = '$id' ");
        }

        public function drawnNo($id){
            $id = $this->database->escape($id);
            $this->database->query("UPDATE users SET user_drawn = 0 WHERE user_id = '$id' ");
        }


        public function search( $search ){
          return $this->database->getRows("SELECT * FROM users WHERE ( user_name LIKE '%$search%' OR user_email LIKE '%$search%' ) AND user_trash = 0");
        }

        public function getDetail($id){
            $id = $this->database->escape($id);
            return $this->database->getSingleRow("SELECT * FROM users WHERE user_id = '$id'");
        }

        public function trash($id){
            $id = $this->database->escape($id);
            $this->database->query("UPDATE users SET user_trash = 1 WHERE user_id = '$id' ");
        }

        public function update($id,$name,$email,$facebook,$image){
          $id = $this->database->escape($id);

          if($image['error'] == 0 ){
            $image_name = '';
            //File temporary name
            $temp_name = $image['tmp_name'];
            //Get file extension
            $file_parts = explode('.', $image['name']);
            $file_extension = strtolower($file_parts[count($file_parts) - 1] );
            //Create the file name
            $image_name = 'user'.$id.'.'.$file_extension;

            //Folder name
            $folder_name = MEDIA_URL;

            //Move file
            move_uploaded_file($temp_name, '../static/media/'.$image_name);

            $this->database->query("UPDATE users SET user_pic = '$image_name' WHERE user_id = '$id' ");

          }

          $this->database->query("UPDATE users SET user_name = '$name', user_email = '$email',  user_facebook = '$facebook' WHERE user_id = '$id' ");
        }

        public function create(){
          $new_id = $this->database->insert("INSERT INTO users VALUES ()");
          return $new_id;
        }

        public function hide($id){
            // $id = $this->database->escape($id);
            // $this->database->query("UPDATE users SET book_visible = 0 WHERE book_id = '$id' ");
        }

        public function show($id){
            // $id = $this->database->escape($id);
            // $this->database->query("UPDATE users SET book_visible = 1 WHERE book_id = '$id' ");

        }

        public function getUsersByRound($round_id)
        {
          return $this->database->getRows("SELECT * FROM round_users left join users on round_users.round_users_user_id = users.user_id WHERE round_users.round_users_round_id = '$round_id'");
        }

        public function countUsers(){
            return $this->database->getSingleRow("SELECT COUNT(*) as count FROM users WHERE user_trash = 0")->count;
        }

        public function countViewers(){
            return $this->database->getSingleRow("SELECT COUNT(*) as count FROM users WHERE user_trash = 0 AND user_status = 0")->count;
        }


        public function countPlayers(){
            return $this->database->getSingleRow("SELECT COUNT(*) as count FROM users WHERE user_trash = 0 AND user_status = 1")->count;
        }

        public function countConfirmed(){
            return $this->database->getSingleRow("SELECT COUNT(*) as count FROM users WHERE user_trash = 0 AND user_status = 1 AND user_confirm = 1")->count;
        }

    }

 ?>
