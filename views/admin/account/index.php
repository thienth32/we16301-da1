<h2>Danh sách tài khoản</h2>
<table class="table table-stripped">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php foreach($dsTaiKhoan as $u): ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['name'] ?></td>
                <td><?= $u['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>