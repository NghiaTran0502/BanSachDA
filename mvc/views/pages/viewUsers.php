<h2>Quản lý tài khoản</h2>
<?php
$kq = $data["kq"];
$thongBao = $data["thongBao"];
if ($kq != false) {
?>
    <div class="alert-message" id="failSignIn">
        <p class="alert alert-danger">
            <?php
            echo $thongBao;
            ?>
        </p>
    </div>
<?php
}
?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="" method="post">
                    <fieldset style="border: 1px solid #55efc4; padding: 10px; border-radius:10px">
                        <legend style="width: auto; border:0; color: #555;">Action</legend>
                        <div class="row" id="Book">
                            <div class="col-2">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                    Thêm mới
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-4" id="us">
                <div class="card text-center bg-primary">
                    <ul class="list-group list-group-flush">
                        <li style="font-size: 20px" class="list-group-item">Tổng số user</li>
                        <li style="font-size: 30px" class="list-group-item" id="countUser">10</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 20px">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Sex</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = ($data["Users"]);
                $temp = json_decode($temp, true);
                foreach ($temp as $i) { ?>
                    <tr>
                        <td><?php echo $i["idUser"] ?></td>
                        <td><?php echo $i["userName"] ?></td>
                        <td><?php echo $i["role"] ?></td>
                        <td><?php echo $i["fullname"] ?></td>
                        <td><?php echo $i["gioiTinh"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <form action="./insertUser" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm tài khoản người dùng</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        Username
                        <input type="text" name="userName" class="form-control">
                    </div>
                    <div class="form-group">
                        Password
                        <input type="password" class="form-control" name="passWord">
                    </div>
                    <div class="form-group">
                        Name
                        <input type="text" class="form-control" name="fullName">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                Admin
                                <select name="role" id="" class="form-control">
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                Sex
                                <select name="sex" id="" class="form-control">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success pull-right" name="them">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>