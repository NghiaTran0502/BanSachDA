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
        echo $kq;
    }
}
?>