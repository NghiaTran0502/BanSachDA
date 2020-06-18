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
                <form action="./find" method="post">
                    <fieldset style="border: 1px solid #55efc4; padding: 10px; border-radius:10px">
                        <legend style="width: auto; border:0; color: #555;">Action</legend>
                        <div class="row" id="Book">
                            <div class="col-8">
                                <input type="text" name="maSach" placeholder="Mã sách" class="form-control">
                            </div>
                            <div class="col-2">
                                <input type="submit" value="Tìm kiếm" id="findSach" class="btn btn-success">
                            </div>
                            <div class="col-2">
                                <input type="button" value="Thêm" id="themSachBTN" class="btn btn-success">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-4">
                <div class="card text-center bg-primary">
                    <ul class="list-group list-group-flush">
                        <li style="font-size: 20px" class="list-group-item">Tổng số nhóm sách</li>
                        <li style="font-size: 30px" class="list-group-item">10</li>
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
                    <th>Mã sách</th>
                    <th>Tên sách</th>
                    <th>Giá bán</th>
                    <th>Thể loại</th>
                    <th>Ngôn ngữ</th>
                    <th>Số trang</th>
                    <th>Nam phát hành</th>
                    <th>Hình ảnh</th>
                    <th>Tác giả</th>
                    <th>Nhà xuất bản</th>
                    <th>Nhóm sách</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = ($data["Sach"]);
                $temp = json_decode($temp, true);
                foreach ($temp as $i) { ?>
                    <tr>
                        <td><?php echo $i["idSach"] ?></td>
                        <td><?php echo $i["maSach"] ?></td>
                        <td><?php echo $i["tenSach"] ?></td>
                        <td><?php echo $i["giaBan"] ?></td>
                        <td><?php echo $i["theLoai"] ?></td>
                        <td><?php echo $i["ngonNgu"] ?></td>
                        <td><?php echo $i["soTrang"] ?></td>
                        <td><?php echo $i["namPhatHanh"] ?></td>
                        <td><img class="rounded" style="max-width: 100px;" src="../public/images/<?php echo $i["hinhAnh"] ?>" alt="SanPham"></td>
                        <td><?php echo $i["tenTacGia"] ?></td>
                        <td><?php echo $i["tenNhaXuatBan"] ?></td>
                        <td><?php echo $i["TenNhomSach"] ?></td>
                        <td><a id="<?php echo $i["idSach"] ?>" class="btn btn-danger deleteSach">Xoá</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="./insertSach" method="POST" enctype="multipart/form-data">
                <div class="modal-header ">
                    <h4 class="modal-title">Thêm sách</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Mã sách</label>
                                <input type="text" class="form-control" name="maSach">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Ngôn ngữ</label>
                                <input type="text" class="form-control" name="ngonNgu">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Thể loại</label>
                                <input type="text" class="form-control" name="theLoai">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Tên sách</label>
                                <input type="text" class="form-control" name="tenSach">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Giá bán</label>
                                <input type="text" class="form-control" name="giaBan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Tác gỉa</label>
                                <select class="form-control" name="tacGia">
                                    <?php
                                    $temp = ($data["Tac_gia"]);
                                    $temp = json_decode($temp, true);
                                    foreach ($temp as $i) { ?>
                                        <option value="<?php echo $i["idTacGia"] ?>">
                                            <?php echo $i["tenTacGia"] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Nhà xuất bản</label>
                                <select class="form-control" name="NXB">
                                    <?php
                                    $temp = ($data["NXB"]);
                                    $temp = json_decode($temp, true);
                                    foreach ($temp as $i) { ?>
                                        <option value="<?php echo $i["idNhaXuatBan"] ?>">
                                            <?php echo $i["tenNhaXuatBan"] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Nhóm sách</label>
                                <select class="form-control" name="nhomSach">
                                    <?php
                                    $temp = ($data["Nhom_sach"]);
                                    $temp = json_decode($temp, true);
                                    foreach ($temp as $i) { ?>
                                        <option value="<?php echo $i["idNhomSach"] ?>">
                                            <?php echo $i["TenNhomSach"] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <!-- <input type="text" class="form-control" id="soTrang"> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label>Số trang</label>
                                <input type="text" class="form-control" name="soTrang">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Năm phát hành</label>
                                <input type="text" class="form-control" name="namPhatHanh">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name="hinhAnh" id="hinhAnh" accept=".PNG, .JPG, .GIF">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-default pull-right" name="them">Thêm</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>