<h2>Danh sách tài khoản</h2>
<table class="table table-stripped">
    <thead>
        <th>ID</th>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>
        <a href="<?= ADMIN_URL . 'tai-khoan/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach($dsTaiKhoan as $u): ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['name'] ?></td>
                <td><?= $u['email'] ?></td>
                <td>
                    <img src="<?= PUBLIC_ASSETS . $u['avatar'] ?>" width="100">
                </td>
                <td>
                    <a href="<?= ADMIN_URL . 'tai-khoan/sua?id=' . $u['id'] ?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="javascript:;" onclick="confirm_before_remove('<?= ADMIN_URL . 'tai-khoan/xoa?id=' . $u['id'] ?>', '<?= $u['name'] ?>')" class="btn btn-sm btn-danger">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>