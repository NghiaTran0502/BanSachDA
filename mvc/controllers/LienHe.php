<?php
    class LienHe extends Controller{
        function Show(){
            $this->view("masterUser",[
                "page"=>"lienHeView"
            ]);
        }
    }
?>