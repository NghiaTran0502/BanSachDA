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
    }
?>