<?php
class TrangBanSach extends Controller
{
    public $TrangBanSach;

    public function __construct()
    {
        $this->TrangBanSach = $this->model("SachModel");
    }

    function Showw()
    {
        $this->view("masterUser", [
            "page" => "TrangBanSachView",
            "Sach" => $this->TrangBanSach->get_Sach()
        ]);
    }

    public function chiTiet()
    {
        $un = $_POST['idSach'];
        // $kq = $this->TrangBanSach->get_Sach_one($un);
        $this->view("masterUser", [
            "page" => "chiTietView",
            "Sach" => $this->TrangBanSach->get_Sach_one($un)
        ]);
    }

    public function themGioHang()
    {
        $id =  (int) $_POST['idSach'];
        $sl = 2;
        $kq = $this->TrangBanSach->them_hang($id, $sl);
        echo $kq;
    }

    function getAPIBanSach()
    {
        $a = $this->TrangBanSach->get_Sach();
        echo $a;
    }

    public function login()
    {
        $username = $_POST["user"];
        $password = $_POST["pass"];
        $kq = $this->TrangBanSach->loginn($username, $password);
        if ($kq != 0)
            echo "Đăng nhập thành công!!!";
        else
            echo "Đăng nhập không thành công!!!!";
    }

    public function logout()
    {
        $_SESSION["name"] = null;
        $_SESSION["role"] = null;
    }
}
