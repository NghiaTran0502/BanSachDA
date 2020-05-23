
<?php

class AdminNhomSach extends Controller
{
    public $Nhom_sach;

    public function __construct()
    {
        $this->Nhom_sach = $this->model("NhomSachModel");
    }

    function Show()
    {
        $this->view("masterAdmin", [
            "page" => "viewNhomSach",
            "Nhom_sach" => $this->Nhom_sach->get_Nhomsach(),
            "kq" => false,
            "thongBao" =>""
        ]);
    }

    function insertSach(){
        if(isset($_POST["insert"])){
            $nhomsach = $_POST["nhomSach"];
        }
        $kq = $this->Nhom_sach->insertNhomSach($nhomsach);
        $this->view("masterAdmin", [
            "page" => "viewNhomSach",
            "Nhom_sach" => $this->Nhom_sach->get_Nhomsach(),
            "kq" => $kq,
            "thongBao" =>"Thêm thành công!"
        ]);
    }

    function deleteSach(){
        $un = $_POST["unn"];
        $kq = $this->Nhom_sach->deleteNhomSach($un);
        echo $kq;
        // $this->view("masterAdmin", [
        //     "page" => "viewNhomSach",
        //     "Nhom_sach" => $this->Nhom_sach->get_Nhomsach(),
        //     "kq" => false,
        //     "thongBao" =>""
        // ]);
    }


}
?>