<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="form-control bg-warning mt-3 mb-3">
            <h1 class=" row justify-content-center">Danh Sách Sinh Viên</h1>
        </div>
        
        <div class="row justify-content-between">
            <p class="col-md-3">Danh sách</p>
            <a href="" style="border: 1px solid;" class="btn text-info col-md-2">Thêm</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th>id</th>
                <th>Tên Sinh Viên</th>
                <th>Email</th>
                <th>Ngày Sinh</th>
                <th>idLop</th>
                <th>Sửa</th>
                <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($listsv as $list){
                        ?>
                    <tr>
                        <th><?=$list->getId();?></th>
                        <td><?=$list->getTenSinhVien();?></td>
                        <td><?=$list->getEmail();?></td>
                        <td><?=$list->getNgaySinh();?></td>
                        <td><?=$list->getIdLop();?></td>
                        <td><a href=""><i class="bi bi-pencil-fill"></i></a></td>
                        <td><a class="text-danger" href='?ID= {<?=$list->getId();?>}'><i class="bi bi-trash3-fill"></i></a></td>
                    </tr>
                        <?php
                    }

                ?>
                <?php
                if(isset($_GET['ID'])){
                    $ID = $_GET['ID'];
                    $delete = "DELETE FROM SinhVien Where id = '$ID';";
                    if(mysqli_query($conn, $delete)){
                    echo "Xóa thành công";
                    } else{
                        echo "lỗi" .mysqli_error($conn);
                    }
                }
                ?>
            </tbody>
    </table>

    </div>

</body>
</html>