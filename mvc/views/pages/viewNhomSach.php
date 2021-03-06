<h2>Quản lý nhóm sách</h2>
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
                <form action="./insertSach" method="post">
                    <fieldset style="border: 1px solid #55efc4; padding: 10px; border-radius:10px">
                        <legend style="width: auto; border:0; color: #555;">Action</legend>
                        Tên nhóm sách
                        <div class="row">
                            <div class="col-10">
                                <input type="text" name="nhomSach" class="form-control" id="">
                            </div>
                            <div class="col-2">
                                <input type="submit" value="Thêm" id="addNhomSach" name="insert" class="btn btn-primary">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-4">
                <div class="card text-center bg-primary">
                    <ul class="list-group list-group-flush">
                        <li style="font-size: 20px" class="list-group-item">Tổng số nhóm sách</li>
                        <li style="font-size: 30px" class="list-group-item" id="countNhomSach">10</li>
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
                    <th>Tên nhóm sách</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = ($data["Nhom_sach"]);
                $temp = json_decode($temp, true);
                foreach ($temp as $i) { ?>
                    <tr>
                        <td><?php echo $i["idNhomSach"] ?></td>
                        <td><?php echo $i["TenNhomSach"] ?></td>
                        <td><a id="<?php echo $i["idNhomSach"] ?>" class="btn btn-danger deleteNhomSach">Xoá</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
