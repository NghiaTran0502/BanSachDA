
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
            "Nhom_sach" => $this->Nhom_sach->get_Nhomsach()
        ]);
    }
}
?>