<?php
    class SachModel extends DB{
        public function get_Sach(){
            $query = "SELECT idSach, maSach, tenSach, giaBan, theLoai, ngonNgu, soTrang, namPhatHanh, hinhAnh, tenTacGia, tenNhaXuatBan, TenNhomSach FROM sachtable s INNER JOIN tacgiatable tg ON
                        s.idTacGia = tg.idTacGia INNER JOIN nhaxuatbantable nxb ON
                        s.idNhaXuatBan = nxb.idNhaXuatban INNER JOIN nhomsachtable ns ON
                        s.idNhomSach = ns.idNhomSach";
            $Sach =  mysqli_query($this->con, $query);
            $mang_Sach = array();
            while($Sachs =  mysqli_fetch_array($Sach)){
                $mang_Sach[] = $Sachs;
            }
            return json_encode($mang_Sach, JSON_PRETTY_PRINT);
        }

        public function insertNXB($iMaSach, $iTenSach, $iGiaBan, $iNhaXuatBan, $iTacGia, $iTheLoai, $iNgonNgu, $iSoTrang, $iNamPhatHanh, $iHinhAnh, $iNhomSach){
            $query = "INSERT INTO sachtable values(null, '$iMaSach', '$iTenSach', '$iGiaBan', '$iNhaXuatBan', '$iTacGia', '$iTheLoai', '$iNgonNgu', '$iSoTrang', '$iNamPhatHanh', '$iHinhAnh', '$iNhomSach')";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }

        public function deleteSach($idSach){
            $query = "DELETE FROM sachtable WHERE idSach = ".$idSach."";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }
    }

?>