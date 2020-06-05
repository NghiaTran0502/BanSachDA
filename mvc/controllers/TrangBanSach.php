<?php
    class TrangBanSach extends Controller{
        public $TrangBanSach;

        public function __construct()
        {
            $this->TrangBanSach = $this->model("SachModel");
        }

        function Showw(){
            $this->view("masterUser",[
                "page" => "TrangBanSachView",
                "Sach" => $this->TrangBanSach->get_Sach()
            ]);
        }

        public function chiTiet(){
            $un = $_POST['idSach'];
            // $kq = $this->TrangBanSach->get_Sach_one($un);
            $this->view("masterUser",[
                "page" => "chiTietView",
                "Sach" => $this->TrangBanSach->get_Sach_one($un)
            ]);
        }

        public function themGioHang(){
            $id =  (int)$_POST['idSach'];
            $sl = 2;
            $kq = $this->TrangBanSach->them_hang($id, $sl);
            echo $kq;
        }
    }
?>