<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Danh sách tài khoản</h2>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php foreach($users as $u): ?>
                <tr>
                    <td><?= $u['id'] ?></td>
                    <td><?= $u['name'] ?></td>
                    <td><?= $u['email'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>