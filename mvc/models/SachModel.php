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

        public function get_Sach_one($idSach){
            $query = "SELECT idSach, maSach, tenSach, giaBan, theLoai, ngonNgu, soTrang, namPhatHanh, hinhAnh, tenTacGia, tenNhaXuatBan, TenNhomSach FROM sachtable s INNER JOIN tacgiatable tg ON
                        s.idTacGia = tg.idTacGia INNER JOIN nhaxuatbantable nxb ON
                        s.idNhaXuatBan = nxb.idNhaXuatban INNER JOIN nhomsachtable ns ON
                        s.idNhomSach = ns.idNhomSach WHERE idSach = ".$idSach."";
            $Sach =  mysqli_query($this->con, $query);
            $mang_Sach = array();
            while($Sachs =  mysqli_fetch_array($Sach)){
                $mang_Sach[] = $Sachs;
            }
            return json_encode($mang_Sach, JSON_PRETTY_PRINT);
        }

        public function findSach($maSachs){
            $query = "SELECT idSach, maSach, tenSach, giaBan, theLoai, ngonNgu, soTrang, namPhatHanh, hinhAnh, tenTacGia, tenNhaXuatBan, TenNhomSach FROM sachtable s INNER JOIN tacgiatable tg ON
                        s.idTacGia = tg.idTacGia INNER JOIN nhaxuatbantable nxb ON
                        s.idNhaXuatBan = nxb.idNhaXuatban INNER JOIN nhomsachtable ns ON
                        s.idNhomSach = ns.idNhomSach WHERE maSach like '%".$maSachs."%'";
            $Sach =  mysqli_query($this->con, $query);
            $mang_Sach = array();
            while($Sachs =  mysqli_fetch_array($Sach)){
                $mang_Sach[] = $Sachs;
            }
            return json_encode($mang_Sach, JSON_PRETTY_PRINT);
        }

        public function findSPPP($tenSach){
            $query = "SELECT idSach, maSach, tenSach, giaBan, theLoai, ngonNgu, soTrang, namPhatHanh, hinhAnh, tenTacGia, tenNhaXuatBan, TenNhomSach FROM sachtable s INNER JOIN tacgiatable tg ON
                        s.idTacGia = tg.idTacGia INNER JOIN nhaxuatbantable nxb ON
                        s.idNhaXuatBan = nxb.idNhaXuatban INNER JOIN nhomsachtable ns ON
                        s.idNhomSach = ns.idNhomSach WHERE tenSach like '%".$tenSach."%'";
            $Sach =  mysqli_query($this->con, $query);
            $mang_Sach = array();
            while($Sachs =  mysqli_fetch_array($Sach)){
                $mang_Sach[] = $Sachs;
            }
            return json_encode($mang_Sach, JSON_PRETTY_PRINT);
        }

        public function loginn($username, $password){
            $test = md5($password);
            $query = "SELECT * FROM userstable where userName = '".$username."' and passWords = '".$test."'";
            $result = mysqli_query($this->con, $query);
            $temp = mysqli_num_rows($result);
            $user = array();
            if($temp!=0){
                $users = mysqli_fetch_row($result);
                $_SESSION["username"] = $username;
                $_SESSION["name"] = $users[4];
                $_SESSION["role"] = $users[3];
                // echo $_SESSION["role"];
                // exit;
            }
            return json_encode($temp);
        }


        public function checked($username){
            $query = "SELECT * FROM userstable where userName = '".$username."'";
            
            $result = mysqli_query($this->con, $query);
            $temp = mysqli_num_rows($result);
            $result = false;
            if($temp>0){
                $result = true;
            }
            return json_encode($result);
        }

        public function phanHoi($name, $title, $phone, $mail, $body){
            $query = "INSERT INTO phanhoitable values(null, '$name', '$title', '$phone', '$mail', '$body')";
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }


        public function signUp($username, $password, $fullName, $gioiTinh){
            $test = md5($password);
            $query = "INSERT INTO userstable values (null, '$username', '$test', false, '$fullName', '$gioiTinh')";
            // print($query);
            // exit;
            $result = false;
            if(mysqli_query($this->con, $query)){
                $result = true;
            }
            return json_encode($result);
        }


        public $gio_hang = array();
        public function them_hang($idSach, $sl){
            $query = "SELECT idSach, maSach, tenSach, giaBan FROM sachtable  WHERE idSach = ".$idSach."";
            $Sach =  mysqli_query($this->con, $query);
            $mang_Sach = array();
            while($Sachs =  mysqli_fetch_array($Sach)){
                $mang_Sach[] = $Sachs;
            }
            //echo $gio_hang;
        }

        public function getSL(){
            $query = "SELECT idSach, maSach, tenSach, giaBan, theLoai, ngonNgu, soTrang, namPhatHanh, hinhAnh, tenTacGia, tenNhaXuatBan, TenNhomSach FROM sachtable s INNER JOIN tacgiatable tg ON
            s.idTacGia = tg.idTacGia INNER JOIN nhaxuatbantable nxb ON
            s.idNhaXuatBan = nxb.idNhaXuatban INNER JOIN nhomsachtable ns ON
            s.idNhomSach = ns.idNhomSach";
            $result = mysqli_query($this->con, $query);
            $temp = mysqli_num_rows($result);
            return json_encode($temp, JSON_PRETTY_PRINT);
        }
    }
?>