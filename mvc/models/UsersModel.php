<?php
    class UsersModel extends DB{
        public function get_Users(){
            $query = "SELECT * FROM userstable";
            $user =  mysqli_query($this->con, $query);
            $mang_user = array();
            while($Users =  mysqli_fetch_array($user)){
                $mang_user[] = $Users;
            }
            return json_encode($mang_user, JSON_PRETTY_PRINT);
        }

        public function insertUsers($iUserName, $password, $role, $fullname, $gioitinh){
            $query = "INSERT INTO userstable values(null, '$iUserName', '$password', '$role', '$fullname', '$gioitinh')";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }

        // public function deleteNXB($idNXB){
        //     $query = "DELETE FROM nhaxuatbantable WHERE idNhaXuatBan = ".$idNXB."";
        //     $result = false;
        //     if(mysqli_query($this->con, $query)){
        //         $result = true;
        //     }
        //     return json_encode($result);
        // }
    }

?>