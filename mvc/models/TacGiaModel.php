<?php
    class TacGiaModel extends DB{
        public function get_TacGia(){
            $query = "SELECT * FROM tacgiatable";
            $tac_gia =  mysqli_query($this->con, $query);
            $mang_TacGia = array();
            while($tac_gias =  mysqli_fetch_array($tac_gia)){
                $mang_TacGia[] = $tac_gias;
            }
            return json_encode($mang_TacGia, JSON_PRETTY_PRINT);
        }

        public function insertTacGia($iTacGia){
            $query = "INSERT INTO tacgiatable values(null, '$iTacGia')";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }

        public function deleteTacGia($idTacGia){
            $query = "DELETE FROM tacgiatable WHERE idTacGia = ".$idTacGia."";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }
    }

?>