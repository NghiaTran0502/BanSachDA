<h2>Quản lý nhóm sách</h2>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-8">

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
                    <th>Tên nhóm sách</th>
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
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>