<h2>Quản lý NXB</h2>
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
                <form action="./insertNXB" method="post">
                    <fieldset style="border: 1px solid #55efc4; padding: 10px; border-radius:10px">
                        <legend style="width: auto; border:0; color: #555;">Action</legend>
                        Tên NXB
                        <div class="row">
                            <div class="col-10">
                                <input type="text" name="NXB" class="form-control" id="">
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
                        <li style="font-size: 20px" class="list-group-item">Tổng số NXB</li>
                        <li style="font-size: 30px" class="list-group-item" id="countNXB">10</li>
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
                    <th>Tên NXB</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = ($data["NXB"]);
                $temp = json_decode($temp, true);
                foreach ($temp as $i) { ?>
                    <tr>
                        <td><?php echo $i["idNhaXuatBan"] ?></td>
                        <td><?php echo $i["tenNhaXuatBan"] ?></td>
                        <td><a id="<?php echo $i["idNhaXuatBan"] ?>" class="btn btn-danger deleteNXB">Xoá</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
