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

    function findSP(){
        $tenSach = $_POST['findSPs'];
        if($tenSach==null||$tenSach==""){
            $this->view("masterUser", [
                "page" => "TrangBanSachView",
                "Sach" => $this->TrangBanSach->get_Sach()
            ]);
        }
        else{
            $this->view("masterUser", [
                "page" => "TrangBanSachView",
                "Sach" => $this->TrangBanSach->findSPPP($tenSach)
            ]);
        }
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

    public function guiPhanHoi(){
        $na = $_POST["nas"];
        $tis = $_POST["til"];
        $sdt = $_POST["sd"];
        $mai = $_POST["ma"];
        $bod = $_POST["b"];
        $kq = $this->TrangBanSach->phanHoi($na, $tis, $sdt, $mai, $bod);
        if ($kq != false)
            echo "Gửi thành công!";
        else
            echo "Gửi không thành công!!!!";
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

    public function che()
    {
        $username = $_POST["user"];
        $kq = $this->TrangBanSach->checked($username);
        echo $kq;
        
    }

    public function signUp(){
        $username = $_POST["user"];
        $password = $_POST["pass"];
        $names = $_POST["fullName"];
        $gioitinh = $_POST["gioiTinh"];
        // print($names);
        // exit;
        $kq = $this->TrangBanSach->signUp($username, $password, $names, $gioitinh);
        if ($kq != false)
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
