<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <form action="/user/save" method="post">
    <h1>Tambah User</h1>
    <p>
        <input type="text" name="user_id" placeholder="ID User"><br>
        <input type="text" name="user_nama" placeholder="Nama"><br>
        <input type="text" name="user_email" placeholder="E-mail"><br>
    </p>
    <button type="submit">Save</button>
    </form>
</body>
</html>