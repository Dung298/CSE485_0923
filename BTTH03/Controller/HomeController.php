<?php 

class HomeCotroller{

    public function indexLop(){
        include "./Services/LopServices.php";

        $listL = new LopServices();

        $listL->getAllLop();

        include "./Views/Views.php";
    }

    public function indexSinhVien(){
        include "./Services/SinhVienServices.php";

        $list = new SinhVienServices();

       $listsv=  $list->getAllSinhVien();

        include "./Views/Views.php";
    }
}