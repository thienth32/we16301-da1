<h2>Danh sách tài khoản</h2>
<table class="table table-stripped">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>

        </th>
    </thead>
    <tbody>
        <?php foreach($dsTaiKhoan as $u): ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['name'] ?></td>
                <td><?= $u['email'] ?></td>
                <td>
                    <a href="<?= ADMIN_URL . 'tai-khoan/xoa?id=' . $u['id'] ?>" class="btn btn-sm btn-danger">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>