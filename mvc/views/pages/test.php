<h2>Quản lý nhóm sách</h2>
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
<script>
    
</script>