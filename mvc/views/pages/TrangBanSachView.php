<?php
$temp = ($data["Sach"]);
$temp = json_decode($temp, true); ?>
<div class="row" id= "sanPham">
    <?php
    foreach ($temp as $i) {
    ?>
        <div class="col-3">
            <div class="card"style="width: 95%%; margin-top: 10px; margin-bottom: 10px;min-height: 464px;">
                <img class="card-img-top" src="../public/images/<?php echo $i["hinhAnh"]?>" alt="Sách" style="max-height: 253px;">
                <form action="./chiTiet" method="post">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $i["tenSach"]?></h4>
                        <p class="card-text" style="text-align:right; color: red"><?php echo $i["giaBan"]?> đ</p>
                        <input type="hidden" name="idSach" value="<?php echo $i["idSach"]?>">
                        <button type="submit" class="btn btn-info"  style="text-align: center; margin-bottom: 15px;">Chi tiết</button>
                        <a id = "<?php echo $i["idSach"]?>" class="btn btn-info addGioHang" style="text-align: center;">Thêm vào giỏ hàng</a>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>