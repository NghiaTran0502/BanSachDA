<?php
    class NhomSachModel extends DB{
        public function get_Nhomsach(){
            $query = "SELECT * FROM nhomsachtable";
            $nhom_sach =  mysqli_query($this->con, $query);
            $mang_NhomSach = array();
            while($nhom_sachs =  mysqli_fetch_array($nhom_sach)){
                $mang_NhomSach[] = $nhom_sachs;
            }
            return json_encode($mang_NhomSach, JSON_PRETTY_PRINT);
        }

        public function insertNhomSach($iNhomSach){
            $query = "INSERT INTO nhomsachtable values(null, '$iNhomSach')";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }

        public function deleteNhomSach($idNhomSach){
            $query = "DELETE FROM nhomsachtable WHERE idNhomSach = ".$idNhomSach."";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }


        public function getSL(){
            $query = "SELECT * FROM nhomsachtable";
            $result = mysqli_query($this->con, $query);
            $temp = mysqli_num_rows($result);
            return json_encode($temp, JSON_PRETTY_PRINT);
        }
    }

?>