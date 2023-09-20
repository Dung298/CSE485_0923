<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

                <img style="height: 100px;" class="p-3" src="../img/logo.png" alt="">

                <ul class="nav flex-column">
                    <?php
                        for($i = 1;$i<10;$i++)
                        {
                            ?>
                            <li class="nav-item p-3">
                                <i class="fa fa-user  d-inline text-warning"></i>
                                <a class="nav-link text-dark p-0  d-inline" href="#">UserUser</a>
                                <i class="fas fa-caret-right d-inline text-warning"></i>
                            </li>
                            <?php
                        }
                    ?>
                  
                </ul>

            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-11">
                        <div class="row justify-content-between p-3">
                            <div class="Dashboard d-inline col-md-4">
                                <i class="fas fa-bars d-inline fa-2x px-2"></i>
                                <h2 class="d-inline" >Dashboard</h2>
                            </div>

                            <div class="searchh d-inline col-md-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> <i class="bi bi-search"></i> </span>
                                <input type="text" class="form-control" placeholder="Tìm Kiếm" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>



                        <div class="filter">
                            <div class="row justify-content-between p-3">
                                <div class="d-inline col-md-2">
                                    
                                    <p class="d-inline text-warning" >Filter</p>
                                </div>

                                <div class="d-inline col-md-2">
                                <i style="float: right;" class="bi bi-chevron-up bg-warning rounded-circle mr-2"></i>
                                </div>
                            </div>
                        </div>
                            <div class="row align-items-center">
                                <div class="form-group col-md-3">
                                    <input type="email" class="form-control" id="email" placeholder="Nhập email">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <input type="number" class="form-control" id="number" placeholder="Nhập số">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <select class="form-control" id="select">
                                        <?php
                                            for($i=1;$i<10;$i++)
                                            {
                                              
                                            
                                                echo "<option value='option1'>Lựa chọn " .$i. "</option>";
                                                
                                            }
                                        ?>

                                    </select>
                                </div>
                                
                                <button style="height: 40px; width: 100px;" type="button" class="btn btn-warning col-md-2 btn-sm mx-2 px-3">Delete</button>
                                <button style="height: 40px; width: 100px;" type="button" class="btn btn-warning col-md-2 btn-sm mx-2 px-3">Add user</button>

                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Full name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Gender					
                                        <th scope="col">Groups</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Date Of Birth</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            for($i=1;$i<10;$i++)
                                            {
                                                ?>
                                                <tr>
                                                <th scope="row">NguyenVanHung</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>
                                                    <i class="bi bi-record-fill text-warning"></i>
                                                </td>
                                                <td>
                                                    <i class="bi bi-shield-shaded"></i>
                                                    <i class="bi bi-pen"></i>
                                                    <i class="bi bi-trash3"></i>
                                                </td>
                                                
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                    </table>


                            </div>


                    </div>

                    <div class="col-md-1">

                    </div>
                </div>

            </div>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>