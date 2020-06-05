<?php
$temp = ($data["Sach"]);
$temp = json_decode($temp, true);
?>
<div class="container">
    <div class="row" id="muaSach" style="padding-top: 20px; padding-bottom: 20px;">
        <?php
        foreach ($temp as $i) {
        ?>
            <div class="col-4">
                <img src="../public/images/<?php echo $i["hinhAnh"] ?>" style="width: 300px;" alt="" srcset="">
            </div>
            <div class="col-8">
                <div style="margin-top: 20px; font-size: 30px; font-weight: bold;">
                    <?php echo $i["tenSach"] ?>
                </div>
                <div style="margin-top: 0; font-size: 30px; font-weight: bold; color: red;">
                    Giá bán: <?php echo $i["giaBan"] ?>
                </div>
                <ul>
                    <li>
                        Tác giả: <?php echo $i["tenTacGia"] ?>
                    </li>
                    <li>
                        Nhà xuất bản: <?php echo $i["tenNhaXuatBan"] ?>
                    </li>
                    <li>
                        Thể loại: <?php echo $i["theLoai"] ?>
                    </li>
                    <li>
                        Số trang: <?php echo $i["soTrang"] ?>
                    </li>
                    <li>
                        Năm phát hành: <?php echo $i["namPhatHanh"] ?>
                    </li>
                    <li>
                        Nhóm sách: <?php echo $i["TenNhomSach"] ?>
                    </li>
                </ul>
                <div>
                    <a id="<?php echo $i["idSach"] ?>" class="btn btn-info themGioHang">Thêm vào giỏ hàng</a>
                </div>
            </div>
    </div>
<?php } ?>
</div>