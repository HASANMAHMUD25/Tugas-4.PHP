<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASAN MAHMUD</title>
    <style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #00FFFF; /* Mengganti warna latar belakang ke aqua */
    }

    table {
        width: 50%;
        margin: 20px auto;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #1E90FF;
        padding: 10px;
        text-align: left;
        background-color: black;
        color: #fff;
    }

    th {
        background-color: #1E90FF;
    }

    button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        justify-content: "center";
    }

    button:hover {
        background-color: #1E90FF;  
    }
</style>
</head>
<body>
    <table>
        <tr>
            <th>Siswa</th>
            <th>Keterangan</th>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><?php echo $_POST['umur']; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $_POST['gender']; ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td><?php echo $_POST['sekolah']; ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>
                <?php
                    $hobi = $_POST['hobi'];
                    if (!empty($hobi)) {
                        foreach ($hobi as $hbi) {
                            echo $hbi . "<br>";
                        }
                    }
                ?>
                <button><a href="login.php" style="text-decoration: none; color: #fff;">Back</a></button>
            </td>
        </tr>
    </table>

</body>
</html>