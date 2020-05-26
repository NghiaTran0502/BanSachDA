
<?php

class AdminNXB extends Controller
{
    public $NXB;

    public function __construct()
    {
        $this->NXB = $this->model("NXBModel");
    }

    function Show()
    {
        $this->view("masterAdmin", [
            "page" => "viewNXB",
            "NXB" => $this->NXB->get_NXB(),
            "kq" => false,
            "thongBao" =>""
        ]);
    }

    function insertNXB(){
        if(isset($_POST["insert"])){
            $NXB = $_POST["NXB"];
        }
        $kq = $this->NXB->insertNXB($NXB);
        $this->view("masterAdmin", [
            "page" => "viewNXB",
            "NXB" => $this->NXB->get_NXB(),
            "kq" => $kq,
            "thongBao" =>"Thêm thành công!"
        ]);
    }

    function deleteNXB(){
        $un = $_POST["unn"];
        $kq = $this->NXB->deleteNXB($un);
        if($kq==true)
            echo "Xoá thành công!!!";
        else
            echo "Xoá không thành công!!!!";
    }

    function showAPINXB(){
        echo $this->NXB->get_NXB();
    }
}
?>