<?php
    class gioHang{
        private $idSach;
        private $giaSach;
        private $soLuong;
        private $thanhTien;


        public function __construct($idsach, $giasach, $soluong)
        {
            $this->idSach = $idsach;
            $this->giaSach = $giasach;
            $this->soLuong = $soluong;
            $this->thanhTien = $giasach*$soluong;
        }

        public function getThanhtien(){
            return $this->thanhTien;
        }

        public function setThanhTien($giasach, $soluong){
            $this->thanhTien = $giasach*$soluong;
        }

        public function getGiaSach(){
            return $this->giaSach;
        }

        public function setGiaSach($giasach){
            $this->giaSach = $giasach;
        }

        public function getSoLuong(){
            return $this->soLuong;
        }
        

        public function setSoLuong($soluong){
            $this->soLuong = $soluong;
        }

        public function getIDSach(){
            return $this->idSach;
        }

        public function setIDSach($idsach){
            $this->idSach = $idsach;
        }
    }
?>