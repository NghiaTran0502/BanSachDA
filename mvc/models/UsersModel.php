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
            $test = md5($password);
            $query = "INSERT INTO userstable values(null, '$iUserName', '$test', '$role', '$fullname', '$gioitinh')";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }


        public function getSL(){
            $query = "SELECT * FROM userstable";
            $result = mysqli_query($this->con, $query);
            $temp = mysqli_num_rows($result);
            return json_encode($temp, JSON_PRETTY_PRINT);
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