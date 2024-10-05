<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Users</title>
</head>
<body>

    <h1 style="color: Black; display: flex;  justify-content: center;">Data Users</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead style="background-color: yellow;">
            <tr style="color: black;">
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

        
        <?php
            // Inisialisasi URL
            $url = 'https://jsonplaceholder.typicode.com/users';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            // Ubah respon JSON menjadi array
            $data = json_decode($response, true);

            //menampilkan data dalam tabel
            foreach ($data as $user) {
                echo "<tr>";
                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . $user['name'] . "</td>";
                echo "<td>" . $user['username'] . "</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>

</body>
</html>
