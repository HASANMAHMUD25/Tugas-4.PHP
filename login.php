<!DOCTYPE html>
<html lang="en"><head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form from Bootsnipp</title>

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #C2D9FF;
        }
        form {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #E0E5EC;
            text-align: center; 
        }
        legend {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-control {
            width: calc(100% - 20px); 
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        h5 {
            margin-bottom: 5px;
            text-align: center; 
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }
        button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #00FFFF; 
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        justify-content: "center";
    }
        button:hover {
            background-color: #45a049;
        }
        
        .hobi-checkbox {
        display: inline-block;
        margin-right: 20px;
    }
        
    </style>
</head>
<body>

<form class="form-horizontal" method="POST" action="p_log.php">
    <fieldset>


        <legend>HASAN MAHMUD</legend>

        <h5>Nama</h5>
        <input id="nama" name="nama" type="text" placeholder="Masukkan Nama" class="form-control input-md"><br>

        <h5>Umur</h5>
        <input id="umur" name="umur" type="text" placeholder="Masukkan Umur" class="form-control input-md"><br>

        <?php
                $gender = [
                    1 => "  Laki-laki  ",  "  Perempuan",
                ];
                ?>
                <h5>Gender : </h5>    
                <?php
                foreach ($gender as $key => $val) {
                    echo '<input type="radio" name="gender" value="'. $val . '">' . $val;
                }
                ?><br><br>
                

        <?php
                $pendidikan = [
                    "Pendidikan Anda" => "-",
                    "SD" => "SD",
                    "SMP" => "SMP",
                    "SMA" => "SMA",
                    "S1" => "S1",
                    "S2" => "S2",
                    "S3" => "S3"
                ];
                ?>
                
                <h5>Pendidikan :</h5>
                <select name="sekolah" placeholder="Pendidikan Anda">
                    <?php
                    foreach ($pendidikan as $key => $val) {
                        echo '<option value="' . $val . '">' . $key . '</option>';
                    }
                    ?>
                </select><br><br>

        <!-- Multiple Checkboxes -->
        <?php
        $hobbies = [
            "Baca Buku", "Travelling", "Olah Raga", "Nonton", "Naik Gunung", "Mancing"
        ];
        ?>
            <h5>Hobi : </h5>
    <?php
        $hobbies = [
            "Baca Buku", "Travelling", "Olah Raga", "Nonton", "Naik Gunung", "Mancing"
        ];
        foreach ($hobbies as $key => $val) {
            echo '<input type="checkbox" name="hobi[]" value="' . $val . '" class="hobi-checkbox">' . $val;
        }
    ?><br><br>
                    
        <button id="singlebutton" name="singlebutton" class="btn btn-success">Masuk</button>

    </fieldset>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>