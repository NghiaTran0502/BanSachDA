<?php

class AdminSach extends Controller{
    public $NXB;
    public $TacGia;
    public $NhomSach;
    public $Sach;

    public function __construct()
    {
        $this->NXB = $this->model("NXBModel");
        $this->TacGia = $this->model("TacGiaModel");
        $this->NhomSach = $this->model("NhomSachModel");
        $this->Sach = $this->model("SachModel");
    }

    public function Show(){
        $this->view("masterAdmin",[
            "page" =>"viewSach",
            "NXB" => $this->NXB->get_NXB(),
            "Nhom_sach" => $this->NhomSach->get_Nhomsach(),
            "Tac_gia" => $this->TacGia->get_TacGia(),
            "Sach" => $this->Sach->get_Sach(),
            "kq" => false,
            "thongBao"=>""
        ]);
    }

    public function find(){
        $maSach = $_POST['maSach'];
        $this->view("masterAdmin",[
            "page" =>"viewSach",
            "NXB" => $this->NXB->get_NXB(),
            "Nhom_sach" => $this->NhomSach->get_Nhomsach(),
            "Tac_gia" => $this->TacGia->get_TacGia(),
            "Sach" => $this->Sach->findSach($maSach),
            "kq" => false,
            "thongBao"=>""
        ]);
    }

    public function DeleteSach(){
        $un = $_POST["unn"];
        $kq = $this->Sach->deleteSach($un);
        if($kq==true)
            echo "Xoá thành công!!!";
        else
            echo "Xoá không thành công!!!!";
    }

    public function insertSach(){
        if(isset($_POST["them"])){
            $maSach = $_POST["maSach"];
            $ngonNgu = $_POST["ngonNgu"];
            $theLoai = $_POST["theLoai"];
            $tenSach = $_POST["tenSach"];
            $giaBan = $_POST["giaBan"];
            $tacGia = $_POST["tacGia"];
            $NXB = $_POST["NXB"];
            $nhomSach = $_POST["nhomSach"];
            $soTrang = $_POST["soTrang"];
            $namPhatHanh = $_POST["namPhatHanh"];
            $hinhAnh = $_FILES["hinhAnh"];
        }
        $file_temp = $hinhAnh['tmp_name'];
        $file_name = $hinhAnh['name'];
        $time = date("Y").date("M").date("D").date("H").date("i").date("s");
        $location = $_SERVER['DOCUMENT_ROOT']."/bansachda/public/images/".$time.$file_name;
        move_uploaded_file($file_temp, $location);

        $kq = $this->Sach->insertNXB($maSach, $tenSach, $giaBan, $NXB, $tacGia, $theLoai, $ngonNgu, $soTrang, $namPhatHanh, $time.$file_name, $nhomSach);
        $this->view("masterAdmin",[
            "page" =>"viewSach",
            "NXB" => $this->NXB->get_NXB(),
            "Nhom_sach" => $this->NhomSach->get_Nhomsach(),
            "Tac_gia" => $this->TacGia->get_TacGia(),
            "Sach" => $this->Sach->get_Sach(),
            "kq" => false,
            "thongBao"=>""
        ]);
    }

    public function show_API_Sach(){
        echo $this->Sach->get_Sach();
    }
}

?>