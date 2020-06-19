<?php
    class NXBModel extends DB{
        public function get_NXB(){
            $query = "SELECT * FROM nhaxuatbantable";
            $NXB =  mysqli_query($this->con, $query);
            $mang_NXB = array();
            while($NXBs =  mysqli_fetch_array($NXB)){
                $mang_NXB[] = $NXBs;
            }
            return json_encode($mang_NXB, JSON_PRETTY_PRINT);
        }

        public function insertNXB($iNXB){
            $query = "INSERT INTO nhaxuatbantable values(null, '$iNXB')";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }

        public function deleteNXB($idNXB){
            $query = "DELETE FROM nhaxuatbantable WHERE idNhaXuatBan = ".$idNXB."";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }

        public function getSL(){
            $query = "SELECT * FROM nhaxuatbantable";
            $result = mysqli_query($this->con, $query);
            $temp = mysqli_num_rows($result);
            return json_encode($temp, JSON_PRETTY_PRINT);
        }
    }

?>