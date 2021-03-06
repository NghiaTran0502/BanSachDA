<?php
class AdminTacGia extends Controller
{
    public $Tac_gia;

    public function __construct()
    {
        $this->TacGia = $this->model("TacGiaModel");
    }

    function ShowTacGia()
    {
        $this->view("masterAdmin", [
            "page" => "viewTacGia",
            "Tac_gia" => $this->TacGia->get_TacGia(),
            "kq" => false,
            "thongBao" =>""
        ]);
    }


    function insertData(){
        if(isset($_POST["insert"])){
            $tacgia = $_POST["tacGia"];
        }
        $kq = $this->TacGia->insertTacGia($tacgia);
        $this->view("masterAdmin", [
            "page" => "viewTacGia",
            "Tac_gia" => $this->TacGia->get_TacGia(),
            "kq" => $kq,
            "thongBao" =>"Success!!"
        ]);
    }

    function deleteTacGia(){
        $un = $_POST["idTG"];
        $kq = $this->TacGia->deleteTacGia($un);
        if($kq==true)
            echo "Xoá thành công!!!";
        else
            echo "Xoá không thành công!!!!";
    }

    public function showAPII(){
        echo $this->TacGia->get_TacGia();
    }

    function getCount(){
        $kq = $this->TacGia->getSL();
        echo $kq;
    }
}
?>