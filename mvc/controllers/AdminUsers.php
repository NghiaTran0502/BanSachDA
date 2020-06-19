
<?php

class AdminUsers extends Controller
{
    public $Users;

    public function __construct()
    {
        $this->Users = $this->model("UsersModel");
    }

    function Show()
    {
        $this->view("masterAdmin", [
            "page" => "viewUsers",
            "Users" => $this->Users->get_Users(),
            "kq" => false,
            "thongBao" =>""
        ]);
    }

    function insertUser(){
        if(isset($_POST["them"])){
            $userName = $_POST["userName"];
            $passWord = $_POST["passWord"];
            $name = $_POST["fullName"];
            $role = $_POST["role"];
            $sex = $_POST["sex"];
        }
        $kq = $this->Users->insertUsers($userName, $passWord, $role, $name, $sex);
        $this->view("masterAdmin", [
            "page" => "viewUsers",
            "Users" => $this->Users->get_Users(),
            "kq" => $kq,
            "thongBao" =>"Thêm thành công!"
        ]);
    }

    function getCount(){
        $kq = $this->Users->getSL();
        echo $kq;
    }

    // function deleteNXB(){
    //     $un = $_POST["unn"];
    //     $kq = $this->NXB->deleteNXB($un);
    //     if($kq==true)
    //         echo "Xoá thành công!!!";
    //     else
    //         echo "Xoá không thành công!!!!";
    // }

    function showAPIUsers(){
        echo $this->Users->get_Users();
    }
}
?>