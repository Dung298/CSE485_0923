<?php 
 include "./Models/Lop.php";
class LopServices{
   
    private $ListLop;
    private $dem;
    //khởi tạo lấy dữ liệu 
    public function __construct(){
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");
        $sql = "select * from Lop";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        $this->ListLop = [];
        while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
           
            $Lop = new Lop($row['id'],$row['tenLop']);
            $this->ListLop[] = $Lop;

        }



    }

    public function getAllLop(){
        return $this->ListLop;
    }


    
    

}